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
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Casdastro de Professor</title>
</head>
<style>
body{
    background-color: blue;
	color:white;
}

</style>
<body>
    <?php
        include_once("conn.php");
    ?>
    <form method="POST" action="processa_cad_Professor.php">
        Nome do Professor: <input type="text" name="txtProfessor"><br><br>
        <input type="submit" value="Cadastar">
    </form>
    
</body>
</html>