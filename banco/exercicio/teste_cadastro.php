<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>Documento sem t&iacute;tulo</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body>
<form name="form1" method="post" action="teste_cadastro.php">

	<table>
		<tr>
			<td>Código do produto</td>
			<td><input type="text" name="txt_codProduto"></td>
		</tr>
		<tr>
			<td>Nome do produto</td>
			<td><input type="text" name="txt_nomeProduto"></td>
		</tr>
		<tr>
			<td>Quantidade de Estoque</td>
			<td><input type="text" name="txt_qtdeEstoque"></td>
		</tr>
		<tr>
			<td>Descrição Do Produto</td>
			<td><input type="text" name="txt_descProduto"></td>
		</tr>
		<tr>
			<td>Responsavel pelo produto</td>
			<td><input type="text" name="txt_respCadastro"></td>
		</tr>
	</table>
    <input type="submit" name="Submit" value="Enviar">

<?php
	$codProduto=$_POST['txt_codProduto'];
	$nomeProduto=$_POST['txt_nomeProduto'];
	$qtdeEstoque=$_POST['txt_qtdeEstoque'];
	$descProduto=$_POST['txt_descProduto'];
	$respCadastro=$_POST['txt_respCadastro'];
	
	if (empty($codProduto) || empty($nomeProduto) || empty($qtdeEstoque) || empty($descProduto) || empty($respCadastro))
	{
		echo "Verifique se todos os dados foram cadastrados";
	}
	else	
	{
		require_once("conn.php");
	
		$insere=mysqli_query($conn,"INSERT INTO tbProduto(codProduto, nomeProduto,qtdeEstoque,descProduto,respCadastro) values('$codProduto','$nomeProduto','$qtdeEstoque','$descProduto','$respCadastro')") or die(mysqli_error());
		
		echo "Cadastrado";
	}
	

	
?>
</form>
</body>
</html>
