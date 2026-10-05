<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$notas = [9, 10, 6, 5, 4];
$i = 1;
$total = 0;

foreach ($notas as $nota) {
    echo "<p>Notas $i: $nota</p>";
    $i += 1;
    $total += $nota;
}

$media = $total/5;
echo "<p>Média: $media</p>"
?> 