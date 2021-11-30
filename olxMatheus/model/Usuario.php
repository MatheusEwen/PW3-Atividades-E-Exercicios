<?php
class Usuario {
    //atribitos
    private $codusuario;
    private $nome;
    private $email;
    private $senha;
    private $acesso;

    //set e set
    function __get($atributo){
        return $this->$atributo;
    }
    function __set($atributo, $valor){
        $this->$atributo = $valor;
    }

    //construtor da clase será executado automaticamente ao instanciar esta classe

    function __construct(){
        include_once "Conexao.php";
    }

    //metodos para cadastrar
    function cadastrar(){
        $con = Conexao::conectar();//carregar a conexao
        $cmd = $con->prepare("INSERT INTO usuario(nome, email, senha, acesso) VALUES (:nome, :email, :senha, :acesso)");
        //enviando os valores para os parametros de banco de dados
        $cmd->bindParam(":nome", $this->nome);
        $cmd->bindParam(":email", $this->email);
        $cmd->bindParam(":senha", $this->senha);
        $cmd->bindParam(":acesso", $this->acesso);
        $cmd->execute();//executar o comando
    }

    //metodos para cunsultar
    function consultar(){
        $con = Conexao::conectar();//carregar a conexao
        $cmd = $con->prepare("SELECT codusuario, nome, email, senha, REPLACE(REPLACE(acesso,'1','Administrador'),'2','Usuário') AS acesso FROM usuario");
        $cmd->execute();
        return $cmd->fetchALL(PDO::FETCH_OBJ);//RETORNA DADOS EM FORMA DE VETOR(ARRAY)

    }
    //metodo para excluir
    function excluir(){

        $con = Conexao::conectar();
        $cmd = $con->prepare("DELETE FROM usuario WHERE codusuario = :codusuario");
        $cmd->bindParam(":codusuario", $this->codusuario);
        $cmd->execute();

    }


    //metodo para atualizar
    function atualizar(){
        $con = Conexao::conectar();//carregar a conexao
        $cmd = $con->prepare("UPDATE usuario SET 
        nome = :nome, 
        email = :email,
        senha = :senha, 
        acesso = :acesso WHERE codusuario = :codusuario ");
        
        $cmd->bindParam(":nome", $this->nome);
        $cmd->bindParam(":email", $this->email);
        $cmd->bindParam(":senha", $this->senha);
        $cmd->bindParam(":acesso", $this->acesso);
        $cmd->bindParam(":codusuario", $this->codusuario);
        $cmd->execute();//executar o comando
    }

    //retornar os dados de um usuario
    function retornar(){
        $con = Conexao::conectar();//carregar a conexao
        $cmd = $con->prepare("SELECT * FROM usuario WHERE codusuario = :codusuario");
        $cmd->bindParam(":codusuario", $this->codusuario);
        $cmd->execute();
        return $cmd->fetch(PDO::FETCH_OBJ);//RETORNA DADOS EM FORMA DE VETOR(ARRAY)

    }

    //Metodo para logar
    function logar(){

        $con = Conexao::conectar();
        $cmd = $con->prepare("SELECT * FROM usuario WHERE email = :email");
        $cmd->bindParam(":email", $this->email);
        $cmd->execute();
        return $cmd->fetch(PDO::FETCH_OBJ);

    }
   
}
?>