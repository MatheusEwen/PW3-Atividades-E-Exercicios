<?php 
class AnuncianteController {

    function abrirCadastro(){
        include_once "view/CadastroAnunciante.php";
    }

    function cadastrarAnunciante(){
        include_once "model/Anunciante.php";
        $anu = new Anunciante();

        $anu->nome = $_POST["nome"];
        $anu->apelido = $_POST["apelido"];
        $anu->cpf = $_POST["cpf"];
        $anu->celular = $_POST["celular"];
        $anu->email = $_POST["email"];
        $anu->senha = $_POST["senha"];
        $anu->datanascimento = $_POST["datanascimento"];
        $anu->datacadastro = $_POST["datacadastro"];
        $anu->cep = $_POST["cep"];
        $anu->rua = $_POST["rua"];
        $anu->bairro = $_POST["bairro"];
        $anu->cidade = $_POST["cidade"];
        $anu->estado = $_POST["estado"];
        $anu->numero = $_POST["numero"];
        $anu->statuss = $_POST["statuss"];
        
        $anu->cadastrar();
        echo "<script>
                alert('Dados gravados com sucesso!');
                window.location='index.php?classe=AnuncianteController&metodo=abrirCadastro';
                </script>";
    }

    function abrirConsulta(){

        include_once "model/Anunciante.php";
        $usu = new Anunciante();
        $dadosUsuario = $usu->consultar();
        include_once "view/ConsultaAnunciante.php";//abrir tela de consulta


    }

    function excluirAnunciante(){

        include_once "model/Anunciante.php";
        $anu = new Anunciante();
        $anu->codanunciante = $_GET["codanunciante"];
        $anu->excluir();
        //direcionar novamente para a página de consulta
        header("Location:index.php?classe=AnuncianteController&metodo=abrirConsulta");

    }

    function editarAnunciante(){
        include_once "model/Anunciante.php";

        $anu = new Anunciante();
        $anu->codanunciante = $_GET["codanunciante"];
        $dadosAnunciante = $anu->retornar();

        //direcionar para tela de editar cadastreo de Anunciante
        include_once "view/EditarAnunciante.php";

    }

    function atualizarAnunciante(){
        include_once "model/Anunciante.php";
        $anu = new Anunciante();

        $anu->nome = $_POST["nome"];
        $anu->apelido = $_POST["apelido"];
        $anu->cpf = $_POST["cpf"];
        $anu->celular = $_POST["celular"];
        $anu->email = $_POST["email"];
        $anu->senha = $_POST["senha"];
        $anu->datanascimento = $_POST["datanascimento"];
        $anu->cep = $_POST["cep"];
        $anu->rua = $_POST["rua"];
        $anu->bairro = $_POST["bairro"];
        $anu->cidade = $_POST["cidade"];
        $anu->estado = $_POST["estado"];
        $anu->numero = $_POST["numero"];
        $anu->statuss = $_POST["statuss"];
        $anu->codanunciante = $_POST["codanunciante"];
       


        $anu->atualizar();//executando o metodo da classe Anunciante (Model)
        echo "<script>
                alert('Dados gravados com sucesso!');
                window.location='index.php?classe=AnuncianteController&metodo=abrirConsulta';
                </script>";
    }
}


?>