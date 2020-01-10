<?php

namespace  BrainGames\games\Gcd;

use function BrainGames\Core\run;
use const BrainGames\Core\ROUNDS_COUNT;

const DESCRIPTION = 'Find the greatest common divisor of given numbers.';

function findDivisors($num)
{
    $divisors = [];
    $i = 1;
    while ($num != $i) {
        if ($num % $i == 0) {
            $divisors[] = $i;
        }
        $i = $i + 1;
    }
    $divisors[] = $num;
    return $divisors;
}

function findGcd($num1, $num2)
{
    $divisors1 = findDivisors($num1);
    $divisors2 = findDivisors($num2);
    $result = array_uintersect($divisors1, $divisors2, "strcasecmp");
    return max($result);
}

function gcd()
{
    $answers = [];
    $questions = [];
    for ($i = 0; $i < ROUNDS_COUNT; $i++) {
        $num1 = rand(0, 100);
        $num2 = rand(0, 100);
        $questions[] = "{$num1} {$num2}";
        $answers[] = findGcd($num1, $num2);
    }
    run($questions, $answers, DESCRIPTION);
}