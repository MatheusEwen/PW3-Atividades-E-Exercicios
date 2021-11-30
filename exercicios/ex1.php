<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercicio 1</title>
</head>
<body>
    <fieldset>
        <legend>Exercicio 1</legend>
        <form action="ex1.php" method="post">
            
            Digite o 1ºnúmero<input type="text" name="num1" id="num1"><br>   
             
            Digite o 2ºnúmero<input type="text" name="num2" id="num2"><br>
              
            Digite o 3ºnúmero<input type="text" name="num3" id="num3"><br>

            <button type="submit">Qual é maior?</button>

        </form>

    </fieldset>
    <?php

        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $num3 = $_POST['num3'];

        if($num1 > $num2 && $num3){
            echo"O número $num1 é maior do que todos";
        } elseif($num2 > $num1 && $num3){
            echo"O número $num2 é maior do que todos";
        }elseif($num3 > $num1 && $num2){
            echo"O número $num3 é maior do que todos";
        }


    ?>
</body>
</html>