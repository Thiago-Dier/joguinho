<?php

require_once("modelo/posicoes/Atacante.php");
require_once("modelo/posicoes/Meia.php");
require_once("modelo/posicoes/Zagueiro.php");
require_once("modelo/posicoes/Goleiro.php");
require_once("modelo/Jogador.php");

// JOGADORES BASTARD MUNCHEN
$Bastard = [ 
    new Atacante("Noel Noa", "França(FRA) 🇫🇷​", "Bastard Munchen - 🇩🇪​", 1000000000, 99, 99, 99),
    new Atacante("Michael Kaiser", "Alemanha(GER) 🇩🇪​", "Bastard Munchen - 🇩🇪​", 400000000, 98, 99, 98), 
    new Atacante("Yoichi Isagi", "Japão(JPN) 🇯🇵", "Bastard Munchen - 🇩🇪​​", 240000000, 95, 94, 92), 
    new Meia("Hiori Yo", "Japão(JPN) 🇯🇵", "Bastard Munchen - 🇩🇪​", 39000000, 84, 89, 91), 
    new Meia("Hanze Kurona", "Japão(JPN) - 🇯🇵", "Bastard Munchen - 🇩🇪​", 35000000, 90, 88, 88), 
    new Meia("Jin Kiyora", "Japão(JPN) 🇯🇵", "Bastard Munchen - 🇩🇪​", 26000000, 80, 84, 86), 
    new Zagueiro("Rensuke Kunigami", "Japão(JPN) 🇯🇵", "Bastard Munchen - 🇩🇪​", 66000000, 87, 92, 99),
    new Zagueiro("Gurimu Igarashi", "Japão(JPN) 🇯🇵", "Bastard Munchen - 🇩🇪​", 3000000, 79, 85, 80), 
    new Goleiro("Gin Gagamaru", "Japão(JPN) 🇯🇵", "Bastard Munchen - 🇩🇪​", 50000000, 90, 99, 92) 
]; 

// JOGADORES PXG
$PXG = [ 
    new Atacante("Julian Loki", "França(FRA) 🇫🇷​", "Paris X Gen - 🇫🇷​", 1000000000, 99, 99, 99),
    new Atacante("Rin Itoshi", "Japão(JPN) 🇯🇵​", "Paris X Gen - 🇫🇷​", 243000000, 97, 99, 97), 
    new Atacante("Ryusei Shido", "Japão(JPN) 🇯🇵​", "Paris X Gen - 🇫🇷​", 160000000, 93, 99, 94), 
    new Meia("Charles Chevalier", "França(FRA) 🇫🇷​​", "Paris X Gen - 🇫🇷​", 110000000, 91, 96, 99), 
    new Meia("Tabito Karasu", "Japão(JPN) 🇯🇵​​", "Paris X Gen - 🇫🇷​", 550000000, 88, 89, 86), 
    new Zagueiro("Nijiro Nanase", "Japão(JPN) 🇯🇵​​", "Paris X Gen - 🇫🇷​", 250000000, 82, 80, 83), 
    new Zagueiro("Zantetsu Tsurugi", "Japão(JPN) 🇯🇵​​", "Paris X Gen - 🇫🇷​", 33000000, 81, 87, 85) 
]; 

// JOGADORES UBERS
$Ubers = [ 
    new Atacante("Marc Snuffy", "Malta(MLT) 🇲🇹", "Ubers - 🇮🇹", 1000000000, 99, 99, 99),
    new Atacante("Shoei Barou", "Japão(JPN) 🇯🇵", "Ubers - 🇮🇹", 150000000, 96, 99, 95), 
    new Atacante("Sendou Shuto", "Japão(JPN) 🇯🇵", "Ubers - 🇮🇹", 37000000, 89, 90, 89), 
    new Zagueiro("Don Lorenzo", "Itália(ITA) 🇮🇹", "Ubers - 🇮🇹", 280000000, 98, 99, 98), 
    new Zagueiro("Oliver Aiku", "Japão(JPN) 🇯🇵", "Ubers - 🇮🇹", 60000000, 91, 96, 95), 
    new Zagueiro("Nikko Ikki", "Japão(JPN) 🇯🇵", "Ubers - 🇮🇹", 40000000, 89, 90, 89), 
    new Zagueiro("Aryu Jiubei", "Japão(JPN) 🇯🇵", "Ubers - 🇮🇹", 45000000, 89, 89, 90), 
    new Goleiro("Gen Fukaku", "Japão(JPN) 🇯🇵", "Ubers - 🇮🇹", 28000000, 86, 87, 88) 
]; 

// JOGADORES BARCHA
$Barcha = [ 
    new Atacante("Lavinho", "Brasil(BRA) 🇧🇷", "FC Barcha - 🇪🇸", 1000000000, 99, 99, 99),
    new Atacante("Bachira Meguru", "Japão(JPN) 🇯🇵", "FC Barcha - 🇪🇸", 120000000, 93, 94, 99), 
    new Atacante("Eita Otoya", "Japão(JPN) 🇯🇵", "FC Barcha - 🇪🇸", 63000000, 89, 90, 95) 
]; 



// JOGADORES MANSHINE CITY
$ManshineCity = [ 
    new Atacante("Chris Prince", "Inglaterra(ENG) 🏴󠁧󠁢󠁥󠁮󠁧󠁿", "Manshine City - 🏴󠁧󠁢󠁥󠁮󠁧󠁿", 1000000000, 99, 99, 99),
    new Atacante("Agi", "Inglaterra(ENG) 🏴󠁧󠁢󠁥󠁮󠁧󠁿", "Manshine City - 🏴󠁧󠁢󠁥󠁮󠁧󠁿", 80000000, 91, 94, 94), 
    new Atacante("Seishiro Nagi", "Japão(JPN) 🇯🇵", "Manshine City - 🏴󠁧󠁢󠁥󠁮󠁧󠁿", 24000000, 93, 97, 85), 
    new Meia("Reo Mikage", "Japão(JPN) 🇯🇵", "Manshine City - 🏴󠁧󠁢󠁥󠁮󠁧󠁿", 78000000, 93, 97, 95) 
];

$jogadores = array_merge(      // array_merge junta vários arrays em um único array.
    $Bastard,
    $PXG,
    $Barcha,
    $Ubers,
    $ManshineCity
);

echo "====================================\n";
echo "       BLUE LOCK MANAGER\n";
echo "====================================\n\n";

echo "Escolha a dificuldade:\n\n";

echo "1 - Fácil       (€3.000.000.000)\n";
echo "2 - Realista    (€1.000.000.000)\n";
echo "3 - Estratégico (€500.000.000)\n\n";

$opcao = readline("Digite a opção: ");

if ($opcao == 1) {

    $dinheiroInicial = 3000000000;

    echo "\n🟢 Dificuldade Fácil selecionada!\n";
    echo "Você possui muito dinheiro para montar seu time.\n";

} elseif ($opcao == 2) {

    $dinheiroInicial = 1000000000;

    echo "\n🟡 Dificuldade Realista selecionada!\n";
    echo "Você precisará equilibrar jogadores caros e baratos.\n";

} elseif ($opcao == 3) {

    $dinheiroInicial = 500000000;

    echo "\n🔴 Dificuldade Estratégica selecionada!\n";
    echo "Seu orçamento é limitado. Escolha seus jogadores com cuidado.\n";

} else {

    echo "\n❌ Opção inválida!\n";
    exit;

}

$dinheiro = $dinheiroInicial;

$meuTime = [];

$elenco = [
    "Goleiro" => 1,
    "Zagueiro" => 4,
    "Meia" => 3,
    "Atacante" => 3
];

$quantidadePosicoes = [
    "Goleiro" => 0,
    "Zagueiro" => 0,
    "Meia" => 0,
    "Atacante" => 0
];

function descobrirPosicao(object $jogador)
{
    if ($jogador instanceof Atacante) {
        return "Atacante";
    }

    if ($jogador instanceof Meia) {
        return "Meia";
    }

    if ($jogador instanceof Zagueiro) {
        return "Zagueiro";
    }

    if ($jogador instanceof Goleiro) {
        return "Goleiro";
    }
}

function exibirTimeAtual(array $quantidadePosicoes)
{
    echo "\n==============================\n";
    echo "       SEU TIME ATUAL\n";
    echo "==============================\n";

    echo "Goleiros:  " . $quantidadePosicoes["Goleiro"] . "/1\n";
    echo "Zagueiros: " . $quantidadePosicoes["Zagueiro"] . "/4\n";
    echo "Meias:     " . $quantidadePosicoes["Meia"] . "/3\n";
    echo "Atacantes: " . $quantidadePosicoes["Atacante"] . "/3\n";
}

echo "\n💰 Seu orçamento: €"
    . number_format($dinheiro, 0, ',', '.') . "\n";

exibirTimeAtual($quantidadePosicoes);

function adicionarJogador(              // & antes do parâmetro permite que a função altere a variável original, e não apenas uma cópia dela ( aprendemos com o Jefferson )
    object $jogador,
    array &$meuTime,
    int &$dinheiro,
    array &$quantidadePosicoes,
    array $elenco
) {
    $posicao = descobrirPosicao($jogador);

    if ($quantidadePosicoes[$posicao] >= $elenco[$posicao]) {
        echo "\n❌ Não há mais vagas para " . $posicao . ".\n";
        return false;
    }

    foreach ($meuTime as $jogadorComprado) {
        if ($jogadorComprado->getNome() == $jogador->getNome()) {
            echo "\n❌ Você já contratou esse jogador!\n";
            return false;
        }
    }

    if ($dinheiro < $jogador->getValor()) {

        echo "\n❌ Dinheiro insuficiente!\n";

        echo "Valor do jogador: €"
            . number_format($jogador->getValor(), 0, ',', '.') . "\n";   // number_format formata o número para facilitar a leitura, usando pontos para separar milhares.

        echo "Seu dinheiro: €"
            . number_format($dinheiro, 0, ',', '.') . "\n";

        return false;
    }

    $dinheiro -= $jogador->getValor();

    $meuTime[] = $jogador;

    $quantidadePosicoes[$posicao]++;

    echo "\n✅ " . $jogador->getNome() . " foi contratado!\n";

    echo "💰 Dinheiro restante: €"
        . number_format($dinheiro, 0, ',', '.') . "\n";

    return true;
}

function menuJogadores(
    array $time,
    string $nomeTime,
    array &$meuTime,
    int &$dinheiro,
    array &$quantidadePosicoes,
    array $elenco
) {

    while (true) {

        echo "\n====================================\n";
        echo "          " . $nomeTime . "\n";
        echo "====================================\n";

        foreach ($time as $indice => $jogador) {

            $posicao = descobrirPosicao($jogador);

            echo ($indice + 1) . " - "
                . $jogador->getNome()
                . " | "
                . $posicao
                . " | €"
                . number_format($jogador->getValor(), 0, ',', '.')
                . "\n";
        }

        echo "\n0 - Voltar\n";

        $opcao = readline("\nEscolha um jogador: ");

        if ($opcao == 0) {
            return;
        }

        $indice = $opcao - 1;

        if (!isset($time[$indice])) {
            echo "\n❌ Jogador inválido!\n";
            continue;
        }

        $jogadorEscolhido = $time[$indice];

        echo "\nVocê escolheu: "
            . $jogadorEscolhido->getNome() . "\n";

        echo "Valor: €"
            . number_format($jogadorEscolhido->getValor(), 0, ',', '.')
            . "\n";

        echo "Posição: "
            . descobrirPosicao($jogadorEscolhido)
            . "\n";

        echo "\n1 - Contratar\n";
        echo "2 - Voltar\n";

        $confirmacao = readline("Escolha: ");

        if ($confirmacao == 1) {

            adicionarJogador(
                $jogadorEscolhido,
                $meuTime,
                $dinheiro,
                $quantidadePosicoes,
                $elenco
            );

        }
    }
}

$times = [
    "1" => [
        "nome" => "Bastard Munchen",
        "jogadores" => $Bastard
    ],

    "2" => [
        "nome" => "Paris X Gen",
        "jogadores" => $PXG
    ],

    "3" => [
        "nome" => "Ubers",
        "jogadores" => $Ubers
    ],

    "4" => [
        "nome" => "FC Barcha",
        "jogadores" => $Barcha
    ],

    "5" => [
        "nome" => "Manshine City",
        "jogadores" => $ManshineCity
    ]
];


while (count($meuTime) < 11) {           // count retorna a quantidade de elementos existentes no array.

    echo "\n\n====================================\n";
    echo "         BLUE LOCK MANAGER\n";
    echo "====================================\n";

    echo "💰 Dinheiro: €"
        . number_format($dinheiro, 0, ',', '.') . "\n";

    exibirTimeAtual($quantidadePosicoes);

    echo "\nEscolha um time:\n\n";

    foreach ($times as $numero => $time) {
        echo $numero . " - " . $time["nome"] . "\n";
    }

    echo "\n0 - Sair\n";

    $opcaoTime = readline("\nEscolha: ");

    if ($opcaoTime == 0) {
        echo "\nSaindo do jogo...\n";
        exit;
    }

    if (!isset($times[$opcaoTime])) {
        echo "\n❌ Opção inválida!\n";
        continue;
    }

    $timeEscolhido = $times[$opcaoTime];

    menuJogadores(
        $timeEscolhido["jogadores"],
        $timeEscolhido["nome"],
        $meuTime,
        $dinheiro,
        $quantidadePosicoes,
        $elenco
    );
}

echo "\n\n====================================\n";
echo "          TIME COMPLETO!\n";
echo "====================================\n";

echo "\nSeu time:\n\n";

foreach ($meuTime as $jogador) {

    echo "- "
        . $jogador->getNome()
        . " | "
        . descobrirPosicao($jogador)
        . "\n";
}

echo "\n💰 Dinheiro restante: €"
    . number_format($dinheiro, 0, ',', '.')
    . "\n";

echo "\n🏆 Você montou seu time de 11 jogadores!\n";
