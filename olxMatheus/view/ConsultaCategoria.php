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
    <a href="index.php">Voltar para o inicio</a>
    <table>
        <thead>
            <th>Consulta Categoria</th>
        </thead>
        <tbody>
            <table border="1">
                <thead>
                    <th>#</th>
                    <th>Categoria</th>
                </thead>
                <tbody>
                <?php 
                foreach ($dadosCategoria as $key => $value) {
                    echo"<tr>
                            <td>$value->codcategoria</td>
                            <td>$value->nomecategoria</td>
                        </tr>";
                }
            ?>
                </tbody>


            </table>
            
        </tbody>
    </table>
    
</body>
</html>