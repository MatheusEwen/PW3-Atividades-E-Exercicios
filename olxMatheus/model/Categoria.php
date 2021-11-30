<?php 
class Categoria {
    private $nomecategoria;

    function __get($atributo){
        return $this->$atributo;
    }
    function __set($atributo, $valor){
        $this->$atributo = $valor;
    }

    function __construct(){
        include_once "Conexao.php";
    }

    function cadastrar(){
        $con = Conexao::conectar();//carregar a conexao
        $cmd = $con->prepare("INSERT INTO categoria(nomecategoria) VALUES (:nomecategoria)");
        //enviando os valores para os parametros de banco de dados
        $cmd->bindParam(":nomecategoria", $this->nomecategoria);
        $cmd->execute();//executar o comando
    }
    function consultar(){
        $con = Conexao::conectar();
        $cmd = $con->prepare("SELECT * FROM categoria");
        $cmd->execute();
        return $cmd->fetchALL(pdo::FETCH_OBJ);
    }
}


?>