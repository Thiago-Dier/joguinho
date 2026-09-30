<?php

class Jogador
{
    protected string $nome;
    protected string $nacionalidade;
    protected string $time;
    protected float $valor;
    protected int $overall;

    public function __construct(string $nome, string $nacionalidade, string $time, float $valor, int $overall)
    {
        $this->nome = $nome;
        $this->nacionalidade = $nacionalidade;
        $this->time = $time;
        $this->valor = $valor;
        $this->overall = $overall;
    }

    public function exibir()
    {
        echo "Nome: " . $this->nome . "\n";
        echo "Nacionalidade: " . $this->nacionalidade . "\n";
        echo "Time: " . $this->time . "\n";
        echo "Valor: €" . number_format($this->valor, 0, ',', '.') . "\n";
        echo "Overall: " . $this->overall . "\n";
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function setNome(string $nome): self
    {
        $this->nome = $nome;

        return $this;
    }

    public function getNacionalidade()
    {
        return $this->nacionalidade;
    }

    public function setNacionalidade(string $nacionalidade): self
    {
        $this->nacionalidade = $nacionalidade;

        return $this;
    }

    public function getTime()
    {
        return $this->time;
    }

    public function setTime(string $time): self
    {
        $this->time = $time;

        return $this;
    }

    public function getValor()
    {
        return $this->valor;
    }

    public function setValor(float $valor): self
    {
        $this->valor = $valor;

        return $this;
    }

    public function getOverall()
    {
        return $this->overall;
    }

    public function setOverall(int $overall): self
    {
        $this->overall = $overall;

        return $this;
    }
}
