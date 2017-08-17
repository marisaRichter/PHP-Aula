<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/*
 * Desenvolva um algoritmo PHP que com base
 * em um valor qualquer calcule o seu fatorial,
 * onde a função fatorial é:
 * Fat(6) = 6*5*4*3*2*1
 * Fat(4) = 4*3*2*1
 */

$valor = 6;
$result = $valor * ($valor-1);

for($i = $valor-2; $i > 0; $i--){
    $result = $result * $i;
}

echo $result;