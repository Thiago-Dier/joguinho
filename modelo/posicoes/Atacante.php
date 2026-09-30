<?php

require_once("modelo/Jogador.php");

class Atacante extends Jogador
{
    protected int $finalizacao;
    protected int $velocidade;

    public function __construct($nome, $nacionalidade, $time, $valor, $overall, $finalizacao, $velocidade)
    {
        parent::__construct($nome, $nacionalidade, $time, $valor, $overall);

        $this->finalizacao = $finalizacao;
        $this->velocidade = $velocidade;
    }

    public function exibir()
    {
        parent::exibir();

        echo "Finalização: " . $this->finalizacao . "\n";
        echo "Velocidade: " . $this->velocidade . "\n";
    }

    public function getFinalizacao(): int
    {
        return $this->finalizacao;
    }

    public function setFinalizacao(int $finalizacao): self
    {
        $this->finalizacao = $finalizacao;

        return $this;
    }

    public function getVelocidade(): int
    {
        return $this->velocidade;
    }

    public function setVelocidade(int $velocidade): self
    {
        $this->velocidade = $velocidade;

        return $this;
    }
}
