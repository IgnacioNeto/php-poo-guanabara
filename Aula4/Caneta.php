<?php
class Caneta {
    public $modelo;
    private $cor;
    private $ponta;
    private $tampada;

    // ao instanciar a classe com o construtor ele já carrega
    // as propriedades definidas nele
    // public function __construct() {
    //     $this->cor ="Azul";
    //     $this->tampar();
    // }

    // Essa é outra forma de chamar o construtor (mesmo de cima)
    // public function Caneta() { 
    //     $this->cor ="Azul";
    //     $this->tampar();
    // }

    // Essa é outra forma de chamar o construtor (mesmo de cima)
    public function Caneta ($m, $c, $p) { 
        $this->modelo = $m;
        $this->cor = $c;
        $this->ponta = $p;
        $this->tampar();
       
    }

    public function tampar() {
        $this->tampada = true;
    }

    public function getModelo() {
        return $this->modelo;
    }
    public function setModelo($m) {
        $this->modelo = $m;
    }
    public function getPonta() {
        return $this->ponta;
    }
    public function setPonta($p) {
        $this->ponta = $p;
    }

}