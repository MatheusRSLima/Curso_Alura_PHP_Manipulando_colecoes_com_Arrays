<?php

require_once 'ArrayUtils.php';

$correntistas_e_compras = [
    "Giovanni",
    "João",
    12,
    "Maria",
    25,
    "Luis",
    "Luisa",
    "12",
    "Rafael",
];

/* echo "<pre>";

var_dump($correntistas_e_compras);
 */
ArrayUtils::remover('Giovanni', $correntistas_e_compras);
/* 
var_dump($correntistas_e_compras);

echo "</pre>"; */