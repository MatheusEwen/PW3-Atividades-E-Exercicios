<?php
//incluir a classe
include_once "Calculos.php";
//instanciar a classe
$objCalc = new Calculos();

//enviar valor para os atributos
$objCalc->valor1 = $_POST["valor1"];
$objCalc->valor2 = $_POST["valor2"];

//executar os métodos
$objCalc->Somar();
$objCalc->Subtrair();
$objCalc->Multiplicar();
$objCalc->Dividir();
?>