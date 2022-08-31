<?php

class Caneta {
    public $modelo; // Visibilidade publica (Geral aberta)
    public $cor;
    private $ponta; // Visibilidade privada (Fechada)
    protected $carga;
    protected $tampada; // Visibilidade protegida (Apenas para classe)

    // Criando os métodos
    // Método definido como público
    public function rabiscar() {
        if($this->tampada == true) {
            echo "<p>Erro! Não posso rabiscar</p>";
        } else {
            echo "<p>Estou rabiscando...</p>";
        
        }
    }    
        // Método definido como privado
        private function tampar() {
            $this->tampada = true;
        }

        private function destampar() {
            $this->tampada = false;

        }
    
}