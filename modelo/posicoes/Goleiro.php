<?php 

class Goleiro extends Jogador {
    private int $defesas;

    public function __construct(string $nome, string $nacionalidade, string $time, float $valorDeMercado, int $overall,  int $defesas)
    {
        $this->defesas = $defesas;
    }

    public function getDefesas(): int
    {
        return $this->defesas;
    }

    public function setDefesas(int $defesas): self
    {
        $this->defesas = $defesas;

        return $this;
    }
}






