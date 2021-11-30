<?php
    include_once("conn.php");
    $diretor = $_POST['txtDiretor'];

    $result_usuario = "INSERT INTO tbDiretorFilme(nomeDiretor) VALUES ('$diretor')";
    $resultado_usuario = mysqli_query($conn, $result_usuario);

    if(mysqli_affected_rows($conn) != 0){
        echo "
            <META HTTP-EQUIV=REFRESH CONTENT = '0;URL=index.php'>
            <script type=\"text/javascript\">
                alert(\"Usuario cadastrado com Sucesso. \");
            </script>
        ";
    }else{
        echo "
        <META HTTP-EQUIV=REFRESH CONTENT = '0;URL=cadDiretor.php'>
        <script type=\"text/javascript\">
                alert(\"O Usuario não foi cadastrado com Sucesso \");
        </script>
        ";
    }
?>