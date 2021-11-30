<html>

<head> <Title>teste</title>
</head>

<Body>

<form action="buscaCliente.php" method="post">

<input type="text" name="txtcod"><br>


<br><br>
<input type="submit" name="btn">
<br>

<?php

require_once('conn.php');

$cod=$_POST['txtcod'];

if ($cod!="")
{



$insere=mysqli_query($conn, "SELECT * FROM tdCliente WHERE codCli='$cod'")or die("erro");


while($linha=mysqli_fetch_array($insere)){

$codigo=$linha['codCli'];
$nome=$linha['nomeCli'];
$end=$linha['endCli'];
$tele=$linha['telCli'];
$cel=$linha['celCli'];

echo "<br>$codigo<BR>";
echo "$nome<BR>";
echo "$end<BR>";
echo "$tele<BR>";
echo "$cel<BR>";
}
}

?>

</form>