<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Índice de massa Corporea</title>
</head>
<body>
    <form action="imc.php" method="post">
        <h3>Peso</h3><br>
        <input type="text" name="txtPeso" id="txtPeso"><br>

        <h3>Altura</h3><br>
        <input type="text" name="txtAltura" id="txtAltura"><br>

        <input type="submit" value="Calcular" name="btnEnviar">

    </form>
    <?php 

        $peso = $_POST['txtPeso'];
        $altura = $_POST['txtAltura'];
        $imc = $peso/$altura**2;

        echo "O IMC é <i>$imc</i>";

        if($imc<=18){
            echo "<br>Abaixo do peso<br>";
        } elseif($imc>18 && $imc<25) {
            echo "<br>Peso normal<br>";
        } elseif($imc>=25 && $imc<30){
            echo "<br>Acima do peso<br>";
        } elseif($imc>=30 && $imc<35){
            echo "<br>Obesidade I<br>";
        } elseif ($imc>=35 && $imc<40) {
            echo "<br>Obesidade II<br>";
        } else {
            echo "<br>obesidade III<br>";
        }

    ?>
</body>
</html>