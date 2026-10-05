<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

for ($i = 1; $i <= 20; $i++) {
    if ($i == 15) {
        echo "Coordenadas 15: Tesouro encontrado!";
    }
    else {
        echo "<p>Coordenadas: $i</p>";
    }
}
?> 