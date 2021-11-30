<html>
    <head>
        <title> Laços de repetição </title>
    </head>
<body>
    <form action="tabuada.php" method="post">
        <input type="number" name="txtNum" id="txtNum">

        <input type="submit" name="btnCalc" id="Calcular">
    </form>
    <?php

        $num = $_POST['txtNum'];
        if(empty($num)) {
            echo"Digite uma valor para ser calculado";
        } else {
            for($i=0 ;$i<=10 ; $i++ ){
                $res = $num * $i;
                echo"$i X $num = $res <br>";
            }
        }

    ?>
</body>
</html>