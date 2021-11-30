<?php
include_once "Combustivel.php";
$objComb = new Combustivel();
$objComb->etanol   = $_POST["etanol"];
$objComb->gasolina = $_POST["gasolina"];
$objComb->Verificar();
//$objComb->Verificar2($_POST["etanol"], $_POST["gasolina"]);
//echo $objComb->aplicarDesconto( $_POST["gasolina"] );
?>