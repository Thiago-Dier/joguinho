<?php

require_once("modelo/Jogador.php");

class Zagueiro extends Jogador
{
    protected int $defesa;
    protected int $fisico;

    public function __construct($nome, $nacionalidade, $time, $valor, $overall, $defesa, $fisico)
    {
        parent::__construct($nome, $nacionalidade, $time, $valor, $overall);

        $this->defesa = $defesa;
        $this->fisico = $fisico;
    }

    public function exibir()
    {
        parent::exibir();

        echo "Defesa: " . $this->defesa . "\n";
        echo "Físico: " . $this->fisico . "\n";
    }
}
