<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recuperar Senha</title>
</head>
<body>
    <form action="index.php?classe=UsuarioController&metodo=recuperarSenha" method="post">
        Informe seu e-mail para recuperar sua senha:
        <br>
        <input type="text" name="email" required><br><br>
        <input type="submit" value="Recuperar Senha">
    </form>
</body>
</html>