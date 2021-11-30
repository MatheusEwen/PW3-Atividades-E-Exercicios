<?php
class Produto
{
    //atributos
    private $codproduto;
    private $codcategoria;
    private $codanunciante;
    private $preco;
    private $descricao;
    private $datahora;

    //GET e SET
    function __get($atributo)
    {
        return $this->$atributo;
    }

    function __set($atributo, $valor)
    {
        $this->$atributo = $valor;
    }

    //construtor da classe, será executado automáticamente ao instanciar esta classe
    function __construct()
    {
        include_once "Conexao.php"; //incluir arquivo que conecta no BD
    } 

    //método para cadastrar
    function cadastrar()
    {
        $con = Conexao::conectar();//carregar a conexão
        $cmd = $con->prepare("INSERT INTO produto (codcategoria, codanunciante, titulo, preco, descricao, datahora)
        VALUES (:codcategoria, :codanunciante, :titulo, :preco, :descricao, :datahora)"); //preparando o comando SQL a ser executado
        //enviando os valores para os parâmetros de banco de dados
        $cmd->bindParam(":codcategoria",    $this->codcategoria);
        $cmd->bindParam(":codanunciante",   $this->codanunciante);
        $cmd->bindParam(":titulo",   $this->titulo);
        $cmd->bindParam(":preco",  $this->preco);
        $cmd->bindParam(":descricao",  $this->descricao);
        $cmd->bindParam(":datahora",  $this->datahora);
        $cmd->execute();//executar o comando 
    }

    //método para consultar
    function consultar()
    {
        $con = Conexao::conectar();//carregar a conexão
        $cmd = $con->prepare("SELECT * FROM produto JOIN categoria
        ON categoria.codcategoria = produto.codcategoria
        JOIN anunciante
        ON anunciante.codanunciante = produto.codanunciante");
        $cmd->execute();
        return $cmd->fetchALL(PDO::FETCH_OBJ); //retornar dados em forma de VETOR (array)
    }

    //método para excluir
    function excluir()
    {
        $con = Conexao::conectar();
        $cmd = $con->prepare("DELETE FROM produto WHERE codproduto = :codproduto");
        $cmd->bindParam(":codproduto", $this->codproduto);
        $cmd->execute();
    }

    //método para atualizar
    function atualizar()
    {
        $con = Conexao::conectar();//carregar a conexão
        $cmd = $con->prepare("UPDATE produto SET codcateoria   = :codcateoria,
                                                codanunciante   = :codanunciante,
                                                titulo   = :titulo,
                                                preco   = :preco,
                                                descricao   = :descricao,
                                                datahora   = :datahora
                             WHERE codproduto = :codproduto"); //preparando o comando SQL a ser executado
        
        //enviando os valores para os parâmetros de banco de dados
        $cmd->bindParam(":codcategoria",    $this->codcategoria);
        $cmd->bindParam(":codanunciante",   $this->codanunciante);
        $cmd->bindParam(":titulo",   $this->titulo);
        $cmd->bindParam(":preco",  $this->preco);
        $cmd->bindParam(":descricao",  $this->descricao);
        $cmd->bindParam(":datahora",  $this->datahora);
        $cmd->bindParam(":codproduto", $this->codproduto);
        
        $cmd->execute();//executar o comando 
    }

    //método para retornar os dados de um produto
    function retornar()
    {
        $con = Conexao::conectar();//carregar a conexão
        $cmd = $con->prepare("SELECT * FROM produto WHERE codproduto = :codproduto");
        $cmd->bindParam(":codproduto", $this->codproduto);
        $cmd->execute();
        return $cmd->fetch(PDO::FETCH_OBJ); //retornar dados em forma de VETOR (array)
    }

}
?>