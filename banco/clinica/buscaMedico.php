<html>

<head> <Title>Consulta Médico</title>
</head>

<Body>

<form action="buscaMedico.php" method="post">

<input type="text" name="txtcod"><br>


<br><br>
<input type="submit" name="btn">
<br>

<?php

require_once('conn.php');

$cod=$_POST['txtcod'];

if ($cod!="")
{



$insere=mysqli_query($conn, "SELECT * FROM tdMedico WHERE codMedico='$cod'")or die("erro");
}


while($linha=mysqli_fetch_array($insere)){

    $cod=$linha['codMedico'];
    $nome=$linha['nomeMedico'];
    $cel=$linha['celMedico'];
    $codEsp=$linha['codEsp'];
    echo"<p>";
        
    echo "<table><tr><td>Código do Paciente: </td><td>$cod</td><tr>";
    echo "<tr><td>Nome do Paciente: </td><td>$nome</td><tr>";
    echo "<tr><td>Celular do Paciente: </td><td>$codEsp</td><tr>";
    echo "<tr><td>Celular do Paciente: </td><td>$cel</td><tr></table>";

}

?>

</form>