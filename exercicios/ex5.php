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
        <legend>Exercicio 5</legend>
        <form action="ex5.php" method="post">
            
            <h1>Qual a area do trapézio?</h1>

            Digite a base maior do Trapézio<input type="text" name="baseMaior" id="baseMaior"><br>

            Digite a base menor do Trapézio <input type="text" name="baseMenor" id="baseMenor"><br>

            Digite a altura do Trapézio <input type="text" name="h" id="h"><br>

            <button type="submit">calcular</button>

        </form>

    </fieldset>
    <?php

        $B = $_POST['baseMaior'];
        $b = $_POST['baseMenor'];
        $h = $_POST['h'];
        $area = ($B + $b) * $h/2;

        echo"A área do trapézio é $area m^2";

    ?>
</body>
</html>