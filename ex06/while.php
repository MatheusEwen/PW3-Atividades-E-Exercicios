<!DOCTYPE html>
<html>
    <head>
        <title>Exemplo While</title>
    </head>
    <body>

        <form action="while.php" method="post">
            Digite o valor a ser calculado <input type="number" name="txtNum" id="txtNum" placeholder="valor"><br> 
            <input type="submit" value="calcular" name="btnCalc">
        </form>
        <?php

            $num = $_POST['txtNum'];

            if(!empty($num)){
                $c=1;

                while($c <= 10){
                    $valor = $num * $c;
                    echo "$valor <br>";
                    $c++;
                }

            }


        ?>
    </body>
</html>