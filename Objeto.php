<?php

require_once("Item.php");

class Objeto extends Item {
    private float $peso; 

    public function __construct(string $nome, string $descricao, float $peso) {
        parent::__construct($nome, $descricao);
        $this->peso = $peso;    
    }

    public function getPeso(): float {
        return $this->peso; 
    }

    public function setPeso(float $peso): void {
        $this->peso = $peso;
    }
}
