<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercicio 3</title>
</head>
<body>
    <fieldset>
        <legend>Exercicio 3</legend>
        <form action="ex3.php" method="post">
            
            <h1>Despesas Vestibular</h1>

            Digite a valor arrecadado com as inscrições<input type="number" name="valor" id="valor"><br>

            Digite a quantidade de fiscais<input type="number" name="fiscais" id="fiscais"><br>
            
            Digite o valor gasto com a alimentação<input type="number" name="alimentacao" id="alimentacao"><br>

            <button type="submit">Verificar</button>

        </form>

    </fieldset>

    <?php

        $valor = $_POST['valor'];
        $fiscais = $_POST['fiscais'];
        $alimentacao = $_POST['alimentacao'];
        
        if(empty($valor) || empty($fiscais) || empty($alimentacao) ){
            echo"preencha os campos";
        } else {
           $lucro = ($valor - ($fiscais*70) - $alimentacao);
           echo"A universidade saiu com lucro de R$ $lucro";
        }

        

    ?>
</body>
</html>