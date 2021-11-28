<?php

$idades = [10,11,12,13,14,15,16];
$alunos = array("Lucas","Bruno","Rafael");

for ($i = 0; $i < count($idades); $i++ ){
    echo $idades[$i].PHP_EOL;
}

for ($indice = 0; $indice < count($alunos); $indice++){
    echo "Aluno $alunos[$indice]".PHP_EOL;
}