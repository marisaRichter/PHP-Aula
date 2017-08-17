<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/*
 * Desenvolva um algoritmo PHP que com base em quatro notas
 * de um determinado aluno, calcule a média aritmética das notas
 * informadas e imprima um mensagem informando se o aluno
 * está passado (nota>7), se o aluno está em recuperação (nota>5 e nota<7)
 * ou se o aluno está reprovado (nota<5).
 */

$nota1 = 6;
$nota2 = 5;
$nota3 = 2;
$nota4 = 6;

$media = ($nota1 + $nota2 + $nota3 + $nota4)/4;

if($media >= 7){
    echo "Aluno está passado. Média: $media";
}else if($media >= 5){
    echo "Aluno está em recuperação. Média: $media";
}else{
    echo "Aluno está reprovado. Média: $media";
}