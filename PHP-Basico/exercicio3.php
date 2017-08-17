<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/*
 * Desenvolva um algoritmo PHP
 * que com base em quatro valores quaisquer
 * (A, B, C e D) efetue a soma entre A e D
 * e a divisão de B com C.
 * Verifique se o resultado da soma é
 * maior, menor ou igual ao resultado da divisão.
 */

$varA = 3;
$varB = 5;
$varC = 16;
$varD = 2;

$soma = $varA + $varB;
$divisao = $varC / $varD;

if($soma > $divisao){
    echo "soma($soma) é maior que divisão($divisao)";
}else if($soma < $divisao){
    echo "soma($soma) é menor que divisão($divisao)";
}else{
    echo "soma($soma) é igual a divisão($divisao)";
}