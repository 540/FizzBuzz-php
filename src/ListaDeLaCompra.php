<?php

namespace Deg540\CleanCodeKata9;

class ListaDeLaCompra
{
    private array $listaDeLaCompra = [];

    public function instruccion(string $instruccion): string{
        $partes = explode(" ", $instruccion);
        $nombre = strtolower($partes[1]);
        $cantidad = $partes[2];
        if ($cantidad == null){
            $cantidad = 1;
        }
        return "$nombre x$cantidad";
    }
}