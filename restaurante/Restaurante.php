<?php 
class Restaurante {

    private consumo;
    private pessoas;

    function __get($atributo){
        return $this->$atributo;
    }
    function __set($atributo, $valor){
        $this->$atributo = $valor;
    }

    //método

    function calcularConsumo(){
        $taxaServico = $this->consumo * 0.10;
        $totalConta = $this->consumo + $taxaServico;
        $valorPessoa = $totalConta / $this->pessoas;

        echo"RESUMO DA CONTA <br>
        valor do consumo: R$ $this->consumo<br>
        Taxa de serviço: R$ $taxaServiço<br>
        Valor por pessoa: R$ $valorPessoas";
    }

}


?>