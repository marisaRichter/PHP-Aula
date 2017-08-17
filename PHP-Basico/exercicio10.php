<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/*
 * Desenvolva um algoritmo PHP que com base
 * em dois valores quaisquer imprima os valores
 * intermediários a eles.
 * Por exemplo: valor 3 e 8, imprime “4 5 6 7”.
 */

$first = 3;
$last = 8;

for($i = $first+1; $i < $last; $i++){
    echo $i."\n";
}