<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>
<body>
    <table>
    <form action="index.php" method="post">
        <tr>
            <td>Primeiro Número</td>
            <td><input type="text" name="txtN1"></td>
        </tr>
        <tr>
            <td>Segundo Número</td>
            <td><input type="text" name="txtN2"></td>
        </tr>
        </table>  
        <input type="submit" value="Calcular" name="btnCalc"> 
    </form>
    
    
        <?php
            $num1 = $_POST['txtN1'];
            $num2 = $_POST['txtN2'];

            $res = $num1 + $num2;

            echo "A soma dos dois números é: $res";
        ?>
</body>
</html>