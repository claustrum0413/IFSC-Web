<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$produtos = ["Ayahuasca" => 100, "Iphone 1954 Pro Max Ultra Mega Omega Deluxe" => 5000, "Mousepad" => 20, "X-Tudo" => 36, "Maça" => 10, "Tomate Salgado" => 99];

foreach ($produtos as $nome => $preco) {
    $desconto = ($preco)-($preco*20/100);
    echo "<p>$nome:</p>";
    echo "<p>Preço Original: R$$preco</p>";
    echo "<p>Preço com Desconto: R$$desconto</p>";
}
?> 