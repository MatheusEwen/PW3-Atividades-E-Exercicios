<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Revisão</title>
</head>
<body>
<form action="index.php" method="post">
    <h1>Conversão de moedas</h1>
    valor em reais<input type="number" name="num">
    <select name="opcao" id="opcao">
        <option value="dolar">Dolar</option>
        <option value="euro">euro</option>
        <option value="bitcon">Bitcon</option>
    </select>
    <input type="submit" value="converter">
</form>
<?php

    $num = $_POST["num"];
    $op = $_POST["opcao"];
    if($op == "dolar"){
        $dolar = $num / 5;
        echo "<br> dolar: " . number_format($dolar,2,",",".");
    } else if ($op == "euro"){
        $euro = $num / 6;
        echo "<br>euro: ". number_format($euro,2,",",".");
    } else if($op == "bitcon"){
        $bitcon = $num / 206316.74;    
        echo "<br>bitcoin ". number_format($bitcon,2,",",".");
    }
    
    
    

?>
    
</body>
</html>



