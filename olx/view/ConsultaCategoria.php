<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta Categorias</title>
</head>
<body>
    <h1>Consulta Categorias</h1>
    <a href="index.php">Voltar para a tela inicial</a>
    <table border='1'>
        <thead>
            <th>#</th>
            <th>Categoria</th>
            <th>Ações</th>
        </thead>
        <tbody>
            <?php
                foreach ($dadosCategoria as $key => $value) {

                    if($_SESSION["dadosUsuario"]->acesso == 1)
                    {
                        echo "<tr>
                            <td>$value->codcategoria</td>
                            <td>$value->nomecategoria</td>
                            <td>
                                <a onclick=\"return confirm('Deseja excluir?')\" href='index.php?classe=CategoriaController&metodo=excluirCategoria&codcategoria=$value->codcategoria'>Excluir</a>
                                <a href='index.php?classe=CategoriaController&metodo=editarCategoria&codcategoria=$value->codcategoria'>Editar</a>
                            </td>
                        </tr>";
                    }
                    else
                    {
                        echo "<tr>
                            <td>$value->codcategoria</td>
                            <td>$value->nomecategoria</td>
                            <td>
                                <a href='index.php?classe=CategoriaController&metodo=editarCategoria&codcategoria=$value->codcategoria'>Editar</a>
                            </td>
                        </tr>";
                    }
                }
            ?>
        </tbody>
    </table>
</body>
</html>