<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
</head>
<body>
    <?php
        include_once("conn.php");
    ?>
    <form method="POST" action="processa_cad_atorFilme.php">

        <select name="selectAtor">
            <option>Selecione</option>
            <?php
                $result_niveis_acessos = "SELECT * FROM tbAtor";
                $resultado_niveis_acesso = mysqli_query($conn, $result_niveis_acessos);
                while($row_niveis_acessos = mysqli_fetch_assoc($resultado_niveis_acesso)){
                    ?>
                    <option value="<?php echo $row_niveis_acessos['codAtor']; ?>"><?php echo $row_niveis_acessos['ator']; ?><\option><?php
                }
            ?>
        </select><br><br>

        <select name="selectFilme">
            <option>Selecione</option>
            <?php
                $result_niveis_acessos = "SELECT * FROM tbFilme";
                $resultado_niveis_acesso = mysqli_query($conn, $result_niveis_acessos);
                while($row_niveis_acessos = mysqli_fetch_assoc($resultado_niveis_acesso)){ ?>
                    <option value="<?php echo $row_niveis_acessos['codFilme']; ?>"><?php echo $row_niveis_acessos['filme']; ?></option><?php
                }
            ?>
        </select><br><br>
        <input type="submit" value="cadastrar">
    </form>
</body>
</html>