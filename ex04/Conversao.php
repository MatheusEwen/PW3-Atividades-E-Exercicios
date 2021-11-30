<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Temperatura</title>
</head>
<body>
<fieldset>
        <legend>Converções</legend>
        <form action="Conversao.php" method="post">
            <table>
                <tr>
                    <td>Número</td>
                    <td><input type="text" name="escala_de" id="escala_de" size="10"></td>
                    <td>
                        <select name="escalaDe">
                            <option value="">Escala á ser convertida</option>
                            <option value="cel">Celsius</option>
                            <option value="kel">Kelvin</option>
                            <option value="fah">Fahrenheit</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">Converte para qual escala?</td>
                    <td>
                        <select name="escalaPara">
                                <option value="">Escala para conversão</option>
                                <option value="cel">Celsius</option>
                                <option value="kel">Kelvin</option>
                                <option value="fah">Fahrenheit</option>
                                <option value="ra">Rankine</option>
                                <option value="re">Réaumur</option>
                        </select> 
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <input type="reset" name="Limpar">
                        <input type="submit" name="Cadastro">
                    </td>
                </tr>
            </table>
        </form>
    </fieldset>
    <?php

        ini_set('display_errors', 0);
        error_reporting(0);

        $numPara = $_POST['escala_de'];
        $escalaDe = $_POST['escalaDe'];
        $escalaPara = $_POST['escalaPara'];

        if ($escalaDe == "cel" && $escalaPara == "fah") {
            $F = $numPara * 1.8 + 32;
            echo "$numPara ºC => $F ºF";
        }
        elseif($escalaDe == "cel" && $escalaPara == "kel") {
            $K = $numPara + 273.15;
            echo "$numPara ºC => $K ºK";
        }
        elseif($escalaDe == "cel" && $escalaPara == "ra") {
            $R = $numPara * 1.8 + 32 + 459.67;
            echo "$numPara ºC => $R ºR";
        }
        elseif($escalaDe == "cel" && $escalaPara == "re") {
            $RE = $numPara * 0.8;
            echo "$numPara ºC => $RE ºRÉ";
        }
        elseif($escalaDe == "kel" && $escalaPara == "cel") {
            $C = $numPara - 273.15;
            echo "$numPara ºK => $C ºC ";
        }
        elseif($escalaDe == "kel" && $escalaPara == "fah") {
            $F = $numPara * 1.8 - 459.67;
            echo "$numPara ºK => $F ºF";
        }
        elseif($escalaDe == "kel" && $escalaPara == "ra") {
            $R = $numPara * 1.8;
            echo "$numPara ºK => $R ºR ";
        }
        elseif($escalaDe == "kel" && $escalaPara == "re") {
            $RE = ($numPara - 273.15) * 0.8;
            echo "$numPara ºK => $RE ºRÉ";
        }
        elseif($escalaDe == "fah" && $escalaPara == "cel") {
            $C = ($numPara - 32)/1.8;
            echo "$numPara ºF => $C ºC";
        }
        elseif($escalaDe == "fah" && $escalaPara == "kel") {
            $K = ($numPara + 459.67)/1.8;
            echo "$numPara ºF => $K ºK ";
        }
        elseif($escalaDe == "fah" && $escalaPara == "ra") {
            $R = $numPara + 459.67;
            echo "$numPara ºF => $R ºR";
        }
        elseif($escalaDe == "fah" && $escalaPara == "re") {
            $RE = ($numPara - 32)/2.25;
            echo "$numPara ºF => $RE ºRÉ ";
        } else {
            echo "Preencha todos os campos";
        }
    ?>
</body>
</html>
/*
        ini_set('display_errors', 0);
        error_reporting(0);

        $Celsius = $_POST['txtC'];
        $F = $Celsius * 1.8 + 32;

        echo 'Atemperatura convertida em graus Fahrenheit é: '.$F;
        */