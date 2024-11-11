<?php

class Gaveta {
    private array $itens = [];

    public function __construct(array $itens = []) {
        $this->itens = $itens;
    }

    public function adicionarItem(Item $item): void {
        $this->itens[] = $item;
    }

    public function removerItem(string $nome): void {
        foreach ($this->itens as $index => $item) {
            if ($item->getNome() === $nome) {
                unset($this->itens[$index]);
                echo "Removido o item {$nome} <br>";
                return;
            }
        }
        echo "Item {$nome} não encontrado na gaveta. <br>";
    }

    public function listarItens(): void {
        if (empty($this->itens)) {
            echo "Não há itens na gaveta.<br>";
            return;
        }
        foreach ($this->itens as $item) {
            echo "Item: " . $item->getNome() . " - Descrição: " . $item->getDescricao() . "<br>";
        }
    }
}
