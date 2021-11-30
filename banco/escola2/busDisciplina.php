<html>

<head> <Title>teste</title>
</head>
<style>
body{
    background-color: #000;
    color: white;
}
</style>

<Body>

<form action="busDisciplina.php" method="post">
<p>Digite o número da Disciplina</p>
<input type="text" name="txtcod"><br>
<br>
<input type="submit" name="btn">
<br>

<?php

require_once('conn.php');

$cod=$_POST['txtcod'];

if ($cod!="")
{



$insere=mysqli_query($conn, "SELECT * FROM tbDisciplina WHERE codDisciplina='$cod'")or die("erro");


while($linha=mysqli_fetch_array($insere)){

$codigo=$linha['codDisciplina'];
$nome=$linha['nomeDisciplina'];

echo "<br>Codigo:$codigo<BR>";
echo "Nome:$nome<BR>";

}
}

?>

</form>