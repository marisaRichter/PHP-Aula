<?php

//Exercício 1 POO
//include("/PHP-POO/ClassCelular.php");
//
//$iPhone = new Celular("iPhone 6", "Apple", 4.7, 128, 1, 2299);
//$galaxyS7 = new Celular("Galaxy S7", "Samsung", 5.1, 64, 4, 1799);
//$motoX = new Celular("Moto X", "Motorola", 5.5, 32, 2, 1029);
//
//echo "Dados do Celular: <br><br>";
//echo "Nome: " . $iPhone->__get("nome") . "<br>";
//echo "Marca: " . $iPhone->__get("marca") . "<br>";
//echo "Tamanho da Tela: " . $iPhone->__get("tamanhoDaTela") . "<br>";
//echo "Memória Interna: " . $iPhone->__get("memoriaInterna") . "<br>";
//echo "Memória RAM: " . $iPhone->__get("memoriaRAM") . "<br>";
//echo "Preço: R$ " . $iPhone->__get("preco") . "<br>";
//
//echo "<br>--------------------------------------<br>";
//
//echo "<br>Dados do Celular: <br><br>";
//echo "Nome: " . $galaxyS7->__get("nome") . "<br>";
//echo "Marca: " . $galaxyS7->__get("marca") . "<br>";
//echo "Tamanho da Tela: " . $galaxyS7->__get("tamanhoDaTela") . "<br>";
//echo "Memória Interna: " . $galaxyS7->__get("memoriaInterna") . "<br>";
//echo "Memória RAM: " . $galaxyS7->__get("memoriaRAM") . "<br>";
//echo "Preço: R$ " . $galaxyS7->__get("preco") . "<br>";
//
//echo "<br>--------------------------------------<br>";
//
//echo "<br>Dados do Celular: <br><br>";
//echo "Nome: " . $motoX->__get("nome") . "<br>";
//echo "Marca: " . $motoX->__get("marca") . "<br>";
//echo "Tamanho da Tela: " . $motoX->__get("tamanhoDaTela") . "<br>";
//echo "Memória Interna: " . $motoX->__get("memoriaInterna") . "<br>";
//echo "Memória RAM: " . $motoX->__get("memoriaRAM") . "<br>";
//echo "Preço: R$ " . $motoX->__get("preco") . "<br>";
//Fim Exercício 1 POO

//Exercício 2

include("/PHP-POO/Calculadora.php");

define("value1", 8);
define("value2", 2);

$calcular = new Calculadora();

echo "Valor 1: " . value1 . "<br>Valor 2: " . value2 . "<br>";

$resultSoma = $calcular->somar(value1, value2);
$resultSubtracao = $calcular->subtrair(value1, value2);
$resultDivicao = $calcular->dividir(value1, value2);
$resultMultiplicacao = $calcular->multiplicar(value1, value2);

echo "Soma: $resultSoma<br>";
echo "Subtração: $resultSubtracao<br>";
echo "Divisão: $resultDivicao<br>";
echo "Multiplicação: $resultMultiplicacao<br>";

//Fim exercício 2
