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
    <form method="POST" action="consultaFilme.php">

        <select name="selectFilmes">
            <option>Selecione</option>
            <?php
                $result_niveis_acessos = "SELECT * FROM tbFilme";
                $resultado_niveis_acesso = mysqli_query($conn, $result_niveis_acessos);
                while($row_niveis_acessos = mysqli_fetch_assoc($resultado_niveis_acesso)){
                    ?>
                    <option value="<?php echo $row_niveis_acessos['codFilme']; ?>"><?php echo $row_niveis_acessos['filme']; ?><\option><?php
                }
            ?>
        </select><br><br>
        <input type="submit" value= "buscar">

    </form>
    <?php
        $cod = $_POST['selectFilmes'];

        $resultado = mysqli_query($conn, "SELECT tbFilme.filme, tbGeneroFilme.generoFilme,tbDiretorFilme.nomeDiretor FROM tbFilme, tbGeneroFilme, tbDiretorFilme WHERE tbGeneroFilme.codGeneroFilme = tbFilme.codGenero AND tbDiretorFilme.codDiretorFilme = tbFilme.codDiretor AND tbFilme.codFilme ='".$cod."'");

        while($linha = mysqli_fetch_array($resultado)){
            echo "<br>Filme: ";
            echo $linha['filme'];
            echo "<br>Diretor: ";
            echo $linha['nomeDiretor'];
            echo "<br>Gênero: ";
            echo $linha['generoFilme'];
            echo "<br>";
        }
        $result = mysqli_query($conn, "select tbAtor.ator FROM tbAtor, tbAtorFilme WHERE tbAtor.codAtor=tbAtorFilme.codAtor AND tbAtorFilme.codFilme='".$cod."'");

        echo "<br> Elenco: <br>";

        while($linha = mysqli_fetch_array($result)){
                echo $linha['ator'];
                echo "<br>";
        }
    ?>
</body>
</html>