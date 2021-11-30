<html>
<head>
<title>Cadastro do Médico</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body>
    
<?php

	require_once('conn.php');
?>

<form name="form1" method="post" action="cadMedico.php">
  <table> 
  	<tr><td>Nome do Médico</td><td><input type="text"name="txt_nome"></td></tr>
    <tr><td>Celular Médico</td><td><input type="text"name="txt_cel"></td></tr>
    <tr>
	<td>Escolha a Especialidade</td>
		<td>
			<select name="esp">
				<option>Selecione</option>
				<?php
					$selEsp = "SELECT * FROM tbespecialidade";
					$resultSelEsp = mysqli_query($conn, $selEsp);

					while($resultado = mysqli_fetch_assoc($resultSelEsp)){
				?>

						<option value="<?php echo $resultado['codEsp']; ?>"><?php echo $resultado['nomeEsp']; ?></option>
				<?php
					}
				?>
			
			</select>


		</td>
	</tr>
  </table>
  
  
  <input type="submit" name="Submit" value="Cadastrar"><p>
    
<?php

	require_once('conn.php');

	$nome=$_POST['txt_nome'];
	$cel=$_POST['txt_cel'];
	$codEsp=$_POST['esp'];
	
	if (empty($nome) || empty($cel) || empty($codEsp))
	{
		echo "Por favor, preencha todos os dados";
	}
	else	
	{
	
	$insere=mysqli_query($conn, "INSERT INTO tdmedico(nomeMedico,celMedico ,codEsp) values('$nome','$cel','$codEsp')") or die(mysqli_error());
	
	echo "Cadastrado";
	}
	

	
?>
</form>
</body>
</html>
