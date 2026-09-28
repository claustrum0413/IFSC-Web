<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$cotacaoDolar = 5.21;
$valorDolar = 5.90;
$valorReais = $valorDolar*$cotacaoDolar;
$resultado = str_replace(".", ",", $valorReais);

echo "Valor em reais: R$$resultado";
?>