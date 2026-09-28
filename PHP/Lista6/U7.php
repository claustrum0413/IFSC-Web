<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$idade = 17;

if ($idade < 10) {
    echo "Filmes com classificação 'Livre para todos os públicos'.";
} elseif ($idade < 14) {
    echo "Filmes com classificação de até '12 anos'.";
} elseif ($idade < 18) {
    echo  "Filmes com classificação de até '16 anos'.";
} else {
    echo "Filmes com classificação '18 anos' (adulto).";
}

?>