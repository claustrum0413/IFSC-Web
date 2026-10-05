<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$bateria = 100;
$movimento = 0;

while ($bateria > 0) {
    echo "<p>Movimento $movimento: $bateria% de bateria</p>";
    $movimento++;
    $bateria = 100 - $movimento*20;
}

echo "<p>A bateria acabou...</p>";
?> 