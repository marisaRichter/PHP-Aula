<?php

/**
 * Exercício 2
 * Orientado a Objetos
 *
 * @author marisa.richter
 */
class Calculadora {
    
    private $numeros;
    
    public function somar($value1, $value2){
        $soma = $value1 + $value2;
        return $soma;
    }
    
    public function subtrair($value1, $value2){
        $result = $value1 - $value2;
        return $result;
    }
    
    public function dividir($value1, $value2){
        $result = $value1/$value2;
        return $result;
    }
    
    public function multiplicar($value1, $value2){
        $result = $value1*$value2;
        return $result;
    }
}
