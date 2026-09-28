<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$clima = "chuvoso";

switch ($clima) {
    case "chuvoso":
        echo "Leve um guarda-chuva!";
        break;
    case "ensolarado":
        echo "Passe protetor solar!";
        break;
    case "nublado":
        echo "Aproveite esse belo dia!";
        break;
    case "tempestade":
        echo "Procure abrigo!";
        break;
    case "nevando":
        echo "Vista roupas quentes!";
}
?>