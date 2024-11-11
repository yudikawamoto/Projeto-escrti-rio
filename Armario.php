<?php

class Armario {
    private array $gavetas = [];

    public function __construct(array $gavetas = []) {
        $this->gavetas = $gavetas;
    }

    public function adicionarGaveta(Gaveta $gaveta): void {
        $this->gavetas[] = $gaveta;
    }

    public function removerGaveta(int $indice): void {
        if (isset($this->gavetas[$indice])) {
            unset($this->gavetas[$indice]);
            echo "Gaveta removida com sucesso. <br>";
        } else {
            echo "Gaveta não encontrada. <br>";
        }
    }

    public function listarGavetas(): void {
        if (empty($this->gavetas)) {
            echo "Não há gavetas no armário. <br>";
            return;
        }
        foreach ($this->gavetas as $indice => $gaveta) {
            echo "Gaveta " . ($indice + 1) . "<br>";
            $gaveta->listarItens();
        }
    }
}
