<?php 

class Comprador {
    protected string $nome;
    protected string $nacionalidade;
    protected float $renda;

    public function __construct(string $nome, string $nacionalidade, float $renda)
    {
        $this->nome = $nome;
        $this->nacionalidade = $nacionalidade;
        $this->renda = $renda;
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

    public function getRenda(): float
    {
        return $this->renda;
    }

    public function setRenda(float $renda): self
    {
        $this->renda = $renda;

        return $this;
    }
}

