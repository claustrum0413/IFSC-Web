<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

enum Escolha: string {
    case Pedra = 'pedra';
    case Tesoura = 'tesoura';
    case Papel = 'papel';
}

$jogador1 = Escolha::Tesoura;
$jogador2 = Escolha::Papel;

if ($jogador1 == $jogador2) {
    echo "Empate!";
} 

elseif (($jogador1 == "pedra" && $jogador2 == "tesoura") || 
         ($jogador1 == "tesoura" && $jogador2 == "papel") || 
         ($jogador1 == "papel" && $jogador2 == "pedra")) {
    echo "Jogador 1 venceu!";
} 

else {
    echo "Jogador 2 venceu!";
}
?>