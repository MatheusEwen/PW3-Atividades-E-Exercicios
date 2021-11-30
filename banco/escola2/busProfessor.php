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

<form action="busProfessor.php" method="post">
<p>Digite o número do Professor</p>
<input type="text" name="txtcod"><br>
<br>
<input type="submit" name="btn">
<br>

<?php

require_once('conn.php');

$cod=$_POST['txtcod'];

if ($cod!="")
{



$insere=mysqli_query($conn, "SELECT * FROM tbProfessor WHERE codProfessor='$cod'")or die("erro");


while($linha=mysqli_fetch_array($insere)){

$codigo=$linha['codProfessor'];
$nome=$linha['nomeProfessor'];

echo "<br>Codigo:$codigo<BR>";
echo "Nome:$nome<BR>";

}
}

?>

</form>