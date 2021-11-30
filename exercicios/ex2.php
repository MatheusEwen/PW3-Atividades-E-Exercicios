<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercicio 2</title>
</head>
<body>
    <fieldset>
        <legend>Exercicio 2</legend>
        <form action="ex2.php" method="post">
            
            Digite a 1ºNota<input type="text" name="num1" id="num1"><br>   
             
            Digite a 2ºNota<input type="text" name="num2" id="num2"><br>
              
            Digite a 3ºNota<input type="text" name="num3" id="num3"><br>

            <button type="submit">Situação</button>

        </form>

    </fieldset>
    <?php

        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $num3 = $_POST['num3'];
        $media = ($num1 + $num2 + $num3)/3;

        if($media < 5){
            echo"Sua media é: $media";
            echo"Você está reprovado!!";
        } elseif($media >= 5){
            echo"Sua media é: $media";
            echo"Você está aprovado!!";
        }


    ?>
</body>
</html>