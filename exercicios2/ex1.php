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
            
            <h1>Media Ponderada</h1>

            Digite a nota do trabalho do aluno<input type="number" name="nota1" id="nota1"><br>

            Digite a nota da prova do aluno<input type="number" name="prova" id="prova"><br>

            <button type="submit">calcular</button>

        </form>

    </fieldset>
    <?php

        $nota1 = $_POST['nota1'];
        $prova = $_POST['prova'];
        $m = ($nota1*4 + $prova*6)/10;

        echo"A média ponderada do aluno é $m";

    ?>
</body>
</html>