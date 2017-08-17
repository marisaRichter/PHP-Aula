<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/*
 * Desenvolva um algoritmo PHP que imprima
 * todos os valores múltiplos de 5
 * em um conjunto de 0 à 500.
 */

$div = 5;

for($i = 0; $i<=500; $i++){
    if($i % $div === 0){
        echo "$i\n";
    }
}