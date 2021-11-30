<!DOCTYPE html>
<html lang="br">
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
    <form method="POST" action="processa_cad_Filmes.php">
        Nome do Filme: <input type="text" name="txtNomeFilme"><br><br>

        <select name="selectGeneros">
            <option>Selecione</option>
            <?php
                $result_niveis_acessos = "SELECT * FROM tbGeneroFilme";
                $resultado_niveis_acesso = mysqli_query($conn, $result_niveis_acessos);
                while($row_niveis_acessos = mysqli_fetch_assoc($resultado_niveis_acesso)){
                    ?>
                    <option value="<?php echo $row_niveis_acessos['codGeneroFilme']; ?>"><?php echo $row_niveis_acessos['generoFilme']; ?><\option><?php
                }
            ?>
        </select><br><br>

        <select name="selectDiretor">
            <option>Selecione</option>
            <?php
                $result_niveis_acessos = "SELECT * FROM tbDiretorFilme";
                $resultado_niveis_acesso = mysqli_query($conn, $result_niveis_acessos);
                while($row_niveis_acessos = mysqli_fetch_assoc($resultado_niveis_acesso)){ ?>
                    <option value="<?php echo $row_niveis_acessos['codDiretorFilme']; ?>"><?php echo $row_niveis_acessos['nomeDiretor']; ?></option><?php
                }
            ?>
        </select><br><br>
        <input type="submit" value="cadastrar">
    </form>
</body>
</html>