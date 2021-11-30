<?php
    include_once("conn.php");
    $professor = $_POST['txtProfessor'];

    $result_usuario = "INSERT INTO tbProfessor(nomeProfessor) VALUES ('$professor')";
    $resultado_usuario = mysqli_query($conn, $result_usuario);

    if(mysqli_affected_rows($conn) != 0){
        echo "
            <META HTTP-EQUIV=REFRESH CONTENT = '0;URL=restrito.php'>
            <script type=\"text/javascript\">
                alert(\"Professor cadastrado com Sucesso. \");
            </script>
        ";
    }else{
        echo "
        <META HTTP-EQUIV=REFRESH CONTENT = '0;URL=cadProfessor.php'>
        <script type=\"text/javascript\">
                alert(\"O Professor não foi cadastrado com Sucesso \");
        </script>
        ";
    }
?>