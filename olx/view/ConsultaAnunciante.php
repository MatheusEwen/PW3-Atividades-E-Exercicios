<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta Anunciante</title>
</head>
<body>
    <h1>Consulta Anunciante</h1>
    <a href="index.php">Voltar para a página inicial</a><br>
    <table border="1">
        <thead>
            <th>Nome</th>
            <th>Apelido</th>
            <th>CPF</th>
            <th>E-mail</th>
            <th>Status</th>
            <th>Ações</th>
        </thead>
        <tbody>
            <?php
            foreach ($dadosAnunciante as $key => $value) {
                echo "<tr>
                        <td>$value->nome</td>
                        <td>$value->apelido</td>
                        <td>$value->cpf</td>
                        <td>$value->email</td>
                        <td>$value->status</td>
                        <td>
                            <a onclick=\"return confirm('Deseja excluir?')\" href='index.php?classe=AnuncianteController&metodo=excluirAnunciante&codanunciante=$value->codanunciante'>Excluir</a>
                            <a href='index.php?classe=AnuncianteController&metodo=editarAnunciante&codanunciante=$value->codanunciante'>Editar</a>
                        </td>
                    </tr>";
            }
            ?>
        </tbody>
    </table>

   
</body>
</html>