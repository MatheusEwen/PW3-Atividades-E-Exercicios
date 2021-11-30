<html>
<head>
<title>Cadastro do Atendimento</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>
<body>    
<form name="form1" method="post" action="cadAtendimento.php">
  <table> 
    <tr><td>Data do Atendimento</td> <td> <input type="date" name="txtData"></td></tr>
    <tr><td>Hora do Atendimento</td> <td><input type="time" name="txtHora"></td></tr>
    <tr><td>Observações</td> <td><input type="text" name="txtObs"></td></tr>
    <tr><td>Escolha o paciente</td>
      <td>
      <select name="pac">
				<option>Selecione</option>
				<?php
					$selPac = "SELECT * FROM tdpaciente";
					$resultSelPac = mysqli_query($conn, $selPac);
					while($resultado = mysqli_fetch_assoc($resultSelPac)){
				?>
						<option value="<?php echo $resultado['codPac'];?>"><?php echo $resultado['nomePac']; ?></option>
				<?php
					}
				?>
			</select>
      </td>
  </tr>
  <tr>
    <td>Escolha o Medico</td>
      <td>
        <select name="med">
				<option>Selecione</option>
				<?php
					$selMed = "SELECT * FROM tdmedico";
					$resultSelMed = mysqli_query($conn, $selMed);
					while($resultado = mysqli_fetch_assoc($resultSelMed)){
				?>
						<option value="<?php echo $resultado['codMedico'];?>"><?php echo $resultado['nomeMedico']; ?></option>
				<?php
					}
				?>
			  </select>
    </td>
  </tr>
    </table>
    <input type="submit" name="Submit" value="Cadastrar"><p>
      <?php

          $data=$_POST['txtData'];
          $hora=$_POST['txtHora'];
          $obs=$_POST['txtObs'];
          $codPac=$_POST['pac'];
          $codMed=$_POST['med'];

            if (empty($data) || empty($hora) || empty($obs) || empty($codPac)|| (empty($codMed)))
            {
                echo "Por favor, preencha todos os dados";
            }
            else	
            {

              $insere=mysqli_query($conn, "INSERT INTO tbatendimento(dataAtendimento, horaAtendimento,codPac,codMedico,observacoes) values('$data','$hora','$codPac','$codMed', '$obs')") or die(mysqli_error());

              echo "Cadastrado";
            }

      ?>
</form>
</body>
</html>