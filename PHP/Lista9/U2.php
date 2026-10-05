<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$pontos = [20, 50, 120, 250, 500, 1000, 2500, 5000, 10000, 300000];
$total = 0;

for ($i = 1; $i <= 10; $i++) {
    $total += $pontos[$i-1];    
    echo "<p>Nível $i:</p><p>Pontuação Total: $total</p>";
}
?> 