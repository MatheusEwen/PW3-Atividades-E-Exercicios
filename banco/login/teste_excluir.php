<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>Documento sem t&iacute;tulo</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
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
	
	$sql=mysqli_query($conn,"SELECT * FROM tblogin");
	
	while($linha=mysqli_fetch_array($sql))
	{
		$id=$linha['id'];
		$nome=$linha['nome'];
		$usuario=$linha['usuario'];
		$senha=$linha['senha'];
		$nivel=$linha['nivel'];
		echo"<p>";
		
		echo "<table><tr><td>Código do Usuário</td><td>$id</td>";
		echo "<tr><td> Nome do Usuário </td><td> $nome</td>";
		echo "<tr><td>Usuário </td><td> $usuario</td>";
		echo "<tr><td>Senha </td><td> $senha</td>";
		echo "<tr><td>Nivel </td><td> $nivel</td></table>";
	}
	
	if ($bt!='')
	{
			mysqli_query($conn,"DELETE FROM tblogin WHERE id='$cons'") or die("Erro na Exclusão");
			
			echo " Excluído";
			
			echo"<meta http-equiv='refresh'content='0'>";
	}
?>
</form>
</body>
</html>
