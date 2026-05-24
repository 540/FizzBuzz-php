<?php

namespace Deg540\CleanCodeKata9;

class ListaDeLaCompra
{
    private array $listaDeLaCompra = [];

    public function instruccion(string $instruccion): string{
        $partes = explode(" ", $instruccion);
        $accion = $partes[0];
        $nombre = strtolower($partes[1]);


        if($accion === "añadir"){
            $cantidad = isset($partes[2]) ? (int)$partes[2] : 1;
            $this->listaDeLaCompra[$nombre] = $cantidad;
        }
        if($accion === "eliminar"){
            unset($this->listaDeLaCompra[$nombre]);
        }


        return implode(", ", array_map(
            fn($n, $c) => "$n x$c",
            array_keys($this->listaDeLaCompra),
            $this->listaDeLaCompra
        ));
    }
}