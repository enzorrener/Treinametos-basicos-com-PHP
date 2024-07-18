<?php


$temperatura = null;

echo "Digite aqui a temperatura em Graus Celsius para eu converter em Fahrenheit: ";
$temperatura = readline();

$conversao = ($temperatura * 1.8) + 32;

echo "a temperatura $temperatura Celsius em fahrenheit será: $conversao";