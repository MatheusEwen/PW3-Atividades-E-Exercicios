<?php 
class UsuarioController {
    /*
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;
    */

    function abrirCadastro(){

        include_once "view/CadastroUsuario.php";

    }

    function cadastrarUsuario(){
        include_once "model/Usuario.php";
        $usu = new Usuario();

        $usu->nome = $_POST["nome"];
        $usu->email = $_POST["email"];
        $usu->senha = password_hash($_POST["senha"], PASSWORD_DEFAULT);
        $usu->acesso = $_POST["acesso"];

        $usu->cadastrar();//executando o metodo da classe Usuario (Model)
        echo "<script>
                alert('Dados gravados com sucesso!');
                window.location='index.php?classe=UsuarioController&metodo=abrirCadastro';
                </script>";
    }

    function abrirConsulta(){

    
        include_once "model/Usuario.php";
        $usu = new Usuario();
        $dadosUsuario = $usu->consultar();
        include_once "view/ConsultaUsuarios.php";//abrir tela de consulta

    }

    function excluirUsuario(){

        include_once "model/Usuario.php";
        $usu = new Usuario();
        $usu->codusuario = $_GET["codusuario"];
        $usu->excluir();
        //direcionar novamente para a página de consulta
        header("Location:index.php?classe=UsuarioController&metodo=abrirConsulta");

    }

    function editarUsuario(){
        include_once "model/Usuario.php";

        $usu = new Usuario();
        $usu->codusuario = $_GET["codusuario"];
        $dadosUsuario = $usu->retornar();

        //direcionar para tela de editar cadastreo de usuario
        include_once "view/EditarUsuario.php";

    }

    function atualizarUsuario(){
        include_once "model/Usuario.php";
        $usu = new Usuario();

        $usu->nome = $_POST["nome"];
        $usu->email = $_POST["email"];
        $usu->senha = password_hash($_POST["senha"], PASSWORD_DEFAULT);
        $usu->acesso = $_POST["acesso"];
        $usu->codusuario = $_POST["codusuario"];


        $usu->atualizar();//executando o metodo da classe Usuario (Model)
        echo "<script>
                alert('Dados gravados com sucesso!');
                window.location='index.php?classe=UsuarioController&metodo=abrirConsulta';
                </script>";
    }

    function abrirLogin(){

        include_once "view/Login.php";//abrir a tela

    }

    function logarUsuario(){

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

    function sairUsuario(){
        session_start();
        session_destroy();//limpando sessão
        header("Location:index.php?classe=UsuarioController&metodo=abrirLogin");
    }
/*
    function recuperarSenha(){

        

    require 'src/Exception.php';

    require 'src/PHPMailer.php';

    require 'src/SMTP.php';



    //Create an instance; passing `true` enables exceptions

    $mail = new PHPMailer(true);



    try {

        //Server settings

        $mail->isSMTP();   //Send using SMTP

        $mail->Host = 'smtp.gmail.com'; //Set the SMTP server to send through

        $mail->SMTPAuth = true; //Enable SMTP authentication

        $mail->Username = 'plantaetcc@gmail.com';  //SMTP username

        $mail->Password = 'MLLWTCC1'; //SMTP password

        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS; //Enable implicit TLS encryption

        $mail->Port = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`



        //Destinatários

        $mail->setFrom('plantaetcc@gmail.com', 'Leonardo'); //quem envia

        $mail->addAddress('leo10machadosiqueira@gmail.com');     //quem  recebe

        //$mail->addReplyTo('info@example.com', 'Information');

        //$mail->addCC('cc@example.com'); //cópia

        //$mail->addBCC('bcc@example.com'); //cópia oculta



        //Anexo

        //$mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments

        //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name



        //Conteúdo

        $mail->isHTML(true); //permite HTML no conteúdo do email

        $mail->Subject = 'Teste de envio de email'; //Assunto do email

        $mail->Body    = '<b>Bem-vindo</b><br>Minha mensagem para o teste de envio de email'; //mensagem do e-mail

        //$mail->AltBody = 'Bem-vindo! Minha mensagem para o teste de envio sem tags html';



        $mail->send();

        echo 'Mensagem enviada com sucesso!';

    } catch (Exception $e) {

        echo "Mensagem não enviada. Erro: {$mail->ErrorInfo}";

    }
    }
    */

}

?>