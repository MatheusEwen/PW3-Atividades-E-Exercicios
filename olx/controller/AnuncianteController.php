<?php
class AnuncianteController
{

    function abrirCadastro()
    {
        include_once "view/CadastroAnunciante.php";//exibir a tela de cadastro de usuário
    }

    function cadastrarAnunciante()
    {
        include_once "model/Anunciante.php";
        $anu = new Anunciante(); //instanciando a classe Usuario (Model)
        //enviando valores do form HTML para a objeto da classe Usuario (Model)
        $anu->nome   = $_POST["nome"];
        $anu->apelido   = $_POST["apelido"];
        $anu->datacadastro   = date("Y-m-d");
        $anu->cpf   = $_POST["cpf"];
        $anu->celular   = $_POST["celular"];
        $anu->email  = $_POST["email"];
        $anu->senha  = password_hash($_POST["senha"], PASSWORD_DEFAULT);
        $anu->datanascimento   = $_POST["datanascimento"];
        $anu->cep   = $_POST["cep"];
        $anu->rua   = $_POST["rua"];
        $anu->bairro   = $_POST["bairro"];
        $anu->cidade   = $_POST["cidade"];
        $anu->estado   = $_POST["estado"];
        $anu->numero   = $_POST["numero"]; 
        $anu->status = $_POST["status"];
        $anu->cadastrar();//executando o método da classe Usuario (model)
        //exibindo uma mensagem e voltando para a página de cadastro
        echo "<script>
                alert('Dados gravados com sucesso!');
                window.location='index.php?classe=AnuncianteController&metodo=abrirCadastro';
              </script>"; 
    }

    function abrirConsulta()
    {

        include_once "model/Anunciante.php"; //incluir model
        $anu = new Anunciante();//intancia da model
        $dadosAnunciante = $anu->consultar(); //executar consultar da model

        include_once "view/ConsultaAnunciante.php"; //abrir tela de consulta
    }

    function excluirAnunciante()
    {
        include_once "model/Anunciante.php";
        $anu = new Anunciante();
        $anu->codanunciante = $_GET["codanunciante"];
        $anu->excluir();
        //direcionar novamente para a página de consulta
        header("Location:index.php?classe=AnuncianteController&metodo=abrirConsulta");
    }

    function editarAnunciante()
    {
        include_once "model/Anunciante.php"; //incluir arquivo Usuario.php (MODEL)
        $anu = new Anunciante(); //instanciar a classe Usuario (Model)
        $anu->codanunciante = $_GET["codanunciante"]; //enviar o código através do link (URL)
        $dadosAnunciante = $anu->retornar(); //executar o método na MODEL que retorna os dados de 1 usuário

        //direcionar para a tela de editar cadastro de usuário
        include_once "view/EditarAnunciante.php";
    }

    function atualizarAnunciante()
    {
        include_once "model/Anunciante.php";
        $anu = new Anunciante(); //instanciando a classe Usuario (Model)
       
        //enviando valores do form HTML para a objeto da classe Usuario (Model)
        $anu->nome   = $_POST["nome"];
        $anu->apelido   = $_POST["apelido"];
        $anu->datacadastro   = date("Y-m-d");
        $anu->cpf   = $_POST["cpf"];
        $anu->celular   = $_POST["celular"];
        $anu->email  = $_POST["email"];
        $anu->senha  = password_hash($_POST["senha"], PASSWORD_DEFAULT);
        $anu->datanascimento   = $_POST["datanascimento"];
        $anu->cep   = $_POST["cep"];
        $anu->rua   = $_POST["rua"];
        $anu->bairro   = $_POST["bairro"];
        $anu->cidade   = $_POST["cidade"];
        $anu->estado   = $_POST["estado"];
        $anu->numero   = $_POST["numero"]; 
        $anu->status = $_POST["status"];
        $anu->codanunciante    = $_POST["codanunciante"];

        $anu->atualizar();//executando o método da classe Usuario (model)
        //exibindo uma mensagem e voltando para a página de cadastro
        echo "<script>
                alert('Dados atualizado com sucesso!');
                window.location='index.php?classe=AnuncianteController&metodo=abrirConsulta';
              </script>"; 
    }

    function logarAnunciante()
    {
        include_once "model/Anunciante.php";
        $anu = new Anunciante();

        $anu->email = $_POST["email"];
        $anu->senha = $_POST["senha"];

        $dadosAnunciante = $anu->logar();
        if($dadosAnunciante) //exite?
        {
            if(password_verify($anu->senha, $dadosAnunciante->senha))
            {
                //criar a sessão para identificar o usuário
                session_start();
                $_SESSION["dadosAnunciante"] = $dadosAnunciante;
                //redirecionar para a tela inicial (home)
                header("Location:index.php?classe=HomeController&metodo=abrirHomeAnunciante");
            }
            else
            {
                //mensagem de erro
                echo "<script>
                    alert('Usuário ou senha inválido!');
                    window.location='index.php?classe=AnuncianteController&metodo=abrirLoginAnunciante';
                </script>";
            }
        }    
        else
        {
            //mensagem de erro
            echo "<script>
                      alert('Usuário ou senha inválido!');
                      window.location='index.php?classe=AnuncianteController&metodo=abrirLoginAnunciante';
                  </script>";
        }
    }

    function sairAnunciante()
    {
        session_start();
        session_destroy();//limpando sessão
        header("Location:index.php?classe=AnuncianteController&metodo=abrirLoginAnunciante");
    }
}
?>