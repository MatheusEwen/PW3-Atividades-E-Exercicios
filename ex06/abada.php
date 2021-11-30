<html>
  <head>
    <title> Meu Primeiro PHP </title>
  </head>
  <body>
 
    <form action="" method="post">
      <table border=0>
        <tr>
          <td> Quantidade de Abadas P </td>
          <td> <input type="text" id="txtn1" name="txtnp"> </td>
        </tr>
        <tr>                                          
          <td> Quantidade de Abadas M </td>
          <td> <input type="text" id="txtn2" name="txtnm"> </td>
        </tr>
<tr>                                          
          <td> Quantidade de Abadas G </td>
          <td> <input type="text" id="txtn2" name="txtng"> </td>
        </tr>
      </table>
      <input type="submit" value="Calcular" id="btnCalc" name="btnCalc">
     
    </form>
<?php

$tamanhos = [$_POST['txtnp'],$_POST['txtnm'],$_POST['txtng']];

$total = $tamanhos[0]+$tamanhos[1]+$tamanhos[2];

$valor = $total * 100;
$valores = array();

if($total>=20)
{
$valores[0] = $valor*0.75;

}
elseif($total>=10)
{
$valores[0] = $valor*0.85;

}
elseif($total>=5)
{
$valores[0] = $valor*0.90;

}
else
{
$valores[0] = $valor;
}



$valores[1] = ($tamanhos[0]*85+$tamanhos[1]*95+$tamanhos[2]*105);

echo "valor total dos Abadas na empresa A é $valores[0] e o valor total dos Abadas na empresa B é $valores[1]";

if ($valores[0]<$valores[1])
{
echo "<br>Compre da Empresa A";
}
elseif ($valores[1]<$valores[0])
{
echo "<br>Compre da Empresa B";
}
else
{
echo "<br>Compre de qualquer uma das empresas";
}



?>
</body>
</html>