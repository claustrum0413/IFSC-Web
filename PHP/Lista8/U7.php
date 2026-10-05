<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$nomes = ["Augusto", "Super Gama", "Kaelen", "Blip", "Garnax", "Vulcan", "ET BILU", "Thanos", "Orion", "Zalthor", "Rigel", "Zeno", "Groot", "Nebula", "Jor-El"];


for ($i = 1; $i <= 15; $i++) {
    $numero = $i-1;
    if ($i == 7) {
        echo "<p>O Alienígena Especial $i, $nomes[$numero], chegou!</p>";
    }
    else {
        echo "<p>Alienígena $i: $nomes[$numero]</p>";
    }
}
?> 