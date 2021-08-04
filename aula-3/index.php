<?php 

$nomes = 'Giovanni, João, Maria, Pedro';

$array_nomes = explode(", ", $nomes);

foreach ($array_nomes as $nome) {
    echo "<p>Olá $nome</p>";
}

$nomes_juntos = implode(", ", $array_nomes);

echo "<p>Os nomes sao $nomes_juntos</p>";