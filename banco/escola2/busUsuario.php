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

<form action="busUsuario.php" method="post">
<p>Digite o número do Usuario</p>
<input type="text" name="txtcod"><br>


<br>
<input type="submit" name="btn">
<br>

<?php

require_once('conn.php');

$cod=$_POST['txtcod'];

if ($cod!="")
{



$insere=mysqli_query($conn, "SELECT * FROM tbUsuario WHERE codUsuario='$cod'")or die("erro");


while($linha=mysqli_fetch_array($insere)){

$codigo=$linha['codUsuario'];
$nome=$linha['nomeUsuario'];
$tipo=$linha['tipoUsuario'];

echo "<br>Codigo:$codigo<BR>";
echo "Nome:$nome<BR>";
echo "Tipo:$tipo<BR>";
}
}

?>

</form>