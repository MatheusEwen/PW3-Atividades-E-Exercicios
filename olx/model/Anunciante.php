<?php
class Anunciante
{
    //atributos
    private $codanunciante;
    private $nome;
    private $apelido;
    private $datacadastro;
    private $cpf;
    private $celular;
    private $email;
    private $senha;
    private $datanascimento;
    private $cep;
    private $rua;
    private $bairro;
    private $cidade;
    private $estado;
    private $numero;
    private $status;

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

    function cadastrar()
    {
        $con = Conexao::conectar();//carregar a conexão
        $cmd = $con->prepare("INSERT INTO anunciante (nome, apelido, datacadastro,cpf,celular,email, senha,datanascimento,cep,rua,bairro,cidade,estado,numero,status)
        VALUES (:nome, :apelido, :datacadastro,:cpf,:celular,:email, :senha,:datanascimento,:cep,:rua,:bairro,:cidade,:estado,:numero,:status)"); //preparando o comando SQL a ser executado
        //enviando os valores para os parâmetros de banco de dados
        $cmd->bindParam(":nome",    $this->nome);
        $cmd->bindParam(":apelido",   $this->apelido);
        $cmd->bindParam(":datacadastro",   $this->datacadastro);
        $cmd->bindParam(":cpf",  $this->cpf);
        $cmd->bindParam(":celular",  $this->celular);
        $cmd->bindParam(":email",  $this->email);
        $cmd->bindParam(":senha",  $this->senha);
        $cmd->bindParam(":datanascimento",  $this->datanascimento);
        $cmd->bindParam(":cep",  $this->cep);
        $cmd->bindParam(":rua",  $this->rua);
        $cmd->bindParam(":bairro",  $this->bairro);
        $cmd->bindParam(":cidade",  $this->cidade);
        $cmd->bindParam(":estado",  $this->estado);
        $cmd->bindParam(":numero",  $this->numero);
        $cmd->bindParam(":status",  $this->status);
        $cmd->execute();//executar o comando 
    }

    //método para consultar
    function consultar()
    {
        $con = Conexao::conectar();//carregar a conexão
        $cmd = $con->prepare("SELECT * FROM anunciante");
        $cmd->execute();
        return $cmd->fetchALL(PDO::FETCH_OBJ); //retornar dados em forma de VETOR (array)
    }

    //método para excluir
    function excluir()
    {
        $con = Conexao::conectar();
        $cmd = $con->prepare("DELETE FROM anunciante WHERE codanunciante = :codanunciante");
        $cmd->bindParam(":codanunciante", $this->codanunciante);
        $cmd->execute();
    }

    //método para atualizar
    function atualizar()
    {
        $con = Conexao::conectar();//carregar a conexão
        $cmd = $con->prepare("UPDATE anunciante SET nome = :nome, apelido = :apelido, datacadastro = :datacadastro,cpf = :cpf,celular = :celular,
        email = :email, senha = :senha,datanascimento = :datanascimento,cep = :cep,rua = :rua,bairro = :bairro,cidade = :cidade,
        estado = :estado,numero = :numero,status = :status
                             WHERE codanunciante = :codanunciante"); //preparando o comando SQL a ser executado
        
        //enviando os valores para os parâmetros de banco de dados
        $cmd->bindParam(":nome",    $this->nome);
        $cmd->bindParam(":apelido",   $this->apelido);
        $cmd->bindParam(":datacadastro",   $this->datacadastro);
        $cmd->bindParam(":cpf",  $this->cpf);
        $cmd->bindParam(":celular",  $this->celular);
        $cmd->bindParam(":email",  $this->email);
        $cmd->bindParam(":senha",  $this->senha);
        $cmd->bindParam(":datanascimento",  $this->datanascimento);
        $cmd->bindParam(":cep",  $this->cep);
        $cmd->bindParam(":rua",  $this->rua);
        $cmd->bindParam(":bairro",  $this->bairro);
        $cmd->bindParam(":cidade",  $this->cidade);
        $cmd->bindParam(":estado",  $this->estado);
        $cmd->bindParam(":numero",  $this->numero);
        $cmd->bindParam(":status",  $this->status);
        $cmd->bindParam(":codanunciante", $this->codanunciante);
        
        $cmd->execute();//executar o comando 
    }


    //método para retornar os dados de um usuário
    function retornar()
    {
        $con = Conexao::conectar();//carregar a conexão
        $cmd = $con->prepare("SELECT * FROM anunciante WHERE codanunciante = :codanunciante");
        $cmd->bindParam(":codanunciante", $this->codanunciante);
        $cmd->execute();
        return $cmd->fetch(PDO::FETCH_OBJ); //retornar dados em forma de VETOR (array)
    }

    //método para logar
    function logar()
    {
        $con = Conexao::conectar();
        $cmd = $con->prepare("SELECT * FROM anunciante WHERE email = :email");
        $cmd->bindParam(":email", $this->email);
        $cmd->execute();
        return $cmd->fetch(PDO::FETCH_OBJ);
    }

}
?>