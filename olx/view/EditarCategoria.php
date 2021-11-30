<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Categoria</title>
</head>
<body>
    <h1>Editar Categoria</h1>
    <a href="index.php?classe=CategoriaController&metodo=abrirConsulta">Voltar para a página de consulta</a><br>
    
    <form action="index.php?classe=CategoriaController&metodo=atualizarCategoria" method="post">
        
        <input type="hidden" name="codcategoria" value="<?php echo $dadosCategoria->codcategoria; ?>" readonly>
    
        Nome:<br>
        <input type="text" name="nomecategoria" value="<?php echo $dadosCategoria->nomecategoria; ?>"><br>
        <br>
        <input type="submit" value="Gravar">
    </form>
</body>
</html>