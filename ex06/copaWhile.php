<!DOCTYPE html>
<html>
<head>
	<title>Copa do Mundo</title>
</head>
<body>

<body>

<form action="copaWhile.php" method="post">

	<select name="ano">
		<option value="">&nbsp;</option>
			<?php
                $i = 1930;
                 while($i <= 2018){

                    if(($i!=1942)&&($i!=1946)){

                        echo "<option value=".$i.">".$i."</option>";
                    	    		
                    }
                    $i+=4;		
                    }   
				?>
		</select>
		<input type="submit" value="Enviar"  id="btnEnv" name="btnEnv">
</form>

	<?php
	$ano=$_POST['ano'];

	switch($ano){

		case 1930:
		echo "<h1>País sede: Uruguai <br><h1>Campeão: Uruguai</h1>";
		break;

		case 1934:
		echo "<h1>País sede: Itália <br><h1>Campeão: Itália</h1>";
		break;

		case 1938:
		echo "<h1>País sede: França <br><h1>Campeão: Itália</h1>";
		break;

		case 1950:
		echo "<h1>País sede: Brasil <br><h1>Campeão: Uruguai</h1>";
		break;

		case 1954:
		echo "<h1>País sede: Suíça <br><h1>Campeão: Alemanha</h1>";
		break;

		case 1958:
		echo "<h1>País sede: Suécia <br><h1>Campeão: Brasil</h1>";
		break;

		case 1962:
		echo "<h1>País sede: Chile <br><h1>Campeão: Brasil</h1>";
		break;

		case 1966:
		echo "<h1>País sede: Inglaterra <br><h1>Campeão: Inglaterra</h1>";
		break;

		case 1970:
		echo "<h1>País sede: México <br><h1>Campeão: Brasil</h1>";
		break;

		case 1974:
		echo "<h1>País sede: Alemanha Ocidental <br><h1>Campeão: Alemanha</h1>";
		break;

		case 1978:
		echo "<h1>País sede: Argentina <br><h1>Campeão: Argentina</h1>";
		break;

		case 1982:
		echo "<h1>País sede: Espanha <br><h1>Campeão: Itália</h1>";
		break;

		case 1986:
		echo "<h1>País sede: México <br><h1>Campeão: Argentina</h1>";
		break;

		case 1990:
		echo "<h1>País sede: Itália <br><h1>Campeão: Alemanha</h1>";
		break;

		case 1994:
		echo "<h1>País sede: Estados Unidos <br><h1>Campeão: Brasil</h1>";
		break;

		case 1998:
		echo "<h1>País sede: França <br><h1>Campeão: França</h1>";
		break;

		case 2002:
		echo "<h1>País sede: Coreia do Sul e Japão <br><h1>Campeão: Brasil</h1>";
		break;

		case 2006:
		echo "<h1>País sede: Alemanha <br><h1>Campeão: Itália</h1>";
		break;

		case 2010:
		echo "<h1>País sede: África do Sul <br><h1>Campeão: Espanha</h1>";
		break;

		case 2014:
		echo "<h1>País sede: Brasil <br><h1>Campeão: Alemanha</h1>";
		break;

		case 2018:
		echo "<h1>País sede: Rússia <br><h1>Campeão: França</h1>";
		break;

		default:
		echo "<h1>Essa opção é invalida</h1> ";
		break;
		
		}



?>

	<br/>
	<br/>
		<a href="index.php"><button>Voltar</button></a>
	<br/>

</body>
</html>