<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>Consulta de Alunos</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body>
<form name="form1" method="post" action="conProfessor.php">

<p>
    
        <?php

            require_once('conn.php');
        	
        	$sql=mysqli_query($conn,"SELECT * FROM tbProfessor");
        	
        
        	while($linha=mysqli_fetch_array($sql))
        	{
        	$cod=$linha['codProfessor'];
        	$nome=$linha['nomeProfessor'];
        	
        	echo"<p>";
        	
        	echo "<table><tr><td>Código do Professor: </td><td>$cod</td><tr>";
        	echo "<tr><td>Nome do Professor: </td><td>$nome</td><tr>";

            
			
        	}
        	
        	?>

	</body>
	</html>