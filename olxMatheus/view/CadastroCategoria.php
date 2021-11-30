<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro Categoria</title>
</head>
<body>
    <h1>Cadastro Categoria</h1>
    <a href="index.php">Voltar para pagina inicial</a>
    <form action="index.php?classe=CategoriaController&metodo=cadastrarCategoria" method="post">
        Nome da categoria:<br>
        <input type="text" name="nomecategoria"><br>
        <br>
        <input type="submit" value="Gravar">
    </form>
</body>
</html>