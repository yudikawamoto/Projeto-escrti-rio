<?php

class Escritorio {
    private array $armarios = [];

    public function __construct(array $armarios = []) {
        $this->armarios = $armarios;
    }

    public function adicionarArmario(Armario $armario): void {
        $this->armarios[] = $armario;
    }

    public function removerArmario(int $indice): void {
        if (isset($this->armarios[$indice])) {
            unset($this->armarios[$indice]);
            echo "Armário removido. <br>";
        } else {
            echo "Armário não encontrado. <br>";
        }
    }

    public function listarArmarios(): void {
        if (empty($this->armarios)) {
            echo "Não há armários no escritório. <br>";
            return;
        }
        foreach ($this->armarios as $indice => $armario) {
            echo "Armário " . ($indice + 1) . "<br>";
            $armario->listarGavetas();
        }
    }

    public function auditoria(): void {
        echo "Relatórios de auditoria: <br>";
        foreach ($this->armarios as $indice => $armario) {
            echo "Armário " . ($indice + 1) . "<br>";
            $armario->listarGavetas();
        }
    }
}