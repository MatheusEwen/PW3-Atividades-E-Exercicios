<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro Anunciante</title>
</head>
<body>
    <h1>Cadastro Anunciante</h1>
    <a href="index.php">Voltar para pagina inicial</a>
    <form action="index.php?classe=AnuncianteController&metodo=cadastrarAnunciante" method="post">
        Nome: <input type="text" name="nome">
        <br>
        Apelido: <input type="text" name="apelido">
        <br>
        CPF: <input type="text" name="cpf">
        <br>
        Celular: <input type="text" name="celular">
        <br>
        Email: <input type="email" name="email">
        <br>
        Senha: <input type="password" name="senha">
        <br>
        Data Nascimento: <input type="date" name="datanascimento">
        <br>
        CEP: <input type="text" name="cep">
        <br>
        Rua: <input type="text" name="rua">
        <br>
        Bairro: <input type="text" name="bairro">
        <br>
        Cidade: <input type="text" name="cidade">
        <br>
        Estado: <input type="text" name="estado">
        <br>
        Numero: <input type="text" name="numero">
        <br> 
        Status: <br>
        <select name="statuss">
            <option value="1">operando</option>
            <option value="2">ausente</option>
        </select><br><br>

        <button type="submit" value="Gravar">Gravar</button>

    </form>
    
</body>
</html>