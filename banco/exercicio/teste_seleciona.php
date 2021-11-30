<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>Documento sem t&iacute;tulo</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body>
<form name="form1" method="post" action="teste_seleciona.php">

<p>
<?php

	require_once("conn.php");
	
	$sql=mysqli_query($conn, "SELECT * FROM tbProduto");
	
	while($linha=mysqli_fetch_array($sql))
	{
	$codProduto=$linha['codProduto'];
	$nomeProduto=$linha['nomeProduto'];
	$qtdeEstoque=$linha['qtdeEstoque'];
	$descProduto=$linha['descProduto'];
	$respCadastro=$linha['respCadastro'];
	echo"<p>";
	
	echo "<table><tr><td>Código do Produto:</td><td>$codProduto </td>";
	echo "<tr><td>Nome do produto:</td><td>$nomeProduto</td>";
	echo "<tr><td>Quantidade Estoque:</td><td>$qtdeEstoque</td>";
	echo "<tr><td>Descrição Produto:</td><td>$descProduto</td>";
	echo "<tr><td>Reponsavel pelo Cadastro:</td><td>$respCadastro</td></table>";

	}
	
?>
</form>
</body>
</html>
