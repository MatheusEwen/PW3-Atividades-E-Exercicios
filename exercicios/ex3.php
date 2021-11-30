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
            
            Digite o Valor em Reais R$ <input type="text" name="valor" id="valor">
            selecione em qual moeda você quer Converter <select name="moedas">
                <option>Escolha uma opção</option>
                <option value="do">Dólar</option>
                <option value="eu">Euro</option>
                <option value="li">Libras</option>
            </select>

            <button type="submit">Converter</button>

        </form>

    </fieldset>
    <?php

        $valor = $_POST['valor'];
        $moeda = $_POST['moedas'];

        if($moeda == "do"){
            $dolar = $valor/5.40;
            echo"O valor convertido foi $dolar";
        } elseif($moeda == "eu"){
            $euro = $valor/6.50;
            echo"Ovalor convertido foi $euro";
        } elseif($moeda == "li"){
            $libras = $valor/7.00;
            echo"O valor convertido foi $libras";
        }


    ?>
</body>
</html>