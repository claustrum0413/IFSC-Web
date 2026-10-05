<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$num1 = $_GET['num1'];
$num2 = $_GET['num2'];
$total = $num1 + $num2;
echo "<p>$total</p>";
?> 