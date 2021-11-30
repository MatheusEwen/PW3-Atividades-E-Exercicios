<?php 

if(!empty($_REQUEST["classe"]) && !empty($_REQUEST["metodo"])){

    $classe = $_REQUEST["classe"];
    $metodo = $_REQUEST["metodo"];

    include_once "controller/$classe.php";

    $objeto = new $classe();
    $objeto->$metodo();

} else {

    //abrir tela inicial
    include_once "controller/HomeController.php";
    $home = new HomeController();
    $home->abrirHome();

}


?>