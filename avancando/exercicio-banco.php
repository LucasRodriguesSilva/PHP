<?php

function mostrar($texto){
    echo $texto .PHP_EOL;
}

function sacar($saque, $conta){
    if ($saque > $conta["saldo"]){
        mostrar("Você não pode sacar");
    } else{
        $conta["saldo"] -= $saque;
    }
    return $conta;
}

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
        "saldo" =>400
    ]
];

$contasCorrentes["12.3"] = sacar(500, $contasCorrentes["12.3"]);
$contasCorrentes["12.5"] = sacar(400, $contasCorrentes["12.5"]);
$contasCorrentes["12.4"] = sacar(400, $contasCorrentes["12.4"]);

foreach ($contasCorrentes as $cpf => $contas) {
    // metódo simples tirando "" dentro do texto
    mostrar("$cpf $contas[titular]  Saldo de  $contas[saldo]");
}

mostrar("");

    // metódo complexo usando {} nas funções
foreach ($contasCorrentes as $cpf => $contas){
    mostrar("$cpf {$contas["titular"]}  Saldo de  {$contas["saldo"]}");;
}