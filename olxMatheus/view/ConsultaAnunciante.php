<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta Anunciante</title>
</head>
<body>
<h1>Consulta Usuário</h1>
    <table border="1">
        <thead>
            <th>Nome</th>
            <th>Apelido</th>
            <th>CPF</th>
            <th>Celular</th>
            <th>Email</th>
            <th>Data Nascimento</th>
            <th>Data Cadastro</th>
            <th>CEP</th>
            <th>Rua</th>
            <th>Bairro</th>
            <th>Cidade</th>
            <th>Estado</th>
            <th>Número</th>
            <th>Status</th>
            <th>Açoes</th>
        </thead>
        <tbody>
            <?php
            foreach($dadosUsuario as $key => $value){
                echo"<tr>
                        <td>$value->nome</td>
                        <td>$value->apelido</td>
                        <td>$value->celular</td>
                        <td>$value->cep</td>
                        <td>$value->email</td>
                        <td>$value->datanascimento</td>
                        <td>$value->datacadastro</td>
                        <td>$value->cep</td>
                        <td>$value->rua</td>
                        <td>$value->bairro</td>
                        <td>$value->cidade</td>
                        <td>$value->estado</td>
                        <td>$value->numero</td>
                        <td>$value->status</td>
                        <td> 
                            <a onclick=\"return confirm('Deseja excluir?')\"href='index.php?classe=AnuncianteController&metodo=excluirAnunciante&codanunciante=$value->codanunciante'>Excluir</a>
                            <a href='index.php?classe=AnuncianteController&metodo=editarAnunciante&codanunciante=$value->codanunciante'>Editar</a>
                        </td>
                    </tr>
                ";
            }
            ?>
        </tbody>
    </table>
    <?php 
    
    ?>
</body>
</html>