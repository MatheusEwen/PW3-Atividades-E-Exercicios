<?php
class Combustivel
{
    //atributos (global)
    private $etanol;
    private $gasolina;
    //métodos GET e SET
    function __get($atributo)
    {
        return $this->$atributo; 
    }
    function __set($atributo, $valor) 
    {
        $this->$atributo = $valor;
    }
    //métodos
    function Verificar()
    {
        $porcentagem = $this->gasolina * 0.7;
        if($porcentagem > $this->etanol)
        {
            echo "É melhor abastecer com ETANOL!";
        }
        else
        {
            echo "É melhor abastecer com GASOLINA!";
        }
    }
    function Verificar2($preco_etanol, $preco_gasolina)
    {
        $porcentagem = $preco_gasolina * 0.7;
        if($porcentagem > $preco_etanol)
        {
            echo "É melhor abastecer com ETANOL!";
        }
        else
        {
            echo "É melhor abastecer com GASOLINA!";
        }
    }
    //criar uma função que a partir do preço da gasolina
    //verifique se o preço for maior ou igual que 5 aplicar desconto 
    // de 5%
    //Se o preço for abaixo de 5 aplicar desconto de 3%
     function aplicarDesconto($preco_gasolina)
     {
        if($preco_gasolina >= 5)
        {
            $desconto   = $preco_gasolina * 0.05;
            $novo_preco = $preco_gasolina - $desconto;
        }
        else
        {
            $desconto   = $preco_gasolina * 0.03;
            $novo_preco = $preco_gasolina - $desconto;
        }
        //echo "Valor da gasolina com desconto: R$ $novo_preco";
        return $novo_preco;
     }

}
?>