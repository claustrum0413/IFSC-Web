<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$nome = $_GET['nome'];
echo "<p>Olá, $nome! Seja bem-vindo!</p>"
?> 