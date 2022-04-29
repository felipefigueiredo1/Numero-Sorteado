<?php

/**
 * Escreva um programa que preencha um array com 20 números inteiros sorteados entre 1 e 10. 
 * Depois informe qual ou quais número(s) não se repetiram.
 */

class NumeroSorteado 
{
    public $sets;

    public function pegandoNumeros($inicio, $final)
    {
        $array = range($inicio, $final);
        shuffle($array);
        $sets = array_chunk($array, 2);

        $this->sets = $sets;
    }

    public function iterando()
    {
        echo "Numeros sorteados: ";
        foreach ($this->sets as $set) {
            echo implode(',' , $set) , ",";
        }

        $this->numerosUnicos($set);
    }

    public function numerosUnicos($set)
    {
        $numerosUnicos = array_unique($set);
        echo '<br>';
        echo "Numeros que não se repetem: " . $unico = implode(", ",array_unique($numerosUnicos));
        echo "<br>";
    }
}

//Aqui passado parametro
$obj = new NumeroSorteado;
$obj->pegandoNumeros(1,10);
$obj->iterando();
