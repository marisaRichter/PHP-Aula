<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/*
 * Desenvolva um algoritmo PHP que
 * com base no valor da gasolina
 * e no valor do álcool ele informe se
 * é mais econômico abastecer com gasolina ou com álcool.
 * a) valor da gasolina * 0.7,
 * se o resultado for maior que o valor do álcool
 * “abasteça com álcool”, senão “abasteça com gasolina”.
 */

$valorGasolina = 3.99;
$valorAlcool = 2.99;

$porcentagem = $valorGasolina * 0.7;

if($porcentagem > $valorAlcool){
    echo "Abasteça com Álcool.";
}else{
    echo "Abasteça com Gasolina.";
}
