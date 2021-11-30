<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>Documento sem t&iacute;tulo</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>

<body>
<form name="form1" method="post" action="editar_dados.php">
 
<?php

error_reporting(0);
ini_set("display_errors", 0 );

require_once("conn.php");


$resultado = mysqli_query($conn,"SELECT * FROM tblogin"); // H� vari�vel $resultado faz uma consulta em nossa tabela selecionando todos os registros de todos os campos


while($linha = mysqli_fetch_array($resultado)) //J� a instru��o while faz um loop entre todos os registros e armazena seus valores na vari�vel $linha
{ 
	?> <a href="editar_dados.php?id=<?php echo $linha['id']; ?>"> <!� passando o valor do id para a p�gina editar1.php �>
	<?php
	echo $linha['id'] . " - " . $linha['nome'] . " - " . $linha['usuario'] . " - " . $linha['senha'] . " - " . $linha['nivel']; // Mostra o valor do registro dentro do loop
	echo "<br />"; 
} // Retorna para o in�cio do loop caso existam mais registros a serem mostrados
?>
</a>

</form>
</body>
</html>
