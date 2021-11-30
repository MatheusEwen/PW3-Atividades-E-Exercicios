<?php
class ProdutoController
{
    function abrirCadastro()
    {
        include_once "model/Categoria.php";
        $cat = new Categoria();
        $dadosCategoria = $cat->consultar();

        include_once "model/Anunciante.php";
        $anu = new Anunciante();
        $dadosAnunciante = $anu->consultar();

        include_once "view/CadastroProduto.php";
    }

    function cadastrarProduto()
    {
        include_once "model/Produto.php";
        $prod = new Produto(); //instanciando a classe Produto (Model)
        //enviando valores do form HTML para a objeto da classe Produto (Model)
        $prod->codcategoria     = $_POST["codcategoria"];
        $prod->codanunciante    = $_POST["codanunciante"];
        $prod->titulo           = $_POST["titulo"];
        $prod->preco            = $_POST["preco"];
        $prod->descricao        = str_replace("script","",$_POST["descricao"]);
        $prod->datahora         = date("Y-m-d H:s");
        $prod->cadastrar();//executando o método da classe Usuario (model)
        //exibindo uma mensagem e voltando para a página de cadastro
        echo "<script>
                alert('Dados gravados com sucesso!');
                window.location='index.php?classe=ProdutoController&metodo=abrirCadastro';
              </script>"; 
    }

    function abrirConsulta()
    {
        include_once "model/Produto.php";
        $prod = new Produto();
        $dadosProduto = $prod->consultar();

        include_once "view/ConsultaProduto.php";
    }

    function excluirProduto()
    {
        include_once "model/Produto.php";
        $prod = new Produto();
        $prod->codProduto = $_GET["codproduto"];
        $prod->excluir();
        //direcionar novamente para a página de consulta
        header("Location:index.php?classe=ProdutoController&metodo=abrirConsulta");
    }

    function editarProduto()
    {
        include_once "model/Produto.php";
        $prod = new Produto();
        $prod->codProduto = $_GET["codproduto"];
        $dadosProduto = $prod->retornar(); 

        //direcionar para a tela de editar cadastro de usuário
        include_once "view/EditarProduto.php";
    }

    function atualizarProduto()
    {
        include_once "model/Produto.php";
        $prod = new Produto();
        $prod->codcategoria     = $_POST["codcategoria"];
        $prod->codanunciante    = $_POST["codanunciante"];
        $prod->titulo           = $_POST["titulo"];
        $prod->preco            = $_POST["preco"];
        $prod->descricao        = $_POST["descricao"];
        $prod->datahora         = date("Y-m-d H:s");
        $prod->codproduto  = $_POST["codproduto"];
        $prod->atualizar();
        //exibindo uma mensagem e voltando para a página de cadastro
        echo "<script>
                alert('Dados atualizado com sucesso!');
                window.location='index.php?classe=ProdutoController&metodo=abrirConsulta';
              </script>"; 
    }
}
?>