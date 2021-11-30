<?php
class CalcDias{

    public $dias;
    public $horas;
    public $minutos;
    public $segundos;


    function calcular(){
        $this->horas = $this->dias * 24;

        $this->minutos = $this->horas * 60;

        $this->segundos = $this->minutos * 60;

        echo"Horas: $this->horas";
        echo"minutos: $this->minutos";
        echo"segundos: $this->segundos";


    }

    /*public $dias;
    

    function calcular(){
        $horas = $this->dias * 24;

        $minutos = $this->dias * 24 * 60;

        $segundos = $this->dias * 24 * 60 * 60;

        echo"Horas: $horas";
        echo"minutos: $minutos";
        echo"segundos: $segundos";


    }
    */

}
?>