<html>
<head> <Title>Aluno Busca</title>
</head>
<style>
body{
    background-color: #000;
    color: white;
}
</style>
<Body>
<form action="busAluno.php" method="post">
<p>Digite o número do Aluno</p>
<input type="text" name="txtcod"><br>
<br>
<input type="submit" name="btn">
<br>

<?php

require_once('conn.php');

$cod=$_POST['txtcod'];

if ($cod!="")
{

    $insere=mysqli_query($conn, "SELECT * FROM tbAluno WHERE codAluno='$cod'")or die("erro");

    while($linha=mysqli_fetch_array($insere)){

    $codigo=$linha['codAluno'];
    $nome=$linha['nomeAluno'];

    echo "<br>Codigo:$codigo<BR>";
    echo "Nome:$nome<BR>";

}
}

?>

</form>