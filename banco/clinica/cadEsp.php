<html>
<head>
<title>Cadastro do Especialidade</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body>
    
<form name="form1" method="post" action="cadEsp.php">
  <table> 
    <tr><td>Especialidade</td> <td><input type="text" name="txt_nome"></td></tr>
  </table>
  
  <input type="submit" name="Submit" value="Cadastrar"><p>
    
<?php

	require_once('conn.php');

	$nome=$_POST['txt_nome'];
	
	if (empty($nome))
	{
		echo "Por favor, preencha todos os dados";
	}
	else	
	{
	
	$insere=mysqli_query($conn, "INSERT INTO tbEspecialidade(nomeEsp)values('$nome')") or die(mysqli_error());	
	echo "Cadastrado";
	}
	

	
?>
</form>
</body>
</html>
