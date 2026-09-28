<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$horario = 22;

switch ($horario) {
    case ($horario <= 4):
        echo "São $horario horas, boa madrugada!";
        break;
    case ($horario <= 11):
        echo "São $horario horas, bom dia!";
        break;
    case ($horario <= 17):
        echo "São $horario horas, boa tarde!";
        break;
    case ($horario <= 21):
        echo "São $horario horas, boa noite!";
        break;
    default:
        echo "São $horario horas, boa madrugada!";
        break;
}
?>