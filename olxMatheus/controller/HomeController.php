<?php

class HomeController{

    function abrirHome(){
        
        session_start();
        if(!$_SESSION["dadosUsuario"]){

            header("Location:index.php?classe=UsuarioController&metodo=abrirLogin");


        }
        include_once "view/Home.php";//abre tela inicial

    }

}

?>