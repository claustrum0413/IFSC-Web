<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$planetas = ["New France" => "Rochoso", "Flea Burguer" => "Gasoso", "Big Gama" => "Gasoso", "Neomachado" => "Rochoso", "Plutão Maior" => "Rochoso"];

foreach ($planetas as $nome => $tipo) {
    echo "<p>$nome: $tipo</p>";
}
?> 