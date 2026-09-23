<?php 

class Atacante extends Jogador {

    private int $golsMarcados;

    #[Override]
    public function __construct(string $nome, string $nacionalidade, string $time, float $valorDeMercado, int $overall, int $golsMarcados)
    {
        $this->golsMarcados = $golsMarcados;
    }

    public function getGolsMarcados(): int
    {
        return $this->golsMarcados;
    }

    public function setGolsMarcados(int $golsMarcados): self
    {
        $this->golsMarcados = $golsMarcados;

        return $this;
    }
}

