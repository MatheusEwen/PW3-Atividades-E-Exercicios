<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <form action="validacao.php" method="post">
        <fieldset>
            <legend>Dados de login</legend>
            <label for="txUsuario">Usuário</label>
            <input type="text" name="usuario" id="txUsuario" maxlength="25"/>
            <label for="txSenha">Senha</label>
            <input type="password" name="senha" id="txSenha">
            <input type="submit" value="Entrar" />
        </fieldset>
    </form>
</body>
</html>