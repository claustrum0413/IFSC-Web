<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$num1 = 15;
$num2 = 20;
$operacao = 3;

switch ($operacao) {
    case 1:
        $resultado = $num1+$num2;
        echo "$resultado";
        break;
    case 2:
        $resultado = $num1-$num2;
        echo "$resultado";
        break;
    case 3:
        $resultado = $num1*$num2;
        echo "$resultado";
        break;
    case 4:
        $resultado = $num1/$num2;
        echo "$resultado";
        break;
}
?>