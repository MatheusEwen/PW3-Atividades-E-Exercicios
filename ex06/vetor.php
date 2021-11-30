<!DOCTYPE html>
<html>
<head>
<title>Vetor</title>
</head>
<body>


<?php
    $idade = array();
    $idade[0] = 10;
    $idade[1] = 89;
    $idade[2] = 15;
    $idade[3] = 20;
    $idade[4] = 14;
    $idade[5] = 72;
    $idade[6] = 30;
    $idade[7] = 90;
    $idade[8] = 17;
    $idade[9] = 28;
    $idade[10] = 99;


    $c = 0;
    $maior = 0;
    for($i=0;$i<=9;$i++) {
        echo "O valor da posição é $i é $idade[$i] <br>";
        if($idade[$i]>=18){
            $c++;
        }
        if($idade[$i] > $maior){
            $maior = $idade[$i];
        }
        
    }
    echo "<br> Tem mais de 18 anos $c pessoas";
    echo "<br> A maior idade no vetor é $maior";


?>
</body>
</html>