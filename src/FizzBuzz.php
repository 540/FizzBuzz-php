<?php

namespace Deg540\CleanCodeKata9;

class FizzBuzz
{
    public function calculate(int $numberToBeConvented): string
    {
        if ($numberToBeConvented % 15 == 0){
            return 'fizzbuzz';
        }

        if ($numberToBeConvented % 3 == 0) {
            return 'fizz';
        }

        if ($numberToBeConvented % 5 == 0) {
            return 'buzz';
        }

        return strval($numberToBeConvented);
    }
}
