<?php
    include_once("conn.php");
    $aluno = $_POST['txtAluno'];

    $result_usuario = "INSERT INTO tbAluno(nomeAluno) VALUES ('$aluno')";
    $resultado_usuario = mysqli_query($conn, $result_usuario);

    if(mysqli_affected_rows($conn) != 0){
        echo "
            <META HTTP-EQUIV=REFRESH CONTENT = '0;URL=restrito.php'>
            <script type=\"text/javascript\">
                alert(\"Aluno cadastrado com Sucesso. \");
            </script>
        ";
    }else{
        echo "
        <META HTTP-EQUIV=REFRESH CONTENT = '0;URL=cadAluno.php'>
        <script type=\"text/javascript\">
                alert(\"O Aluno não foi cadastrado com Sucesso \");
        </script>
        ";
    }
?>