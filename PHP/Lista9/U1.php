<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$inventario = ["Ferrão", "Poção de Mana", "Agulha", "Machado de Guerra", "Rapieria", "Cajado", "Manoplas", "Poção de Escudo", "Taco de Beisebol"];

foreach ($inventario as $item) {
    echo "<p>$item</p>";
}
?> 