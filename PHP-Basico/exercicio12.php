<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/*
 * Exiba a soma de todos os valores divisíveis por 8 em um conjunto de 0 à 1000.
 */

define("div", 8);
define("first", 0);
define("last", 1000);

$soma = 0;
$count = 0;

for($i = first; $i <= last; $i++){
    if($i % div === 0){
        $soma += $i;
        $count++;
    }
}
echo $soma;
