<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>Consulta Médico</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body>
<form name="form1" method="post" action="consultaMedico.php">

<p>
    
    <?php

        require_once('conn.php');
        	
        $sql=mysqli_query($conn,"SELECT * FROM tdMedico");
        	
        
        while($linha=mysqli_fetch_array($sql))
        {

        $cod=$linha['codMedico'];
        $nome=$linha['nomeMedico'];
        $cel=$linha['celMedico'];
		$codEsp=$linha['codEsp'];
        echo"<p>";
        	
        echo "<table><tr><td>Código do Paciente: </td><td>$cod</td><tr>";
        echo "<tr><td>Nome do Paciente: </td><td>$nome</td><tr>";
		echo "<tr><td>Celular do Paciente: </td><td>$codEsp</td><tr>";
        echo "<tr><td>Celular do Paciente: </td><td>$cel</td><tr></table>";
			
        }
        	
    ?>

	</body>
	</html>