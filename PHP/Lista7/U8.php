<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$nota = 6;

switch ($nota) {
    case 10:
        echo "Excelente!";
        break;
    case 9:
    case 8:
        echo "Muito bom!";
        break;
    case 7:
    case 6:
        echo "Bom, mas pode melhorar.";
        break;
    default:
        echo "Reprovado.";
        break;
}
?>