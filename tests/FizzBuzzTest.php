<?php

require_once __DIR__ . '/../src/FizzBuzz.php';

use PHPUnit\Framework\TestCase;

class FizzBuzzTest extends TestCase
{
    public function givenOneNumberReturnsThatNumber(): void
    {
        $result = fizzBuzz(2);
        $this->assertEquals("2", $result);
    }

    public function givenNumberDivisibleBy3ReturnsFizz(): void
    {
        $result = fizzBuzz(3);
        $this->assertEquals("Fizz", $result);
    }

    public function givenNumberDivisibleBy5ReturnsBuzz(): void
    {
        $result = fizzBuzz(5);
        $this->assertEquals("Buzz", $result);
    }

    public function givenNumberDivisibleBy3And5ReturnsFizzBuzz(): void
    {
        $result = fizzBuzz(15);
        $this->assertEquals("FizzBuzz", $result);
    }


}