<?php

class Caneta {
    var $modelo;
    var $cor;
    var $ponta;
    var $carga;
    var $tampada;

    function rabiscar(){
        if($this->tampada == true){
            echo 'Esta tampada, não posso rabiscar';
        } else {
            echo 'Rabiscando..';
        }
    }

    function tampar(){
        $this->tampada = true;
    }

    function destampar(){
        $this->tampada = false;
    }
}