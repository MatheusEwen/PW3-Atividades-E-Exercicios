<?php
class Categoria
{
    //atributos
    private $codcategoria;
    private $nomecategoria;

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
        $cmd = $con->prepare("INSERT INTO categoria (nomecategoria) VALUES (:nomecategoria)"); //preparando o comando SQL a ser executado
        //enviando os valores para os parâmetros de banco de dados
        $cmd->bindParam(":nomecategoria",    $this->nomecategoria);
        $cmd->execute();//executar o comando 
    }

    //método para consultar
    function consultar()
    {
        $con = Conexao::conectar();
        $cmd = $con->prepare("SELECT * FROM categoria");
        $cmd->execute();
        return $cmd->fetchALL(PDO::FETCH_OBJ);
    }

    //método para excluir
    function excluir()
    {
        $con = Conexao::conectar();
        $cmd = $con->prepare("DELETE FROM categoria WHERE codcategoria = :codcategoria");
        $cmd->bindParam(":codcategoria", $this->codcategoria);
        $cmd->execute();
    }

    //método para atualizar
    function atualizar()
    {
        $con = Conexao::conectar();//carregar a conexão
        $cmd = $con->prepare("UPDATE categoria SET nomecategoria   = :nomecategoria
                             WHERE codcategoria = :codcategoria"); //preparando o comando SQL a ser executado
        
        //enviando os valores para os parâmetros de banco de dados
        $cmd->bindParam(":nomecategoria",    $this->nomecategoria);
        $cmd->bindParam(":codcategoria", $this->codcategoria);
        
        $cmd->execute();//executar o comando 
    }


    //método para retornar os dados de um usuário
    function retornar()
    {
        $con = Conexao::conectar();//carregar a conexão
        $cmd = $con->prepare("SELECT * FROM categoria WHERE codcategoria = :codcategoria");
        $cmd->bindParam(":codcategoria", $this->codcategoria);
        $cmd->execute();
        return $cmd->fetch(PDO::FETCH_OBJ); //retornar dados em forma de VETOR (array)
    }
}
?>