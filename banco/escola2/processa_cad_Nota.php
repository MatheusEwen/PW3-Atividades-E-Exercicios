<?php
    include_once("conn.php");
    $selAlu = $_POST['selectAluno'];
    $selDis = $_POST['selectDisciplina'];
    $selPro = $_POST['selectProfessor'];
    $txtFal = $_POST['txtFaltas'];
    $txtNota = $_POST['txtNota'];

    $result_usuario = "INSERT INTO tbNotas(codAluno, codProfessor, codDisciplina, nota, faltas) VALUES ( '$selAlu', '$selPro', '$selDis','$txtNota', '$txtFal')";
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