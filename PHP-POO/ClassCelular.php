<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Celular {
    
    var $nome;
    var $marca;
    var $tamanhoDaTela;
    var $memoriaInterna;
    var $memoriaRAM;
    var $preco;
    
    function Celular($nome, $marca, $tamanhoDaTela, $memoriaInterna, $memoriaRAM, $preco){
        $this->nome = $nome;
        $this->marca = $marca;
        $this->tamanhoDaTela = $tamanhoDaTela;
        $this->memoriaInterna = $memoriaInterna;
        $this->memoriaRAM = $memoriaRAM;
        $this->preco = $preco;
    }
    
}
