<?php

namespace Deg540\CleanCodeKata9\Test;

use Deg540\CleanCodeKata9\ListaDeLaCompra;
use PHPUnit\Framework\TestCase;

class ListaDeLaCompraTest extends TestCase
{
    /**
     * @test
     */
    public function anadirProductoDevuelveUno()
    {
        $lista = new ListaDeLaCompra();

        $res = $lista->instruccion("añadir pan");

        $this->assertEquals("pan x1", $res);
    }

    /**
     * @test
     */
    public function anadirProductoConCantidadDevuelveCantidad(){
        $lista = new ListaDeLaCompra();

        $res = $lista->instruccion("añadir pan 3");

        $this->assertEquals("pan x3", $res);

    }

    /**
     * @test
     */
    public function anadirConMayusculaNoInfluye()
    {
        $lista = new ListaDeLaCompra();

        $res = $lista->instruccion("añadir Pan 3");

        $this->assertEquals("pan x3", $res);
    }

    /**
     * @test
     */
    public function eliminarProductoLoBorraDeLaLista()
    {
        $lista = new ListaDeLaCompra();
        $lista->instruccion("añadir pan");
        $res = $lista->instruccion("eliminar pan");

        $this->assertEquals("", $res);

    }

    /**
     * @test
     */
    public function eliminarProductoNoExistenteDevuelveAviso()
    {
        $lista = new ListaDeLaCompra();
        $lista->instruccion("añadir leche");
        $res = $lista->instruccion("eliminar pan");

        $this->assertEquals("El producto seleccionado no existe", $res);

    }

    /**
     * @test
     */
    public function vaciarCarritoCuandoInstruccionEsEliminar()
    {
        $lista = new ListaDeLaCompra();
        $lista->instruccion("añadir leche");
        $lista->instruccion("añadir Pan 3");
        $res = $lista->instruccion("vaciar");

        $this->assertEquals("", $res);

    }


}
