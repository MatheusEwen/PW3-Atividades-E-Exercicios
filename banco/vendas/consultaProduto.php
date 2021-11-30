<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>Consulta do Produto</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body>
<form name="form1" method="post" action="consultaProduto.php">

<p>
    
        <?php

            require_once('conn.php');
        	
        	$sql=mysqli_query($conn,"SELECT * FROM tbProduto");
        	
        
        	while($linha=mysqli_fetch_array($sql))
        	{
        	$cod=$linha['codProduto'];
        	$nome=$linha['nomeProduto'];
        	$preco=$linha['precoProduto'];

        	echo"<p>";
        	
        	echo "<table><tr><td>Código do Produto: </td><td>$cod </td><tr>";
        	echo "<tr><td>Nome do Produto: </td><td>$nome</td><tr>";
            echo "<tr><td>Preco do Produto: </td><td>$preco</td><tr></table>";
        	}
        	
        	?>

	</body>
	</html>