<?php

function entrada(){
    return fgets(STDIN);
}

echo "Qual é o seu nome?".PHP_EOL;

$resultado = entrada();

echo $resultado;