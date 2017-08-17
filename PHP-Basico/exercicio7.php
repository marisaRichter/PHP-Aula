<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/*
 * Desenvolva um algoritmo PHP que com base
 * em um tamanho(A) qualquer e um sexo(S)
 * qualquer seja impresso o peso ideal da pessoa.
 * Regra IMC (Índice de Massa Corporal)
 * a) Para homens: (72.7 * A) – 58
 * b) Para mulheres: (62.1 * A) – 44.
 */

$varS = "F";
$varT = 1.8;

if($varS === "F"){
    $imc = (62.1 * $varT) - 44;
} else{
    $imc = (72.7 * $vatT) - 58;
}

echo $imc;