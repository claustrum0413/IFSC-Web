<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$galaxias = ["Omega David" => 300000, "Milk Pereira" => 28000, "Gold Czar" => 550000];

foreach ($galaxias as $nome => $distancia) {
    echo "<p>$nome está a $distancia anos-luz de distância!</p>";
}
?> 