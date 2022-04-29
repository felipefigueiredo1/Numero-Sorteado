<?php

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
            echo implode(',' , $set) , "\n";
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

$obj = new NumeroSorteado;
$obj->pegandoNumeros(1,10);
$obj->iterando();
