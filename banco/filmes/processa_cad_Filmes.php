<?php
    include_once("conn.php");
    $selDir = $_POST['selectDiretor'];
    $selGen = $_POST['selectGeneros'];
    $txtFilme = $_POST['txtNomeFilme'];

    $result_usuario = "INSERT INTO tbFilme(filme, codGenero, codDiretor) VALUES ('$txtFilme', '$selGen', '$selDir')";
    $resultado_usuario = mysqli_query($conn, $result_usuario);

    if(mysqli_affected_rows($conn) != 0){
        echo "
            <META HTTP-EQUIV=REFRESH CONTENT = '0;URL=Cadastro.php'>
            <script type=\"text/javascript\">
                alert(\"Usuario cadastrado com Sucesso. \");
            </script>
        ";
    }else{
        echo "
        <META HTTP-EQUIV=REFRESH CONTENT = '0;URL=Cadastro.php'>
        <script type=\"text/javascript\">
                alert(\"O Usuario não foi cadastrado com Sucesso \");
        </script>
        ";
    }
    
?>