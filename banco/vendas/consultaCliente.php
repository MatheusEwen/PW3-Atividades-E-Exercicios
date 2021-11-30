<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>Consulta de Cliente</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body>
<form name="form1" method="post" action="consultaCliente.php">

<p>
    
        <?php

            require_once('conn.php');
        	
        	$sql=mysqli_query($conn,"SELECT * FROM tdCliente");
        	
        
        	while($linha=mysqli_fetch_array($sql))
        	{
        	$cod=$linha['codCli'];
        	$nome=$linha['nomeCli'];
        	$end=$linha['endCli'];
        	$tel=$linha['telCli'];
        	$cel=$linha['celCli'];
        	echo"<p>";
        	
        	echo "<table><tr><td>Código do Cliente: </td><td>$cod </td><tr>";
        	echo "<tr><td>Nome do Cliente: </td><td>$nome</td><tr>";
        	echo "<tr><td>Endereco do Cliente: </td><td>$end</td><tr>";
            echo "<tr><td>Telefone do Cliente: </td><td>$tel</td><tr>";
            echo "<tr><td>Celular do Cliente: </td><td>$cel</td><tr></table>";
        	}
        	
        	?>

	</body>
	</html>