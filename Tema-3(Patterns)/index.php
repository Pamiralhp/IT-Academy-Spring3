<?php
require_once('Tigger.php');

$tigger1 = Tigger::getInstance();
$tigger1->roar();

// Prueba de instanciar otro Tigger 
$tigger2 = Tigger::getInstance();
$tigger2->roar();

// Cantidad de rugidos de Tigger
echo "El número de rugidos de Tigger es: " . $tigger1->getCounter() . PHP_EOL;
?>