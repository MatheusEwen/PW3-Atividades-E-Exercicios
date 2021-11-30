<?php 
class CategoriaController{

    function abrirCadastro(){
        include_once "view/CadastroCategoria.php";
    }

    function cadastrarCategoria(){
        include_once "model/Categoria.php";
        $cat = new Categoria();
        
        $cat->nomecategoria = $_POST["nomecategoria"];
        $cat->cadastrar();
        echo "<script>
                alert('Dados gravados com sucesso!');
                window.location='index.php?classe=CategoriaController&metodo=abrirCadastro';
                </script>";
    }

    function abrirConsulta(){

        include_once "model/Categoria.php";
        $cat = new Categoria();
        $dadosCategoria = $cat->consultar();

        include_once "view/ConsultaCategoria.php";
    }

}


?>