<?php

require_once("modelo/Jogador.php");

class Meia extends Jogador
{
    protected int $passe;
    protected int $drible;

    public function __construct($nome, $nacionalidade, $time, $valor, $overall, $passe, $drible)
    {
        parent::__construct($nome, $nacionalidade, $time, $valor, $overall);

        $this->passe = $passe;
        $this->drible = $drible;
    }

    public function exibir()
    {
        parent::exibir();

        echo "Passe: " . $this->passe . "\n";
        echo "Drible: " . $this->drible . "\n";
    }
}
