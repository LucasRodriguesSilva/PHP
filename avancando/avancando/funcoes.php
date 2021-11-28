<?php

function exibeMensagem($mensagem)
{
    echo $mensagem.PHP_EOL;
}

function sacar(array $conta, float $valorASacar) : array
{
    if ($valorASacar <= $conta["saldo"]){
        $conta["saldo"] -= $valorASacar;
    } else {
        exibeMensagem("Você não pode sacar");
    }
    return $conta;
}

function depositar(array $conta, float $valorADepositar) : array
{
    if($valorADepositar > 0) {
        $conta["saldo"] += $valorADepositar;
    }else{
        exibeMensagem("Só pode inserir valor positivo");
    }
    return $conta;
}

//usa & em $conta para acessar diretamente sem cópiar
function titularComLetrasMaiusculas(array &$conta){
    $conta["titular"] = mb_strtoupper($conta["titular"]);
}

function exibeConta( array $conta){
    ["titular" => $titular, "saldo" => $saldo] = $conta;
    echo "<ul><li>$titular $saldo</li></ul>";
}