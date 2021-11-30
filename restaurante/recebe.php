<?php 

include_once "Restaurante.php";
$objRest = new Restaurante();

$objRest->consumo = $_POST["consumo"];
$objRest->pessoas = $_POST["pessoas"];

$objRest->calcularConsumo();

?>