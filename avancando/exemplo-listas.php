<?php

$idades = [1,2,3,4,5];

$lucas = $idades[1];
$lucas = 2;

list(,,$Lucas) = $idades;
[,$Lucas] = $idades;

echo $lucas;
echo PHP_EOL;
echo $Lucas;