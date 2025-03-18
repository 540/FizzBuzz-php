<?php

namespace Deg540\CleanCodeKata9\Test;

use Deg540\CleanCodeKata9\FizzBuzzKata;
use PHPUnit\Framework\TestCase;

class FizzBuzzKataTest extends TestCase
{
    private FizzBuzzKata $fizzBuzz;

    protected function setUp(): void
    {
        parent::setUp();

        $this->fizzBuzz = new FizzBuzzKata();
    }

    /**
     * @test
     */
    public function givenMultipleOfFizzNumberAndBuzzNumberReturnFizzBuzz()
    {
        $result = $this->fizzBuzz->convert(30);

        $this->assertEquals('FizzBuzz', $result);
    }

    /**
     * @test
     */
    public function givenMultipleOfFizzNumberReturnFizz(): void
    {
        $result = $this->fizzBuzz->convert(3);

        $this->assertEquals('Fizz', $result);
    }


    /**
     * @test
     */
    public function givenMultipleOfBuzzNumberReturnBuzz()
    {
        $result = $this->fizzBuzz->convert(5);

        $this->assertEquals('Buzz', $result);
    }


    /**
     * @test
     */
    public function noFizzBuzzReturnsNumber()
    {
        $result = $this->fizzBuzz->convert(7);

        $this->assertEquals(7, $result);
    }


}
