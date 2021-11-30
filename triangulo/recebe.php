<?php
include_once "Triangulo.php"; //incluir classe
$objTri = new Triangulo();//instancia

//enviar valores para atributos
$objTri->lado1 = $_POST["lado1"];
$objTri->lado2 = $_POST["lado2"];
$objTri->lado3 = $_POST["lado3"];

//executar o método
$objTri->Verificar();
?>