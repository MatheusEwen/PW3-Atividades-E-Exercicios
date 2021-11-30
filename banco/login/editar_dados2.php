<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sem título</title>
</head>
<body>

	<?php
$id = $_POST['id']; // Recebendo o valor id do formulário
$nome = $_POST['nome'];
$usuario = $_POST['usuario'];
$senha = $_POST['senha'];
$nivel = $_POST['nivel'];

require_once("conn.php");



mysqli_query($conn,"UPDATE tblogin SET nome='$nome', usuario='$usuario', senha='$senha', nivel='$nivel'  WHERE id='".$id."'") or die("erro");

echo "Cadastro atualizado com sucesso"
?>
<p><a href="teste_consulta.php">  Voltar</a>
</body>

</html>