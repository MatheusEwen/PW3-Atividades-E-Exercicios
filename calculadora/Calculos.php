<?php
class Calculos //nome da classe
{
    //atributos
    public $valor1;
    public $valor2;
    public $resultado;

    //métodos
    function Somar()
    {
        $this->resultado = $this->valor1 + $this->valor2;
        echo "<p><b>Soma:</b> $this->resultado</p>";
    }

    function Subtrair()
    {
        $this->resultado = $this->valor1 - $this->valor2;
        echo "<p><b>Subtrair:</b> $this->resultado</p>";
    }

    function Multiplicar()
    {
        $this->resultado = $this->valor1 * $this->valor2;
        echo "<p><b>Multiplicar:</b> $this->resultado</p>";
    }

    function Dividir()
    {
        $this->resultado = $this->valor1 / $this->valor2;
        echo "<p><b>Dividir:</b> $this->resultado</p>";
    }
}
?>