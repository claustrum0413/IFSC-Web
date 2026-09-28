<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$idade = 17;

switch ($idade) {
    case ($idade < 13):
        echo "Criança";
        break;
    case ($idade < 18):
        echo "Adolescente";
        break;
    case ($idade < 65):
        echo "Adulto";
        break;
    default:
        echo "Idoso";
        break;
}
?>