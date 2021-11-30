<?php
    class Conexao {

        static function conectar(){
            $con = new PDO("mysql:host=localhost;port=3306;dbname=bdolx","root","");
            $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $con;//retorna a conexão com BD

        }

    }

?>