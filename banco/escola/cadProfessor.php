<html>
<head>
<title>Cadastro de Professor</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body>
    
<form name="form1" method="post" action="cadProfessor.php">
  <table> 
    <tr>
        <td>Código do Professor</td> 
        <td> <input type="text" name="txt_cod"></td>
    </tr>
    <tr>
        <td>Nome do Professor</td> 
        <td><input type="text" name="txt_nome"></td>
    </tr>
    <tr>
        <td>Celular Professor</td> 
        <td><input type="text" name="txt_cel"></td>
    </tr>
  </table>
  
  <input type="submit" name="Submit" value="Cadastrar"><p>
    
<?php

	require_once('conn.php');

	$cod=$_POST['txt_cod'];
	$nome=$_POST['txt_nome'];
	$cel=$_POST['txt_cel'];
	
	if (empty($cod) || empty($nome) || empty($cel))
	{
		echo "Por favor, preencha todos os dados";
	}
	else	
	{
	
        $insere=mysqli_query($conn, "INSERT INTO tb_professor(codProf,nomeProf,CelPro) values('$cod','$nome','$cel');") or die(mysqli_error());
        
        echo "Cadastrado";
	}
	

	
?>
</form>
</body>
</html>