<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$peso = 55;
$altura = 1.65;
$imc = $peso/$altura/$altura;

switch ($imc) {
    case ($imc < 18.5):
        echo "Abaixo do peso";
        break;
    case ($imc <= 24.9):
        echo "Peso normal";
        break;
    case ($imc <= 29.9):
        echo "Sobrepeso";
        break;
    default:
        echo "Obesidade";
        break;
}
?>