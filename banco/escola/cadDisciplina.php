<html>
<head>
<title>Cadastro de Disciplina</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body>
    
<form name="form1" method="post" action="cadDisciplina.php">
  <table> 
    <tr>
        <td>Código da Disciplina</td> 
        <td> <input type="text" name="txt_cod"></td>
    </tr>
    <tr>
        <td>Nome da Disciplina</td> 
        <td><input type="text" name="txt_nome"></td>
    </tr>
  </table>
  
  <input type="submit" name="Submit" value="Cadastrar"><p>
    
<?php

	require_once('conn.php');

	$cod=$_POST['txt_cod'];
	$nome=$_POST['txt_nome'];
	
	
	if (empty($cod) || empty($nome))
	{
		echo "Por favor, preencha todos os dados";
	}
	else	
	{
	
        $insere=mysqli_query($conn, "INSERT INTO tb_disciplinas(codDisciplina, disciplina) values('$cod','$nome');") or die(mysqli_error());
        
        echo "Cadastrado";
	}
	

	
?>
</form>
</body>
</html>