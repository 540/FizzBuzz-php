<?php

namespace Deg540\CleanCodeKata9;

class ListaDeLaCompra
{
    private array $listaDeLaCompra = [];

    public function instruccion(string $instruccion): string{
        $partes = explode(" ", $instruccion);
        $nombre = $partes[1];
        $cantidad = $partes[2];
        return "$nombre x$cantidad";
    }
}