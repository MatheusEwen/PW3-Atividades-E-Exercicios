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
            
            <h1>Situação da safra</h1>

            Digite a quantidade colhida<input type="number" name="qt" id="qt"><br>

            <button type="submit">Verificar</button>

        </form>

    </fieldset>
    <?php
        $qt = $_POST['qt'];
        if(empty($qt)){
            echo"preencha os campos";
        } else {
            if($qt <= 1000 ){
                echo"Abaixo da meta";
            } elseif ($qt <= 5000){
                echo"Dentro da meta";
            } elseif ($qt > 5000){
                echo"Acima da meta";
            }
        }

        

    ?>
</body>
</html>