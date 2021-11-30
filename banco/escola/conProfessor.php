<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>Consultar Alunos</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body>
<form name="form1" method="post" action="conProfessor.php">

<p>
    
    <?php

        require_once('conn.php');
        	
        $sql=mysqli_query($conn,"SELECT * FROM tb_professor");
        	
        
        while($linha=mysqli_fetch_array($sql))
        {
        	$cod=$linha['codProf'];
        	$nome=$linha['nomeProf'];
        	$cel=$linha['CelPro'];
        	echo"</p>";
        	
        	echo "<table><tr><td>Código do Professor: </td><td>$cod </td><tr>";
        	echo "<tr><td>Nome do Professor: </td><td>$nome</td><tr>";
            echo "<tr><td>Celular do Professor: </td><td>$cel</td><tr></table>";
            
        }
        	
    ?>

    
	</body>
	</html>