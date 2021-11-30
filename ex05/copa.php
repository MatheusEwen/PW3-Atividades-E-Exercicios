<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Copas do Mundo</title>
</head>
<body>
    <form action="copa.php" method="post">
        <table border="0">
            <tr>
                <td>
                    <select name="ano">
                        <option value="">&nbsp</option>
                        <option value="1">1930</option>
                        <option value="2">1934</option>
                        <option value="3">1938</option>
                        <option value="4">1942</option>
                        <option value="5">1946</option>
                        <option value="6">1950</option>
                        <option value="7">1954</option>
                        <option value="8">1958</option>
                        <option value="9">1962</option>
                        <option value="10">1966</option>
                        <option value="11">1970</option>
                        <option value="12">1974</option>
                        <option value="13">1978</option>
                        <option value="14">1982</option>
                        <option value="15">1986</option>
                        <option value="16">1990</option>
                        <option value="17">1994</option>
                        <option value="18">1998</option>
                        <option value="19">2002</option>
                        <option value="20">2006</option>
                        <option value="21">2010</option>
                        <option value="22">2014</option>
                        <option value="23">2018</option>

                    </select>
                </td>
            </tr>
            <tr>
                <td>
                    <input type="submit" name="btnVerificar" id="btnVerificar" value="Verificar">
                </td>
            </tr>
        </table>
    </form>
    <?php

        $ano = $_POST['ano'];

        switch($ano) {
            case 1:
                echo"País sede: Uruguai <br>";
                echo"Campeão: Uruguai";
                break;
            case 2:
                echo"País sede: Itália<br>";
                echo"Campeão: Itália";
                break;
            case 3:
                echo"País sede: França<br>";
                echo"Campeão: Itália";
                break;
            case 4:
                echo"Cancelado devido a 2º guerra mundial";
                
                break;
            case 5:
                echo"Cancelado devido a 2º guerra mundial";
                break;
            case 6:
                echo"País sede: Brasil<br>";
                echo"Campeão: Uruguai";
                break;
            case 7:
                echo"País sede: Suiça<br>";
                echo"Campeão: Alemanha";
                break;
            case 8:
                echo"País sede: Chile<br>";
                echo"Campeão: Brasil";
                break;
            case 9:
                echo"País sede: <br>";
                echo"Campeão: ";
                break;
            case 10:
                echo"País sede: <br>";
                echo"Campeão: ";
                break;
            case 11:
                echo"País sede: <br>";
                echo"Campeão: ";
                break;
            case 12:
                echo"País sede: <br>";
                echo"Campeão: ";
                break;
            case 13:
                echo"País sede: <br>";
                echo"Campeão: ";
                break;
            case 14:
                echo"País sede: <br>";
                echo"Campeão: ";
                break;
            case 15:
                echo"País sede: <br>";
                echo"Campeão: ";
                break;
            case 16:
                echo"País sede: <br>";
                echo"Campeão: ";
                break;
            case 17:
                echo"País sede: <br>";
                echo"Campeão: ";
                break;
            case 18:
                echo"País sede: <br>";
                echo"Campeão: ";
                break;
            case 19:
                echo"País sede: <br>";
                echo"Campeão: ";
                break;
            case 20:
                echo"País sede: <br>";
                echo"Campeão: ";
                break;
            case 21:
                echo"País sede: <br>";
                echo"Campeão: ";
                break;
            case 22:
                echo"País sede: <br>";
                echo"Campeão: ";
                break;
            case 23:
                echo"País sede: Rússia<br>";
                echo"Campeão: França";
                break;   
        }

    ?>
</body>
</html>