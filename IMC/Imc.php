<?php 
class Imc{

    private $altura;
    private $peso;

    function __get($atributo){
        return $this->$atributo;
    }
    function __set($atributo, $valor){
        return $this->$atributo = $valor;
    }

    function calcularImc(){

        $imc = $this->peso / ($this->altura * $this->altura);

        if($imc < 18.5){
            echo"Abaixo do peso";
        }elseif($imc < 24.9){
            echo"Peso normal";
        }elseif($imc < 29.9){
            echo"Acima do peso";
        }elseif($imc >= 30){
            echo"Obesidade";
        }
        

    }

}


?>