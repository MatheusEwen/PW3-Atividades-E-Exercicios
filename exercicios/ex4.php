<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercicio 4</title>
</head>
<body>
    <fieldset>
        <legend>Exercicio 4</legend>
        <form action="ex4.php" method="post">
            
            Digite o número 1 <input type="text" name="num1" id="num1"><br>
            Digite o número 2 <input type="text" name="num2" id="num2"><br>

            <p>
            Caso o valor somado seja maior que 20, este deverá ser apresentado somando-se a ele mais 8; caso o valor somado seja menor ou igual a 20, este deverá ser apresentado subtraindo-se 5
            </p>

            <button type="submit">calcular</button>

        </form>

    </fieldset>
    <?php

        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $soma = $num1 + $num2;

        if($soma > 20){
            $soma = $soma + 8;
            echo"O valor deu $soma";
        } elseif($soma <= 20){
            $soma = $soma - 5;
            echo"O valor deu $soma";
        } 

    ?>
</body>
</html>