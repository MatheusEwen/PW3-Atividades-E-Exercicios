<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>Consulta de Alunos</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">

</head>


<body>
<form name="form1" method="post" action="conAluno.php">

<p>
    
        <?php

            require_once('conn.php');
        	
        	$sql=mysqli_query($conn,"SELECT * FROM tbAluno");
        	
        
        	while($linha=mysqli_fetch_array($sql))
        	{
        	$cod=$linha['codAluno'];
        	$nome=$linha['nomeAluno'];
        	
        	echo"<p>";
        	
        	echo "<table><tr><td>Código do Aluno: </td><td>$cod</td><tr>";
        	echo "<tr><td>Nome do Aluno: </td><td>$nome</td><tr>";		
        	}
        	
        	?>

	</body>
	</html>