<?php 

class Jogador {
    protected string $nome;
    protected string $nacionalidade;
    protected string $time;
    protected float $valorDeMercado;
    protected int $overall;

    public function __construct(string $nome, string $nacionalidade, string $time, float $valorDeMercado, int $overall)
    {
        $this->nome = $nome;
        $this->nacionalidade = $nacionalidade;
        $this->time = $time;
        $this->valorDeMercado = $valorDeMercado;
        $this->overall = $overall;
    }

    public function getNome(): string
    {
        return $this->nome;
    }

    public function setNome(string $nome): self
    {
        $this->nome = $nome;

        return $this;
    }

    public function getNacionalidade(): string
    {
        return $this->nacionalidade;
    }

    public function setNacionalidade(string $nacionalidade): self
    {
        $this->nacionalidade = $nacionalidade;

        return $this;
    }

    public function getTime(): string
    {
        return $this->time;
    }

    public function setTime(string $time): self
    {
        $this->time = $time;

        return $this;
    }

    public function getValorDeMercado(): float
    {
        return $this->valorDeMercado;
    }

    public function setValorDeMercado(float $valorDeMercado): self
    {
        $this->valorDeMercado = $valorDeMercado;

        return $this;
    }

    public function getOverall(): int
    {
        return $this->overall;
    }

    public function setOverall(int $overall): self
    {
        $this->overall = $overall;

        return $this;
    }
}

