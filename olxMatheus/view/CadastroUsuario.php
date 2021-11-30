<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro Usuário</title>
</head>
<body>
    <h1>Cadastro Usuário</h1>
    <a href="index.php">Voltar para pagina inicial</a>
    <form action="index.php?classe=UsuarioController&metodo=cadastrarUsuario" method="post">
        Nome:<br>
        <input type="text" name="nome"><br>

        E-mail:<br>
        <input type="email" name="email"><br>

        Senha:<br>
        <input type="password" name="senha"><br>

        Acesso:<br>
        <select name="acesso">
            <option value="1">Administrador</option>
            <option value="2">Usuário</option>
        </select><br><br>

        <input type="submit" value="Gravar">
    </form>
</body>
</html>