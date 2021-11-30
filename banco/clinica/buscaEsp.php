<html>

<head> <Title>Busca da Especialidade</title>
</head>

<Body>

<form action="buscaEsp.php" method="post">

<input type="text" name="txtcod"><br>


<br><br>
<input type="submit" name="btn">
<br>

<?php

require_once('conn.php');

$cod=$_POST['txtcod'];

if ($cod!="")
{

$insere=mysqli_query($conn, "SELECT * FROM tbEspecialidade WHERE codEsp='$cod'")or die("erro");


while($linha=mysqli_fetch_array($insere)){

    $cod=$linha['codEsp'];
    $nome=$linha['nomeEsp'];

    echo"<p>";
        
    echo "<table><tr><td>Código da Especialidade: </td><td>$cod</td><tr>";
    echo "<tr><td>Nome da Especialidade: </td><td>$nome</td><tr></table>";

}
}

?>

</form>