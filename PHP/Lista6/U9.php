<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

enum Poder: string {
    case Forca = 'força';
    case Velocidade = 'velocidade';
    case Voo = 'voo';
}

$superpoder = Poder::Velocidade;

if ($superpoder == 'força') {
    echo "Você seria o Hulk!";
} elseif ($superpoder == 'velocidade') {
    echo "Você seria o Flash!";
} else {
    echo "Você seria o Superman!";
}

?>