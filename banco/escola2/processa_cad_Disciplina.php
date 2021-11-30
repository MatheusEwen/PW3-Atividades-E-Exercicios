<?php
    include_once("conn.php");
    $disciplina = $_POST['txtDisciplina'];

    $result_usuario = "INSERT INTO tbDisciplina(nomeDisciplina) VALUES ('$disciplina')";
    $resultado_usuario = mysqli_query($conn, $result_usuario);

    if(mysqli_affected_rows($conn) != 0){
        echo "
            <META HTTP-EQUIV=REFRESH CONTENT = '0;URL=restrito.php'>
            <script type=\"text/javascript\">
                alert(\"Disciplina cadastrado com Sucesso. \");
            </script>
        ";
    }else{
        echo "
        <META HTTP-EQUIV=REFRESH CONTENT = '0;URL=cadDisciplina.php'>
        <script type=\"text/javascript\">
                alert(\"O Disciplina não foi cadastrado com Sucesso \");
        </script>
        ";
    }
?>