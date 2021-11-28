<?php

$contasCorrentes = [
    "12.3" => [
        "titular" => "Lucas",
        "saldo" => 2300
    ],
    "12.4" => [
        "titular" => "Bruno",
        "saldo" => 2300
    ],
    "12.5" => [
        "titular" => "Rafael",
        "saldo" => 1000
    ]
];

$contasCorrentes["12.7"] = [
    "titular" => "Anizio",
    "saldo" => 3000
];

echo $contasCorrentes["12.7"]["titular"].PHP_EOL;

foreach ($contasCorrentes as $cpf => $conta) {
    echo $conta["titular"].PHP_EOL;
}