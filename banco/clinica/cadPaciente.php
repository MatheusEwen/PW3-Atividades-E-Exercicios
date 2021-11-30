<html>
<head>
<title>Cadastro do Paciente</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body>
    
<form name="form1" method="post" action="cadPaciente.php">
  <table> 
    <tr><td>Código do Paciente</td> <td> <input type="number" name="txt_cod"></td></tr>
    <tr><td>Nome do Paciente</td> <td><input type="text" name="txt_nome"></td></tr>
    <tr><td>Telefone Paciente</td> <td><input type="text" name="txt_tel"></td></tr>
    <tr><td>Celular Paciente</td> <td><input type="text" name="txt_cel"></td></tr>
    <tr><td>Celular do Paciente</td> <td><input type="text" name="txt_email"></td></tr>
  </table>
  
  
  <input type="submit" name="Submit" value="Cadastrar"><p>
    
<?php

	require_once('conn.php');

	$cod=$_POST['txt_cod'];
	$nome=$_POST['txt_nome'];
	$tel=$_POST['txt_tel'];
	$cel=$_POST['txt_cel'];
	$email=$_POST['txt_email'];
	
	if (empty($cod) || empty($nome) || empty($tel) || empty($cel) || empty($email))
	{
		echo "Por favor, preencha todos os dados";
	}
	else	
	{
	
	$insere=mysqli_query($conn, "INSERT INTO tdpaciente(codPac,nomePac,telPac,celPac,emailPac) values('$cod','$nome','$tel','$cel','$email');") or die(mysqli_error());
	
	echo "Cadastrado";
	}
	

	
?>
</form>
</body>
</html>
