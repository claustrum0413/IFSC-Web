<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$produtos = ["Ayahuasca" => 3, "Iphone 1954 Pro Max Ultra Mega Omega Deluxe" => 5, "Mousepad" => 12, "X-Tudo" => 6, "Maça" => 66, "Tomate Salgado" => 9];

foreach ($produtos as $nome => $estoque) {
    if ($estoque > 4) {
        echo "<p>$nome: $estoque em estoque</p>";
    }
}
?> 