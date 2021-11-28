<?php

require_once "funcoes.php";

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

//add conta em $contasCorrentes
$contasCorrentes["12.7"] = [
    "titular" => "Anizio",
    "saldo" => 3000
];

//saque e deposito conta Rafael
$contasCorrentes ["12.5"] = sacar($contasCorrentes ["12.5"],400);
$contasCorrentes ["12.5"] = depositar($contasCorrentes ["12.5"],200);

//Saque conta Bruno
$contasCorrentes ["12.4"] = sacar($contasCorrentes ["12.4"],1000);

titularComLetrasMaiusculas($contasCorrentes["12.3"]);
titularComLetrasMaiusculas($contasCorrentes["12.4"]);
titularComLetrasMaiusculas($contasCorrentes["12.5"]);
titularComLetrasMaiusculas($contasCorrentes["12.7"]);

unset ($contasCorrentes["12.5"]);
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Contas Correntes</h1>

    <dl>
        <?php foreach ($contasCorrentes as $cpf => $conta) { ?>
        <dt>
            <h3><?= $conta["titular"];?> - <?= $cpf;?></h3>
        </dt>
        <dd>Saldo: <?= $conta["saldo"];?></dd>
        <?php } ?>
    </dl>
</body>
</html>
