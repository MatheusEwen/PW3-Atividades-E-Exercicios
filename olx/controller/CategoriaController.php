<?php
class CategoriaController
{
    function abrirCadastro()
    {
        include_once "view/CadastroCategoria.php";
    }

    function cadastrarCategoria()
    {
        include_once "model/Categoria.php";
        $cat = new Categoria(); //instanciando a classe Categoria (Model)
        //enviando valores do form HTML para a objeto da classe Categoria (Model)
        $cat->nomecategoria = $_POST["nomecategoria"];
        $cat->cadastrar();//executando o método da classe Usuario (model)
        //exibindo uma mensagem e voltando para a página de cadastro
        echo "<script>
                alert('Dados gravados com sucesso!');
                window.location='index.php?classe=CategoriaController&metodo=abrirCadastro';
              </script>"; 
    }

    function abrirConsulta()
    {
        session_start();
        include_once "model/Categoria.php";
        $cat = new Categoria();
        $dadosCategoria = $cat->consultar();

        include_once "view/ConsultaCategoria.php";
    }

    function excluirCategoria()
    {
        include_once "model/Categoria.php";
        $cat = new Categoria();
        $cat->codcategoria = $_GET["codcategoria"];
        $cat->excluir();
        //direcionar novamente para a página de consulta
        header("Location:index.php?classe=CategoriaController&metodo=abrirConsulta");
    }

    function editarCategoria()
    {
        include_once "model/Categoria.php";
        $cat = new Categoria();
        $cat->codcategoria = $_GET["codcategoria"];
        $dadosCategoria = $cat->retornar(); 

        //direcionar para a tela de editar cadastro de usuário
        include_once "view/EditarCategoria.php";
    }

    function atualizarCategoria()
    {
        include_once "model/Categoria.php";
        $cat = new Categoria();
        $cat->nomecategoria = $_POST["nomecategoria"];
        $cat->codcategoria  = $_POST["codcategoria"];
        $cat->atualizar();
        //exibindo uma mensagem e voltando para a página de cadastro
        echo "<script>
                alert('Dados atualizado com sucesso!');
                window.location='index.php?classe=CategoriaController&metodo=abrirConsulta';
              </script>"; 
    }
}
?>