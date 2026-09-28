<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$emocao = "triste";

switch ($emocao) {
    case "triste":
        echo  "Eu sinto muito que você esteja triste. Tente ouvir uma música que você gosta ou conversar com um amigo.";
        break;
    case "feliz":
        echo "Quem bom, Mantenha esse espírito!";
        break;
    case "nervoso":
        echo "Ta indócil?";
        break;
    case "ansioso":
        echo "Respire fundo e disperse seus pensamentos.";
        break;
}
?>