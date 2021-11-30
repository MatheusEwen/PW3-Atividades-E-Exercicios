<?php
//colocando em uso o PHPMailer
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class UsuarioController
{

    function abrirCadastro()
    {
        include_once "view/CadastroUsuario.php";//exibir a tela de cadastro de usuário
    }

    function cadastrarUsuario()
    {
        include_once "model/Usuario.php";
        $usu = new Usuario(); //instanciando a classe Usuario (Model)
        //enviando valores do form HTML para a objeto da classe Usuario (Model)
        $usu->nome   = $_POST["nome"];
        $usu->email  = $_POST["email"];
        $usu->senha  = password_hash($_POST["senha"], PASSWORD_DEFAULT);
        $usu->acesso = $_POST["acesso"];

        //funcionalidade para envio de arquivo
        $nomeArquivo = $_FILES["foto"]["name"];
        $nomeTemp = $_FILES["foto"]["tmp_name"];
        //pegar a extensão do arquivo
        $info = new SplFileInfo($nomeArquivo);
        $extensao = $info->getExtension();
        //gerando novo nome
        $novoNome = md5(microtime()) . ".$extensao";
        $destino = "arquivos/$novoNome";
        //realizando upload
        move_uploaded_file($nomeTemp, $destino);

        $usu->foto = $novoNome; //irá para o Banco de Dados

        $usu->cadastrar();//executando o método da classe Usuario (model)
        //exibindo uma mensagem e voltando para a página de cadastro
        echo "<script>
                alert('Dados gravados com sucesso!');
                window.location='index.php?classe=UsuarioController&metodo=abrirCadastro';
              </script>"; 
    }

    function abrirConsulta()
    {
        session_start(); //iniciar sessão
        if(!$_SESSION["dadosUsuario"]) //verificar se não existe
        {
            //direcionar para o Login
            header("Location:index.php?classe=UsuarioController&metodo=abrirLogin");
        }

        //caso não tenha permissão para acessar a tela de consulta de usuários
        if($_SESSION["dadosUsuario"]->acesso == 2)
        {
            //direcionar para o Home
            header("Location:index.php");
        }

        include_once "model/Usuario.php"; //incluir model
        $usu = new Usuario();//intancia da model
        $dadosUsuario = $usu->consultar(); //executar consultar da model

        include_once "view/ConsultaUsuario.php"; //abrir tela de consulta
    }

    function excluirUsuario()
    {
        include_once "model/Usuario.php";
        $usu = new Usuario();
        $usu->codusuario = $_GET["codusuario"];

        //antes de excluir no banco iremos excluir o arquivo da pasta
        $dadosUsuario = $usu->retornar();
        if(is_file("arquivos/$dadosUsuario->foto"))//existe o arquivo?
        {
            unlink("arquivos/$dadosUsuario->foto");//excluir arquivo
        }

        $usu->excluir();
        //direcionar novamente para a página de consulta
        header("Location:index.php?classe=UsuarioController&metodo=abrirConsulta");
    }

    function editarUsuario()
    {
        include_once "model/Usuario.php"; //incluir arquivo Usuario.php (MODEL)
        $usu = new Usuario(); //instanciar a classe Usuario (Model)
        $usu->codusuario = $_GET["codusuario"]; //enviar o código através do link (URL)
        $dadosUsuario = $usu->retornar(); //executar o método na MODEL que retorna os dados de 1 usuário

        //direcionar para a tela de editar cadastro de usuário
        include_once "view/EditarUsuario.php";
    }

    function atualizarUsuario()
    {
        include_once "model/Usuario.php";
        $usu = new Usuario(); //instanciando a classe Usuario (Model)
       
        //enviando valores do form HTML para a objeto da classe Usuario (Model)
        $usu->nome          = $_POST["nome"];
        $usu->email         = $_POST["email"];
        $usu->senha         = password_hash($_POST["senha"], PASSWORD_DEFAULT);
        $usu->acesso        = $_POST["acesso"];
        $usu->codusuario    = $_POST["codusuario"];


        //funcionalidade para envio de arquivo
        $nomeArquivo = $_FILES["foto"]["name"];
        $nomeTemp = $_FILES["foto"]["tmp_name"];
        //pegar a extensão do arquivo
        $info = new SplFileInfo($nomeArquivo);
        $extensao = $info->getExtension();
        //gerando novo nome
        $novoNome = md5(microtime()) . ".$extensao";
        $destino = "arquivos/$novoNome";
        //realizando upload
        move_uploaded_file($nomeTemp, $destino);

        $usu->foto = $novoNome; //irá para o Banco de Dados

        //excluir arquivo anterior
        $dadosUsuario = $usu->retornar();
        if(is_file("arquivos/$dadosUsuario->foto"))//existe o arquivo?
        {
            unlink("arquivos/$dadosUsuario->foto");//excluir arquivo
        }

        $usu->atualizar();//executando o método da classe Usuario (model)
        //exibindo uma mensagem e voltando para a página de cadastro
        echo "<script>
                alert('Dados atualizado com sucesso!');
                window.location='index.php?classe=UsuarioController&metodo=abrirConsulta';
              </script>"; 
    }

    function abrirLogin()
    {
        include_once "view/Login.php";//abrir tela de login
    }

    function logarUsuario()
    {
        include_once "model/Usuario.php";
        $usu = new Usuario();

        $usu->email = $_POST["email"];
        $usu->senha = $_POST["senha"];

        $dadosUsuario = $usu->logar();
        if($dadosUsuario) //exite?
        {
            if(password_verify($usu->senha, $dadosUsuario->senha))
            {
                //criar a sessão para identificar o usuário
                session_start();
                $_SESSION["dadosUsuario"] = $dadosUsuario;
                //redirecionar para a tela inicial (home)
                header("Location:index.php?classe=HomeController&metodo=abrirHome");
            }
            else
            {
                //mensagem de erro
                echo "<script>
                    alert('Usuário ou senha inválido!');
                    window.location='index.php?classe=UsuarioController&metodo=abrirLogin';
                </script>";
            }
        }    
        else
        {
            //mensagem de erro
            echo "<script>
                      alert('Usuário ou senha inválido!');
                      window.location='index.php?classe=UsuarioController&metodo=abrirLogin';
                  </script>";
        }
    }

    function sairUsuario()
    {
        session_start();
        session_destroy();//limpando sessão
        header("Location:index.php?classe=UsuarioController&metodo=abrirLogin");
    }


    function abrirRecuperar()
    {
        include_once "view/RecuperarSenha.php";
    }

    function recuperarSenha()
    {
        include_once "model/Usuario.php";
        $usu = new Usuario();
        
        $usu->email = $_POST["email"];

        $dadosUsuario = $usu->logar();//verificar no BD
        if($dadosUsuario) //existe email no BD?
        {
            require 'src/Exception.php';
            require 'src/PHPMailer.php';
            require 'src/SMTP.php';

            //Create an instance; passing `true` enables exceptions
            $mail = new PHPMailer(true);

            try {
                //Server settings
                $mail->isSMTP();                                            //Send using SMTP
                $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
                $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
                $mail->Username   = 'stresstest3647@gmail.com';                     //SMTP username
                $mail->Password   = '78ui&*UI';                               //SMTP password
                $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
                $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

                //Destinatários
                $mail->setFrom('stresstest3647@gmail.com', 'Sistema OLX CLone'); //quem envia
                $mail->addAddress($_POST["email"]);     //quem  recebe
                //Conteúdo
                $mail->isHTML(true); //permite HTML no conteúdo do email
                $mail->Subject = utf8_decode('RESUPERAÇÃO DE SENHA'); //Assunto do email

                $novaSenha = "Senha1234"; //gerar uma senha aleatória
                //atualizar a senha no banco de dados antes de enviar
                $senhaCripto = password_hash($novaSenha, PASSWORD_DEFAULT);
                $usu->senha = $senhaCripto;
                $usu->atualizarSenha();

                $mail->Body    = "<b>Bem-vindo</b><br>Segue sua nova senha: $novaSenha"; //mensagem do e-mail
                //$mail->AltBody = 'Bem-vindo! Minha mensagem para o teste de envio sem tags html';

                $mail->send();
                echo 'Uma nova senha foi enviada para sua caixa de e-mail....';
            } catch (Exception $e) {
                echo "Mensagem não enviada. Erro: {$mail->ErrorInfo}";
            }
        }
        else
        {
            echo "Não localizado";
        }
    }
}
?>