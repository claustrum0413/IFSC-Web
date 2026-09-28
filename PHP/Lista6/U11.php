<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$mes = 6;
$dia = 3;

if (($mes == 3 && $dia >= 21) || ($mes == 4 && $dia <= 19)) {
    echo "Seu signo é Áries";
} elseif (($mes == 4 && $dia >= 20) || ($mes == 5 && $dia <= 20)) {
    echo "Seu signo é Touro";
} elseif (($mes == 5 && $dia >= 21) || ($mes == 6 && $dia <= 20)) {
    echo "Seu signo é Gêmeos";
} elseif (($mes == 6 && $dia >= 21) || ($mes == 7 && $dia <= 22)) {
    echo "Seu signo é Câncer";
} elseif (($mes == 7 && $dia >= 23) || ($mes == 8 && $dia <= 22)) {
    echo "Seu signo é Leão";
} elseif (($mes == 8 && $dia >= 23) || ($mes == 9 && $dia <= 22)) {
    echo "Seu signo é Virgem";
} elseif (($mes == 9 && $dia >= 23) || ($mes == 10 && $dia <= 22)) {
    echo "Seu signo é Libra";
} elseif (($mes == 10 && $dia >= 23) || ($mes == 11 && $dia <= 21)) {
    echo "Seu signo é Escorpião";
} elseif (($mes == 11 && $dia >= 22) || ($mes == 12 && $dia <= 21)) {
    echo "Seu signo é Sagitário";
} elseif (($mes == 12 && $dia >= 22) || ($mes == 1 && $dia <= 19)) {
    echo "Seu signo é Capricórnio";
} elseif (($mes == 1 && $dia >= 20) || ($mes == 2 && $dia <= 18)) {
    echo "Seu signo é Aquário";
} elseif (($mes == 2 && $dia >= 19) || ($mes == 3 && $dia <= 20)) {
    echo "Seu signo é Peixes";
} else {
    echo "Data inválida!";
}
?>