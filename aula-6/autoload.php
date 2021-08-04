<?php

spl_autoload_register(
    function (string $namesapceClasse): void {
        $caminho = "/src";
        $diretorio_classe = str_replace("\\", DIRECTORY_SEPARATOR, $namesapceClasse );
        @include_once getcwd() . $caminho . DIRECTORY_SEPARATOR . "($diretorio_classe).php";
    }
);