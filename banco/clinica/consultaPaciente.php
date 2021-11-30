<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>Consulta de Paciente</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body>
<form name="form1" method="post" action="consultaPaciente.php">

<p>
    
        <?php

            require_once('conn.php');
        	
        	$sql=mysqli_query($conn,"SELECT * FROM tdpaciente");
        	
        
        	while($linha=mysqli_fetch_array($sql))
        	{
        	$cod=$linha['codPac'];
        	$nome=$linha['nomePac'];
        	$end=$linha['endPac'];
        	$tel=$linha['telPac'];
        	$cel=$linha['celPac'];
			$email=$linha['emailPac'];
        	echo"<p>";
        	
        	echo "<table><tr><td>Código do Paciente: </td><td>$cod</td><tr>";
        	echo "<tr><td>Nome do Paciente: </td><td>$nome</td><tr>";
        	echo "<tr><td>Endereco do Paciente: </td><td>$end</td><tr>";
            echo "<tr><td>Telefone do Paciente: </td><td>$tel</td><tr>";
            echo "<tr><td>Celular do Paciente: </td><td>$cel</td><tr>";
			echo "<tr><td>Email do Paciente: </td><td>$email</td></tr></table>";
        	}
        	
        	?>

	</body>
	</html>