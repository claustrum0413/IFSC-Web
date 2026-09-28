<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$temp = 20;

if ($temp < 10) {
    echo  "Está muito frio! Use roupas quentes.";
} elseif ($temp < 21) {
    echo  "Frio. Vista-se bem!";
} elseif ($temp < 26) {
    echo "Temperatura agradável.";
} elseif ($temp < 31) {
    echo "Está ficando quente!";
} else {
    echo "Está muito quente! Fique hidratado";
}
?>