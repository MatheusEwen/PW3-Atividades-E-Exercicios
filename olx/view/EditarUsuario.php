<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Usuário</title>
</head>
<body>
    <h1>Editar Usuário</h1>
    <a href="index.php?classe=UsuarioController&metodo=abrirConsulta">Voltar para a página de consulta</a><br>
    
    <form action="index.php?classe=UsuarioController&metodo=atualizarUsuario" method="post" enctype="multipart/form-data">
        
        <input type="hidden" name="codusuario" value="<?php echo $dadosUsuario->codusuario; ?>" readonly>
    
        Nome:<br>
        <input type="text" name="nome" value="<?php echo $dadosUsuario->nome; ?>"><br>

        E-mail:<br>
        <input type="email" name="email" value="<?php echo $dadosUsuario->email;?>"><br>

        Senha:<br>
        <input type="password" name="senha" required><br>

        Foto:<br>
        <input type="file" name="foto"><br>

        Acesso:<br>
        <select name="acesso">
            <option value="1">Administrador</option>
            <option value="2">Usuário</option>
        </select><br><br>

        <input type="submit" value="Gravar">
    </form>
</body>
</html>