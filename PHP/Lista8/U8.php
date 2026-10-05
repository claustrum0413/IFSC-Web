<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$nomes = ["Augusto", "Super Gama", "Kaelen", "Blip", "Garnax", "Vulcan", "ET BILU", "Thanos", "Orion", "Zalthor", "Rigel", "Zeno", "Groot", "Nebula", "Jor-El"];


for ($i = 1; $i <= 13; $i++) {
    if ($i%2 == 0) {
        echo "<p>Amostra $i: Vida encontrada.</p>";
    }
    else {echo "<p>Amostra $i: Vida não encontrada.</p>";}
}
?> 