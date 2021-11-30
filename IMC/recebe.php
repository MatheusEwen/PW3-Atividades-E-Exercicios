<?php 

include_once "Imc.php";
$obj = new Imc();
$obj->altura = $_POST["altura"];
$obj->peso = $_POST["peso"];
$obj->calcularImc();

?>