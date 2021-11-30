<?php
class Triangulo
{
    public $lado1;
    public $lado2;
    public $lado3;

    function Verificar()
    {
        if($this->lado1 == $this->lado2 && $this->lado1 == $this->lado3)
        {
            echo "Triângulo Escaleno";
        }
        else if($this->lado1 != $this->lado2 && $this->lado1 != $this->lado3 && $this->lado2 != $this->lado3)
        {
            echo "Triângulo Equilátero";
        }
        else
        {
            echo "Triângulo Isósceles";
        }
    }
}
?>