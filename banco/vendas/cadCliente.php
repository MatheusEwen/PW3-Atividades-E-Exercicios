<html>
<head>
<title>Cadastro do Cliente</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body>
    
<form name="form1" method="post" action="cadCliente.php">
  <table> 
    <tr><td>Código do Cliente</td> <td> <input type="text" name="txt_cod"></td></tr>
    <tr><td>Nome do Cliente</td> <td><input type="text" name="txt_nome"></td></tr>
    <tr><td>Endereço Cliente</td> <td><input type="text" name="txt_end"></td></tr>
    <tr><td>Telefone Cliente</td> <td><input type="text" name="txt_tel"></td></tr>
    <tr><td>Celular Cliente</td> <td><input type="text" name="txt_cel"></td></tr>
  </table>
  
  
  <input type="submit" name="Submit" value="Cadastrar"><p>
    
<?php

	require_once('conn.php');

	$cod=$_POST['txt_cod'];
	$nome=$_POST['txt_nome'];
	$end=$_POST['txt_end'];
	$tel=$_POST['txt_tel'];
	$cel=$_POST['txt_cel'];
	
	if (empty($cod) || empty($nome) || empty($tel) || empty($end) || empty($cel))
	{
		echo "Por favor, preencha todos os dados";
	}
	else	
	{


	
	$insere=mysqli_query($conn, "INSERT INTO tdCliente(codCli,nomeCli,endCli,telCli,celCli) values('$cod','$nome','$end','$tel','$cel');") or die(mysqli_error());
	
	echo "Cadastrado";
	}
	

	
?>
</form>
</body>
</html>
