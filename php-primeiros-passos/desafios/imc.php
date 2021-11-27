<?php

$nome = "Lucas";
$peso = 64;
$altura = 1.70;

$imc = $peso / $altura ** 2;

echo "$nome o seu IMC é ".round($imc)." e você está ";

if ($imc < 18.5){
    echo "abaixo do Peso";
}
elseif ($imc >= 18.5 && $imc <= 24.9){
    echo "com o peso Normal";
}
elseif ($imc >= 25 && $imc <= 29.9){
    echo "sobrepeso";
}
elseif ($imc >= 30 && $imc <=34.9){
    echo "com obesidade Grau I";
}
elseif ($imc >= 35 && $imc <= 39.9){
    echo "com obesidade Grau II";
}
else{
    echo "com Obesidade Grau III ou Mórbida";
}