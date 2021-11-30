<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>Consultar Alunos</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body>
<form name="form1" method="post" action="conDisciplina.php">

<p>
    
    <?php

        require_once('conn.php');
        	
        $sql=mysqli_query($conn,"SELECT * FROM tb_disciplinas");
        	
        
        while($linha=mysqli_fetch_array($sql))
        {
        	$cod=$linha['codDisciplina'];
        	$nome=$linha['disciplina'];
        	echo"</p>";
        	
        	echo "<table><tr><td>Código da Disciplina: </td><td>$cod </td><tr>";
        	echo "<tr><td>Nome da Disciplina: </td><td>$nome</td><tr>";
            
        }
        	
    ?>
    
</body>
</html>