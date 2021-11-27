<?php

$idade = 16;
$numeroDePessoas = 2;

echo "Você só pode entrar, se tiver mais de 18 anos ou ";
echo "a partir de 16 ano acompanhado".PHP_EOL;

if ($idade >= 18) {
    echo "Você tem $idade anos, pode entrar sozinho";
}
else if ($idade >= 16 && $numeroDePessoas > 1){
    echo "Você tem $idade anos e esta acompanhado(a), então pode entrar";
}
else {
    echo "Você só tem $idade anos você não pode entrar";
}
echo PHP_EOL;
echo "fim";