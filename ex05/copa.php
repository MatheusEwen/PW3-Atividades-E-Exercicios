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
                echo"Pa??s sede: Uruguai <br>";
                echo"Campe??o: Uruguai";
                break;
            case 2:
                echo"Pa??s sede: It??lia<br>";
                echo"Campe??o: It??lia";
                break;
            case 3:
                echo"Pa??s sede: Fran??a<br>";
                echo"Campe??o: It??lia";
                break;
            case 4:
                echo"Cancelado devido a 2?? guerra mundial";
                
                break;
            case 5:
                echo"Cancelado devido a 2?? guerra mundial";
                break;
            case 6:
                echo"Pa??s sede: Brasil<br>";
                echo"Campe??o: Uruguai";
                break;
            case 7:
                echo"Pa??s sede: Sui??a<br>";
                echo"Campe??o: Alemanha";
                break;
            case 8:
                echo"Pa??s sede: Chile<br>";
                echo"Campe??o: Brasil";
                break;
            case 9:
                echo"Pa??s sede: <br>";
                echo"Campe??o: ";
                break;
            case 10:
                echo"Pa??s sede: <br>";
                echo"Campe??o: ";
                break;
            case 11:
                echo"Pa??s sede: <br>";
                echo"Campe??o: ";
                break;
            case 12:
                echo"Pa??s sede: <br>";
                echo"Campe??o: ";
                break;
            case 13:
                echo"Pa??s sede: <br>";
                echo"Campe??o: ";
                break;
            case 14:
                echo"Pa??s sede: <br>";
                echo"Campe??o: ";
                break;
            case 15:
                echo"Pa??s sede: <br>";
                echo"Campe??o: ";
                break;
            case 16:
                echo"Pa??s sede: <br>";
                echo"Campe??o: ";
                break;
            case 17:
                echo"Pa??s sede: <br>";
                echo"Campe??o: ";
                break;
            case 18:
                echo"Pa??s sede: <br>";
                echo"Campe??o: ";
                break;
            case 19:
                echo"Pa??s sede: <br>";
                echo"Campe??o: ";
                break;
            case 20:
                echo"Pa??s sede: <br>";
                echo"Campe??o: ";
                break;
            case 21:
                echo"Pa??s sede: <br>";
                echo"Campe??o: ";
                break;
            case 22:
                echo"Pa??s sede: <br>";
                echo"Campe??o: ";
                break;
            case 23:
                echo"Pa??s sede: R??ssia<br>";
                echo"Campe??o: Fran??a";
                break;   
        }

    ?>
</body>
</html>