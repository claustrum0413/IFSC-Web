<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$genero = "rock";

switch ($genero) {
    case "rock":
        echo "Artista recomendado: Queen.";
        break;
    case "pop":
        echo "Artista recomendado: Marino.";
        break;
    case "sertanejo":
        echo "Artista recomendado: Marília Mendonça.";
        break;
    case "samba":
        echo "Artista recomendado: Chico Buarque.";
        break;
}
?>