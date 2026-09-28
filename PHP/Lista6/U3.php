<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$desconto = 20;
$valorOriginal = 10;
$valorDesconto = $valorOriginal*$desconto/100;
$valorFinal = $valorOriginal-$valorDesconto;

echo "Valor original: R$$valorOriginal, Valor do desconto: R$$valorDesconto, Valor final: R$$valorFinal";
?>