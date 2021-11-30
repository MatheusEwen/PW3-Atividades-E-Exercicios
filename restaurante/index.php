<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora Restaurante</title>
</head>
<body>
    <h1>Calculadora restaurante</h1>
    <form action="recebe.php" method="post">
        Informe o valor do consumo: <input type="number" name="consumo" step="any">
        <br>
        Informe a quantidade de pessoas para dividir a conta: <input type="number" name="pessoas">
        <br>
        <input type="submit" value="calcular">
    </form>
</body>
</html>