<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>Consulta de Alunos</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body>
<form name="form1" method="post" action="conAluno.php">

<p>
    
        <?php

            require_once('conn.php');
        	
        	$sql=mysqli_query($conn,"SELECT tbaluno.nomeAluno, tbdisciplina.nomeDisciplina, tbnotas.nota, tbnotas.faltas, tbprofessor.nomeProfessor from tbaluno, tbdisciplina, tbnotas, tbprofessor where tbaluno.codAluno = tbnotas.codAluno and tbdisciplina.codDisciplina = tbnotas.codDisciplina and tbprofessor.codProfessor = tbnotas.codProfessor");
        	
        
        	while($linha=mysqli_fetch_array($sql))
        	{
        	
        	$nome=$linha['nomeAluno'];
			$disc=$linha['nomeDisciplina'];
			$nota=$linha['nota'];
			$faltas=$linha['faltas'];
			$prof=$linha['nomeProfessor'];
        	
        	echo"<p>";
        	
        	echo "<tr><td>Nome do Aluno: </td><td>$nome</td><tr><br>";
			echo "<tr><td>Disciplina: </td><td>$disc</td><tr> <br>";
			echo "<tr><td>Nota: </td><td>$nota</td><tr> <br>";
			echo "<tr><td>Faltas: </td><td>$faltas</td><tr> <br>";
			echo "<tr><td>Professor: </td><td>$prof</td><tr> <br>";

            
			
        	}
        	
        	?>

	</body>
	</html>