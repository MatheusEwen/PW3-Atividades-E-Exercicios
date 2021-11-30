<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>inicio</title>
</head>
<body>
    <h1>Início Olx </h1>
    Bem-vindo(a): <?php echo $_SESSION["dadosUsuario"]->nome; ?> <br>

    <?php if($_SESSION["dadosUsuario"]->acesso == 1){ ?>
    <a href="index.php?classe=UsuarioController&metodo=abrirCadastro">Cadastrar Usuários</a>
    <br>
    <a href="index.php?classe=CategoriaController&metodo=abrirCadastro">Cadastrar Categorias</a>
    <br>
    <?php } ?>
    <a href="index.php?classe=AnuncianteController&metodo=abrirCadastro">Cadastrar Anunciante</a>
    <br>
    <a href="index.php?classe=UsuarioController&metodo=abrirConsulta">Consultar Usuarios</a>
    <br>
    <a href="index.php?classe=CategoriaController&metodo=abrirConsulta">Consulta Categoria</a>
    <br>
    <a href="index.php?classe=AnuncianteController&metodo=abrirConsulta">Consulta Anunciante</a>
    <br>
    <a href="index.php?classe=UsuarioController&metodo=sairUsuario">Sair</a>

</body>
</html>