<?php declare(strict_types=1);

class ArrayUtils
{
    public static function remover(string $elemento, array &$array): void
    {
        $posicao = array_search($elemento, $array, true);
        if ($posicao) {
            unset($array[$posicao]);
        echo var_dump($array);
        } else {
            echo "Elemento não encontrado no array";
        }
    }
}