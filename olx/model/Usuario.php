<?php
class Usuario
{
    //atributos
    private $codusuario;
    private $nome;
    private $email;
    private $senha;
    private $acesso;
    private $foto;

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
    /*function cadastrar()
    {
        $con = Conexao::conectar();//carregar a conexão
        $cmd = $con->prepare("CALL spCadastrarUsuario(:nome, :email, :senha, :acesso)"); //preparando o comando SQL a ser executado
        //enviando os valores para os parâmetros de banco de dados
        $cmd->bindParam(":nome",    $this->nome);
        $cmd->bindParam(":email",   $this->email);
        $cmd->bindParam(":senha",   $this->senha);
        $cmd->bindParam(":acesso",  $this->acesso);
        $cmd->execute();//executar o comando 
    }*/
    function cadastrar()
    {
        $con = Conexao::conectar();//carregar a conexão
        $cmd = $con->prepare("INSERT INTO usuario (nome, email, senha, acesso,foto)
        VALUES (:nome, :email, :senha, :acesso,:foto)"); //preparando o comando SQL a ser executado
        //enviando os valores para os parâmetros de banco de dados
        $cmd->bindParam(":nome",    $this->nome);
        $cmd->bindParam(":email",   $this->email);
        $cmd->bindParam(":senha",   $this->senha);
        $cmd->bindParam(":acesso",  $this->acesso);
        $cmd->bindParam(":foto",  $this->foto);
        $cmd->execute();//executar o comando 
    }

    //método para consultar
    function consultar()
    {
        $con = Conexao::conectar();//carregar a conexão
        $cmd = $con->prepare("SELECT codusuario, nome, email, senha, REPLACE(REPLACE(acesso,'1','Administrador'),'2','Usuário') AS acesso, foto FROM usuario");
        $cmd->execute();
        return $cmd->fetchALL(PDO::FETCH_OBJ); //retornar dados em forma de VETOR (array)
    }

    //método para excluir
    function excluir()
    {
        $con = Conexao::conectar();
        $cmd = $con->prepare("DELETE FROM usuario WHERE codusuario = :codusuario");
        $cmd->bindParam(":codusuario", $this->codusuario);
        $cmd->execute();
    }

    //método para atualizar
    function atualizar()
    {
        $con = Conexao::conectar();//carregar a conexão
        $cmd = $con->prepare("UPDATE usuario SET nome   = :nome,
                                                email   = :email,
                                                senha   = :senha,
                                                acesso  = :acesso,
                                                foto    = :foto
                             WHERE codusuario = :codusuario"); //preparando o comando SQL a ser executado
        
        //enviando os valores para os parâmetros de banco de dados
        $cmd->bindParam(":nome",    $this->nome);
        $cmd->bindParam(":email",   $this->email);
        $cmd->bindParam(":senha",   $this->senha);
        $cmd->bindParam(":acesso",  $this->acesso);
        $cmd->bindParam(":foto",  $this->foto);
        $cmd->bindParam(":codusuario", $this->codusuario);
        
        $cmd->execute();//executar o comando 
    }

    function atualizarSenha()
    {
        $con = Conexao::conectar();//carregar a conexão
        $cmd = $con->prepare("UPDATE usuario SET senha   = :senha
                             WHERE email = :email"); //preparando o comando SQL a ser executado
        
        //enviando os valores para os parâmetros de banco de dados
        $cmd->bindParam(":email",   $this->email);
        $cmd->bindParam(":senha",   $this->senha);
        
        $cmd->execute();//executar o comando 
    }


    //método para retornar os dados de um usuário
    function retornar()
    {
        $con = Conexao::conectar();//carregar a conexão
        $cmd = $con->prepare("SELECT * FROM usuario WHERE codusuario = :codusuario");
        $cmd->bindParam(":codusuario", $this->codusuario);
        $cmd->execute();
        return $cmd->fetch(PDO::FETCH_OBJ); //retornar dados em forma de VETOR (array)
    }

    //método para logar
    function logar()
    {
        $con = Conexao::conectar();
        $cmd = $con->prepare("SELECT * FROM usuario WHERE email = :email");
        $cmd->bindParam(":email", $this->email);
        $cmd->execute();
        return $cmd->fetch(PDO::FETCH_OBJ);
    }

}
?>