<?php
include_once "CalcDias.php";

$obj = new CalcDias();

$obj->dias = $_POST["dias"];
$obj->calcular();
?>