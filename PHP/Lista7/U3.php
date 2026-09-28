<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$musica = 1;

switch ($musica) {
    case 1:
        echo "Gênero: Rock, Música: Seek and Destroy (Metallica)";
        break;
    case 2:
        echo "Gênero: Pop, Música: Psycho (Red Velvet)";
        break;
    case 3:
        echo "Gênero: Sertanejo, Música: Evidências (Chitãozinho & Xororó)";
        break;
    case 4:
        echo "Gênero: Eletrônica, Música: Alone (Marshmello)";
        break;
}
?>