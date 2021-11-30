<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Anunciante</title>
</head>
<body>
    <h1>Editar Anunciante</h1>
    <a href="index.php">Voltar para pagina inicial</a>
    <form action="index.php?classe=AnuncianteController&metodo=atualizarAnunciante" method="post">

        <input type="hidden" name="codanunciante" value="<?php echo $dadosAnunciante->codanunciante ?>" readonly>

        Nome: <input type="text" name="nome" value="<?php echo $dadosAnunciante->nome ?>">
        <br>

        Apelido: <input type="text" name="apelido" value="<?php echo $dadosAnunciante->apelido ?>">
        <br>

        CPF: <input type="text" name="cpf" value="<?php echo $dadosAnunciante->cpf ?>">
        <br>

        Celular: <input type="text" name="celular" value="<?php echo $dadosAnunciante->celular ?>">
        <br>

        Email: <input type="email" name="email" value="<?php echo $dadosAnunciante->email ?>">
        <br>

        Senha: <input type="password" name="senha" value="<?php echo $dadosAnunciante->senha ?>">
        <br>

        Data Nascimento: <input type="date" name="datanascimento" value="<?php echo $dadosAnunciante->datanascimento ?>">
        <br>

        CEP: <input type="text" name="cep" value="<?php echo $dadosAnunciante->cep ?>">
        <br>

        Rua: <input type="text" name="rua" value="<?php echo $dadosAnunciante->rua ?>">
        <br>

        Bairro: <input type="text" name="bairro" value="<?php echo $dadosAnunciante->bairro ?>">
        <br>

        Cidade: <input type="text" name="cidade" value="<?php echo $dadosAnunciante->cidade ?>">
        <br>

        Estado: <input type="text" name="estado" value="<?php echo $dadosAnunciante->estado ?>">
        <br>

        Numero: <input type="text" name="numero" value="<?php echo $dadosAnunciante->numero ?>">
        <br> 

        Status: <br>
        <select name="statuss" value="<?php echo $dadosAnunciante->statuss ?>">
            <option value="1">operando</option>
            <option value="2">ausente</option>
        </select><br><br>

        <button type="submit" value="Gravar">Gravar</button>

    </form>
    
</body>
</html>