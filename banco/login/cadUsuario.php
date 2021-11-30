<?php

//A sessão precisa ser iniciada em cada página diferente
if(!isset($_SESSION)) session_start();

//verifica se não há a variavel da sessão que indentifca o usuário.
if(!isset($_SESSION['UsuarioID'])) {
    //Destroi a sessão por segurança

    session_destroy();

    //redirecionando o visitante de volta pro login
    header("Location: index.php"); exit;

}
?>
<html>
<head>
<title>Cadastro do Login</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body>
    
<form name="form1" method="post" action="cadUsuario.php">
  <table> 
    
    <tr><td>Nome do Usuário</td> <td><input type="text" name="txt_nome"></td></tr>
    <tr><td>Usuário</td> <td><input type="text" name="txt_usuario"></td></tr>
    <tr><td>Senha</td> <td><input type="text" name="txt_senha"></td></tr>
    <tr><td>Nivel</td> <td><input type="text" name="txt_nivel"></td></tr>
  </table>
  
  
  <input type="submit" name="Submit" value="Cadastrar"><p>
    
<?php

	require_once('conn.php');

	
	$nome=$_POST['txt_nome'];
	$usuario=$_POST['txt_usuario'];
	$senha=$_POST['txt_senha'];
	$nivel=$_POST['txt_nivel'];
	
	if ( empty($nome) || empty($usuario) || empty($senha) || empty($nivel))
	{
		echo "Por favor, preencha todos os dados";
	}
	else	
	{

	$insere=mysqli_query($conn, "INSERT INTO tbLogin(nome,usuario,senha,nivel) values('$nome','$usuario','$senha','$nivel')") or die(mysqli_error());
	
	echo "Cadastrado";
	}
?>
</form>
</body>
</html>