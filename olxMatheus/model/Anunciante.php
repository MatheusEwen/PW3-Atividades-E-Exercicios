<?php 
class Anunciante {
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
    private $statuss;
    private $codanunciante;

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

        $hoje = date('Y/m/d');
        //$data1 = DateTime::createFromFormat("Y/m/d", $this->$datanascimento);

        $cmd = $con->prepare("INSERT INTO anunciante(nome, apelido, datacadastro, cpf, celular, email, senha, datanascimento, cep, rua, bairro, cidade, estado, numero, status ) VALUES (:nome, :apelido, :datacadastro, :cpf, :celular, :email, :senha, :datanascimento, :cep, :rua, :bairro, :cidade, :estado, :numero, :statuss )");
        //enviando os valores para os parametros de banco de dados
        $cmd->bindParam(":nome", $this->nome);
        $cmd->bindParam(":apelido", $this->apelido);
        $cmd->bindParam(":datacadastro", $hoje);
        $cmd->bindParam(":cpf", $this->cpf);
        $cmd->bindParam(":celular", $this->celular);
        $cmd->bindParam(":email", $this->email);
        $cmd->bindParam(":senha", $this->senha);
        $cmd->bindParam(":datanascimento", $this->datanascimento);
        $cmd->bindParam(":cep", $this->cep);
        $cmd->bindParam(":rua", $this->rua);
        $cmd->bindParam(":bairro", $this->bairro);
        $cmd->bindParam(":cidade", $this->cidade);
        $cmd->bindParam(":estado", $this->estado);
        $cmd->bindParam(":numero", $this->numero);
        $cmd->bindParam(":statuss", $this->statuss);

        $cmd->execute();//executar o comando
    }

    function consultar(){
        $con = Conexao::conectar();//carregar a conexao
        $cmd = $con->prepare("SELECT * FROM anunciante");
        $cmd->execute();
        return $cmd->fetchALL(PDO::FETCH_OBJ);//RETORNA DADOS EM FORMA DE VETOR(ARRAY)

    }

    function retornar(){
        $con = Conexao::conectar();//carregar a conexao
        $cmd = $con->prepare("SELECT * FROM anunciante WHERE codanunciante = :codanunciante");
        $cmd->bindParam(":codanunciante", $this->codanunciante);
        $cmd->execute();
        return $cmd->fetch(PDO::FETCH_OBJ);//RETORNA DADOS EM FORMA DE VETOR(ARRAY)

    }

    function excluir(){

        $con = Conexao::conectar();
        $cmd = $con->prepare("DELETE FROM anunciante WHERE codanunciante = :codanunciante");
        $cmd->bindParam(":codanunciante", $this->codanunciante);
        $cmd->execute();

    }

    function atualizar(){
        $con = Conexao::conectar();//carregar a conexao
        $cmd = $con->prepare("UPDATE anunciante SET 
        nome = :nome,
        apelido = :apelido,
        cpf = :cpf,
        celular = :celular, 
        email = :email,
        senha = :senha,
        datanascimento = :datanascimento,
        cep = :cep,
        rua = :rua,
        bairro = :bairro,
        cidade = :cidade,
        estado = :estado,
        numero = :numero,
        status = :statuss WHERE codanunciante = :codanunciante ");
        
        $cmd->bindParam(":nome", $this->nome);
        $cmd->bindParam(":apelido", $this->apelido);
        $cmd->bindParam(":cpf", $this->cpf);
        $cmd->bindParam(":celular", $this->celular);
        $cmd->bindParam(":email", $this->email);
        $cmd->bindParam(":senha", $this->senha);
        $cmd->bindParam(":datanascimento", $this->datanascimento);
        $cmd->bindParam(":cep", $this->cep);
        $cmd->bindParam(":rua", $this->rua);
        $cmd->bindParam(":bairro", $this->bairro);
        $cmd->bindParam(":cidade", $this->cidade);
        $cmd->bindParam(":estado", $this->estado);
        $cmd->bindParam(":numero", $this->numero);
        $cmd->bindParam(":statuss", $this->statuss);
        $cmd->bindParam(":codanunciante", $this->codanunciante);
        
        $cmd->execute();//executar o comando
    }
}


?>