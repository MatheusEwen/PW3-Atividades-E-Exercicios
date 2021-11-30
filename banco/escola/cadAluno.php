<html>
<head>
<title>Cadastro de Aluno</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body>
    
<form name="form1" method="post" action="cadAluno.php">
  <table> 
    <tr>
        <td>Código do Aluno</td> 
        <td> <input type="text" name="txt_cod"></td>
    </tr>
    <tr>
        <td>Nome do Aluno</td> 
        <td><input type="text" name="txt_nome"></td>
    </tr>
    <tr>
        <td>Telefone Aluno</td> 
        <td><input type="text" name="txt_tel"></td>
    </tr>
  </table>
  
  <input type="submit" name="Submit" value="Cadastrar"><p>
    
<?php

	require_once('conn.php');

	$cod=$_POST['txt_cod'];
	$nome=$_POST['txt_nome'];
	$tel=$_POST['txt_tel'];
	
	if (empty($cod) || empty($nome) || empty($tel))
	{
		echo "Por favor, preencha todos os dados";
	}
	else	
	{
	
        $insere=mysqli_query($conn, "INSERT INTO tb_aluno(codAluno,nomeAluno,telAluno) values('$cod','$nome','$tel');") or die(mysqli_error());
        
        echo "Cadastrado";
	}
	

	
?>
</form>
</body>
</html>