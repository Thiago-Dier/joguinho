<?php 

class Meia extends Jogador {
    private int $assistencias;

    public function __construct(string $nome, string $nacionalidade, string $time, float $valorDeMercado, int $overall, int $assistencias)
    {
        $this->assistencias = $assistencias;
    }

    public function getAssistencias(): int
    {
        return $this->assistencias;
    }

    public function setAssistencias(int $assistencias): self
    {
        $this->assistencias = $assistencias;

        return $this;
    }
}


