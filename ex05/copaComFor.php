<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Copas do Mundo</title>
</head>
<body>
    <form action="copaComFor.php" method="post">
        <table border="0">
            <tr>
                <td>
                    <select name="ano">
                        <option value="">&nbsp</option>
                        <?php
                            for($i = 1930;$i <= 2018 ; $i+=4){
                                echo"<option value=".$i.">".$i."</option>";
                                
                            }


                        ?>
                        

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
            case 1930:
                echo"País sede: Uruguai <br>";
                echo"Campeão: Uruguai";
                break;
            case 1934:
                echo"País sede: Itália<br>";
                echo"Campeão: Itália";
                break;
            case 1938:
                echo"País sede: França<br>";
                echo"Campeão: Itália";
                break;
            case 1942:
                echo"Cancelado devido a 2º guerra mundial";
                break;
            case 1946:
                echo"Cancelado devido a 2º guerra mundial";
                break;
            case 1950:
                echo"País sede: Brasil<br>";
                echo"Campeão: Uruguai";
                break;
            case 1954:
                echo"País sede: Suiça<br>";
                echo"Campeão: Alemanha";
                break;
            case 1958:
                echo"País sede: Suécia<br>";
                echo"Campeão: Brasil";
                break;
            case 1962:
                echo"País sede: Chile <br>";
                echo"Campeão: Brasil";
                break;
            case 1966:
                echo"País sede: Inglaterra<br>";
                echo"Campeão: Inglaterra";
                break;
            case 1970:
                echo"País sede: Mexico<br>";
                echo"Campeão: Brasil";
                break;
            case 1974:
                echo"País sede: Alemanha Ocidental<br>";
                echo"Campeão: Alemanha Ocidental";
                break;
            case 1978:
                echo"País sede: Argentina<br>";
                echo"Campeão: Argentina";
                break;
            case 1982:
                echo"País sede: Espanha<br>";
                echo"Campeão: Itália";
                break;
            case 1986:
                echo"País sede: México<br>";
                echo"Campeão: Argentina";
                break;
            case 1990:
                echo"País sede: Itália<br>";
                echo"Campeão: Alemanha ocidental";
                break;
            case 1994:
                echo"País sede: EUA<br>";
                echo"Campeão: Brasil";
                break;
            case 1998:
                echo"País sede: França<br>";
                echo"Campeão: França";
                break;
            case 2002:
                echo"País sede: Coreia e Japão<br>";
                echo"Campeão: Brasil";
                break;
            case 2006:
                echo"País sede: Alemanha<br>";
                echo"Campeão: Itália";
                break;
            case 2010:
                echo"País sede: África do sul<br>";
                echo"Campeão: Espanha";
                break;
            case 2014:
                echo"País sede: Brasil<br>";
                echo"Campeão: Alemanha";
                break;
            case 2018:
                echo"País sede: Rússia<br>";
                echo"Campeão: França";
                break;   
        }

    ?>
</body>
</html>