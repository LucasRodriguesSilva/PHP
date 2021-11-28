<?php

$numero = [1,2,3];

unset ($numero[1]);

foreach ($numero as $teste){
    echo ($teste).PHP_EOL;
};