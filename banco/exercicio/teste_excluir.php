<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>Documento sem t&iacute;tulo</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body>
<form name="form1" method="post" action="teste_excluir.php">
  <p> 
    <input type="text" name="txt_cod">
  </p>
  <p> 
    <input type="submit" name="bt" value="Confirma">
  </p>
  <p>
<?php

	error_reporting(0);
	ini_set("display_errors", 0 );

	$cons=$_POST['txt_cod'];
	$bt=$_POST['bt'];
	
	
	require_once("conn.php");
	
	$sql=mysqli_query($conn,"SELECT * FROM tbProduto");
	
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
	
	if ($bt!='')
	{
	mysqli_query($conn,"DELETE FROM tbProduto WHERE codProduto='$cons'") or die("Erro na Exclusão");
	
	echo " Excluido";
	
	echo"<meta http-equiv='refresh'content='0'>";
	}
?>
</form>
</body>
</html>
