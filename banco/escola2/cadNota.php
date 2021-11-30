<?php

//A sessão precisa ser iniciada em cada página diferente
if(!isset($_SESSION)) session_start();

//verifica se não há a variavel da sessão que indentifca o usuário.
if(!isset($_SESSION['UsuarioCod']) or $_SESSION['UsuarioNivel']!=1 ) {
    //Destroi a sessão por segurança

    session_destroy();

    //redirecionando o visitante de volta pro login
    header("Location: index.php"); exit;

}
?>
<!DOCTYPE html>
<html lang="br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro notas</title>
</head>
<style>
body{
    background-color: blue;
	color:white;
}
table{
    border:1px, solid;
}

</style>
<body>
    <?php
        include_once("conn.php");
    ?>
    <form method="POST" action="processa_cad_Nota.php">
    <table>
    <tr>
        <td>Nota do Aluno:</td>
        <td><input type="text" name="txtNota"></td>
    </tr>
    <tr>
        <td>Digita as Faltas:</td>
        <td><input type="text" name="txtFaltas"></td>
    </tr>
    <tr>
        <td>Aluno</td>
        <td><select name="selectAluno">
            <option>Selecione</option>
            <?php
                $result_niveis_acessos = "SELECT * FROM tbAluno";
                $resultado_niveis_acesso = mysqli_query($conn, $result_niveis_acessos);
                while($row_niveis_acessos = mysqli_fetch_assoc($resultado_niveis_acesso)){
                    ?>
                    <option value="<?php echo $row_niveis_acessos['codAluno']; ?>"><?php echo $row_niveis_acessos['nomeAluno']; ?><?php
                }
            ?>
        </select></td>
    </tr>
    <tr>
        <td>Disciplina</td>
        <td><select name="selectDisciplina">
            <option>Selecione</option>
            <?php
                $result_niveis_acessos = "SELECT * FROM tbDisciplina";
                $resultado_niveis_acesso = mysqli_query($conn, $result_niveis_acessos);
                while($row_niveis_acessos = mysqli_fetch_assoc($resultado_niveis_acesso)){ ?>
                    <option value="<?php echo $row_niveis_acessos['codDisciplina']; ?>"><?php echo $row_niveis_acessos['nomeDisciplina']; ?></option><?php
                }
            ?>
        </select></td>
    </tr>
    <tr>
        <td>Professor</td>
        <td><select name="selectProfessor">
            <option>Selecione</option>
            <?php
                $result_niveis_acessos = "SELECT * FROM tbProfessor";
                $resultado_niveis_acesso = mysqli_query($conn, $result_niveis_acessos);
                while($row_niveis_acessos = mysqli_fetch_assoc($resultado_niveis_acesso)){ ?>
                    <option value="<?php echo $row_niveis_acessos['codProfessor']; ?>"><?php echo $row_niveis_acessos['nomeProfessor']; ?></option><?php
                }
            ?>
        </select></td>
    </tr>
    <tr>
    <td><input type="submit" value="cadastrar"></td>
    </tr>
        
        </table>
    </form>
</body>
</html>