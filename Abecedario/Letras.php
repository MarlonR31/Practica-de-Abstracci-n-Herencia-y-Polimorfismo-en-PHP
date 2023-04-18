<?php

class Letras extends Abecedario
{
    public $letra;
    public function __construct($_letra)
    {
        $this->letra = $_letra;
    }

    public function leer()
    {
        echo "Letra ".$this->letra;
    }
}