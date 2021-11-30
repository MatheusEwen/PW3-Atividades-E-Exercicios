<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>Consulta de Usuario</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body>
<form name="form1" method="post" action="conUsuario.php">

<p>
    
        <?php

            require_once('conn.php');
        	
        	$sql=mysqli_query($conn,"SELECT * FROM tbUsuario");
        	
        
        	while($linha=mysqli_fetch_array($sql))
        	{
        	$cod=$linha['codUsuario'];
        	$nome=$linha['nomeUsuario'];
        	$tipo=$linha['tipoUsuario'];
        	echo"<p>";
        	
        	echo "<table><tr><td>Código do Usuario: </td><td>$cod</td><tr>";
        	echo "<tr><td>Nome do Usuario: </td><td>$nome</td><tr>";
			echo "<tr><td>Tipo do Usuario: </td><td>$tipo</td></tr></table>";
        	}
        	
        	?>

	</body>
	</html>