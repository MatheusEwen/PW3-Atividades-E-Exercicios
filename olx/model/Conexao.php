<?php
class Conexao
{
    static function conectar()
    {
        $con = new PDO("mysql:host=localhost;port=3306;dbname=bdolx","root","usbw");
        $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);//ativando o recurso de exibição erros
        return $con; //retornando a conexão com o BD
    }
}

?>