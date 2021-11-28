<?php

$conta1 = [
    "titular" => "Lucas",
    "saldo" => 2300
];

$conta2 = [
    "titular" => "Bruno",
    "saldo" => 2300
];

$conta3 = [
    "titular" => "Rafael",
    "saldo" => 1000
];

$contasCorrentes = [$conta1, $conta2, $conta3];

for($i = 0; $i < count($contasCorrentes); $i++){
    echo $contasCorrentes[$i]["titular"].PHP_EOL;
}