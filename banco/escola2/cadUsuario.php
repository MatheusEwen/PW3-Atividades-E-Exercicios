<?php

//A sessão precisa ser iniciada em cada página diferente
if(!isset($_SESSION)) session_start();

//verifica se não há a variavel da sessão que indentifca o usuário.
if(!isset($_SESSION['UsuarioCod']) or $_SESSION['UsuarioNivel']!=1 ) {
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
<style>
body{
    background-color: blue;
	color:white;
}

</style>

<body>
    
<form name="form1" method="post" action="cadUsuario.php">
  <table> 
    
    <tr><td>Nome do Usuário</td> <td><input type="text" name="txt_nome"></td></tr>
    <tr><td>Senha</td> <td><input type="text" name="txt_senha"></td></tr>
    <tr><td>Tipo Usuario</td> <td><input type="text" name="txt_tipo"></td></tr>
  </table>
  
  
  <input type="submit" name="Submit" value="Cadastrar"><p>
    
<?php

	require_once('conn.php');

	
	$nome=$_POST['txt_nome'];
	$senha=$_POST['txt_senha'];
	$tipo=$_POST['txt_tipo'];
	
	if ( empty($nome) || empty($senha) || empty($tipo))
	{
		echo "Por favor, preencha todos os dados";
	}
	else	
	{

	$insere=mysqli_query($conn, "INSERT INTO tbusuario(nomeUsuario,senhaUsuario,tipoUsuario) values('$nome','$senha','$tipo')") or die(mysqli_error());
	
	echo "Cadastrado";
	}
?>
</form>
</body>
</html>