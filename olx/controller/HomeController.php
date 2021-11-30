<?php
class HomeController
{
    function abrirHome()
    {
        session_start(); //iniciar sessão
        if(!$_SESSION["dadosUsuario"]) //verificar se não existe
        {
            //direcionar para o Login
            header("Location:index.php?classe=UsuarioController&metodo=abrirLogin");
        }
        
        include_once "view/Home.php"; //abrir tela inicial
    }
}
?>