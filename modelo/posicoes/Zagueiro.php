<?php 

class Zagueiro extends Jogador{
    private int $desarmes;

    public function __construct(string $nome, string $nacionalidade, string $time, float $valorDeMercado, int $overall, int $desarmes)
    {
        $this->desarmes = $desarmes;
    }

    public function getDesarmes(): int
    {
        return $this->desarmes;
    }

    public function setDesarmes(int $desarmes): self
    {
        $this->desarmes = $desarmes;

        return $this;
    }
}

