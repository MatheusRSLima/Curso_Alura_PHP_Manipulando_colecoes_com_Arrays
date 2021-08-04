<?php

require_once 'calculadora.php';

$notas = [];

$calculadora =  new Calculadora();
$media = $calculadora->calculaMedia($notas);

if ($media) {
    echo "A média é: $media";
} else {
    echo "Não foi possível calcular a média";
}
