<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta Usuário</title>
</head>
<body>

    <h1>Consulta Usuário</h1>
    <table border="1">
        <thead>
            <th>Nome</th>
            <th>Email</th>
            <th>Acesso</th>
            <th>Ações</th>
        </thead>
        <tbody>
            <?php
            foreach($dadosUsuario as $key => $value){
                echo"<tr>
                        <td>$value->nome</td>
                        <td>$value->email</td>
                        <td>$value->acesso</td>
                        <td>
                            <a onclick=\"return confirm('Deseja excluir?')\"href='index.php?classe=UsuarioController&metodo=excluirUsuario&codusuario=$value->codusuario'>Excluir</a>
                            <a href='index.php?classe=UsuarioController&metodo=editarUsuario&codusuario=$value->codusuario'>Editar</a>
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