<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Casdastro</title>
</head>
<body>
    <?php
        include_once("conn.php");
    ?>
    <form method="POST" action="processa_cad_Ator.php">
        Ator: <input type="text" name="txtAtor"><br><br>
        <input type="submit" value="Cadastar">
    </form>
    
</body>
</html>