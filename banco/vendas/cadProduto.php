<html>
<head>
<title>Cadastro do Produto</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body>
    
<form name="form1" method="post" action="cadProduto.php">
  <table> 
    <tr><td>Nome do Produto</td> <td><input type="text" name="txt_nome"></td></tr>
    <tr><td>Preço do produto</td> <td><input type="text" name="txt_preco"></td></tr>
  </table>
  
  
  <input type="submit" name="Submit" value="Cadastrar"><p>
    
<?php


	require_once('conn.php');

	$nome=$_POST['txt_nome'];
	$preco=$_POST['txt_preco'];

	
	if (empty($nome) || empty($preco))
	{
		echo "Por favor, preencha todos os dados";
	}
	else	
	{
	
	$insere=mysqli_query($conn, "INSERT INTO tbProduto(nomeProduto,precoProduto) values('$nome','$preco')") or die(mysqli_error());	
	echo "Cadastrado";
	}
	

	
?>
</form>
</body>
</html>
