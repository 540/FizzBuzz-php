<?php

namespace Deg540\CleanCodeKata9;

class FizzBuzzKata
{

    public function __construct()
    {
    }

    public function convert($number): String
    {
        if ($this->isFizzBuzz($number)) {
            return 'FizzBuzz';
        }

        if ($this->isFizz($number)) {
            return 'Fizz';
        }

        if ($this->isBuzz($number)) {
            return 'Buzz';
        }

        return $number;
    }

    private function isFizzBuzz($number): bool
    {
        return $number % 15 == 0;
    }

    public function isFizz($number): bool
    {
        return $number % 3 == 0;
    }

    public function isBuzz($number): bool
    {
        return $number % 5 == 0;
    }
}
