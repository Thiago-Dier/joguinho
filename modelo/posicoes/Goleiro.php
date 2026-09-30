<?php

require_once("modelo/Jogador.php");

class Goleiro extends Jogador
{
    protected int $reflexo;
    protected int $posicionamento;

    public function __construct($nome, $nacionalidade, $time, $valor, $overall, $reflexo, $posicionamento)
    {
        parent::__construct($nome, $nacionalidade, $time, $valor, $overall);

        $this->reflexo = $reflexo;
        $this->posicionamento = $posicionamento;
    }

    public function exibir()
    {
        parent::exibir();

        echo "Reflexo: " . $this->reflexo . "\n";
        echo "Posicionamento: " . $this->posicionamento . "\n";
    }
}
