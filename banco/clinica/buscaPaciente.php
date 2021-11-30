<html>

<head> <Title>teste</title>
</head>

<Body>

<form action="buscaPaciente.php" method="post">

<input type="text" name="txtcod"><br>


<br><br>
<input type="submit" name="btn">
<br>

<?php

require_once('conn.php');

$cod=$_POST['txtcod'];

if ($cod!="")
{



$insere=mysqli_query($conn, "SELECT * FROM tdpaciente WHERE codPac='$cod'")or die("erro");


while($linha=mysqli_fetch_array($insere)){

$codigo=$linha['codPac'];
$nome=$linha['nomePac'];
$tele=$linha['telPac'];
$cel=$linha['celPac'];
$emailPac=$linha['emailPac'];

echo "<br>$codigo<BR>";
echo "$nome<BR>";
echo "$tele<BR>";
echo "$cel<BR>";
echo "$emailPac<BR>";
}
}

?>

</form>