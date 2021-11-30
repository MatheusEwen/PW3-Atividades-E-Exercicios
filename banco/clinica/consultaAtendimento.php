<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>Consulta do Atendimento</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body>
<form name="form1" method="post" action="consultaAtendimento.php">

<p>
    
        <?php

            require_once('conn.php');

			$selecionaDados = "SELECT tbAtendimento.dataAtendimento, tbAtendimento.horaAtendimento, tbAtendimento.observacoes, tdpaciente.nomePac, tdMedico.nomeMedico FROM tbAtendimento, tdPaciente, tdMedico WHERE tdPaciente.codPac = tbAtendimento.codPac AND tdMedico.codMedico = tbAtendimento.codMedico";
        	
        	$sql=mysqli_query($conn, $selecionaDados);
        	
        
        	while($linha=mysqli_fetch_array($sql))
        	{
        	$nomePac=$linha['nomePac'];
        	$data=$linha['dataAtendimento'];
        	$hora=$linha['horaAtendimento'];
        	$nomeMedico=$linha['nomeMedico'];
        	$obs=$linha['observacoes'];
			
        	echo"<p>";
        	
        	echo "<table><tr><td>Data do Atendimento: </td><td>$data</td><tr>";
        	echo "<tr><td>Hora do Atendimento: </td><td>$hora</td><tr>";
        	echo "<tr><td>Nome do Paciente: </td><td>$nomePac</td><tr>";
            echo "<tr><td>Nome do Médico: </td><td>$nomeMedico</td><tr>";
            echo "<tr><td>Observações: </td><td>$obs</td><tr></table>";
			
        	}
        	
        	?>

	</body>
	</html>