<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 1</title>
</head>
<body>
    <form action="index.php" method="post">
        <p>Digite a primeira nota<p><input type="text" name="txtN1"id="txtN1">
        <p>Digite a segunda nota</p><input type="text" name="txtN2"id="txtN2">
        <p>Digite a terceira nota</p><input type="text" name="txtN3" id="txtN3">

        <p><input type="submit" value="calcular" name="bynCalc"></p>

    </form>
    <?php

        $n1 = $_POST['txtN1'];
        $n2 = $_POST['txtN2'];
        $n3 = $_POST['txtN3'];

        $res = ($n1+$n2+$n3)/3;

        echo "A média é <b>$res</b></br>";

        if($res>=5){
            echo "Aprovado";
        } else if ($res>=3) {
            echo "Recuperação";
        } else {
            echo "Reprovado";
        }
    ?>
</body>
</html>