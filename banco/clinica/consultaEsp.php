<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>Consulta da Especialidade</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body>
<form name="form1" method="post" action="consultaEsp.php">

<p>
    
    <?php

        require_once('conn.php');
        	
        $sql=mysqli_query($conn,"SELECT * FROM tbEspecialidade");
        	
        
        while($linha=mysqli_fetch_array($sql))
        {
        $cod=$linha['codEsp'];
        $nome=$linha['nomeEsp'];

        echo"<p>";
        	
        echo "<table><tr><td>Código da Especialidade: </td><td>$cod</td><tr>";
        echo "<tr><td>Nome da Especialidade: </td><td>$nome</td><tr></table>";
            
        }
        	
    ?>

	</body>
	</html>