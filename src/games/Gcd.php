<?php

namespace  BrainGames\games\Gcd;

use function cli\line;
use function cli\prompt;
use function BrainGames\Core\run;
use const BrainGames\Core\ROUNDS;

const GAMES = 'Find the greatest common divisor of given numbers.';

function findDivisors($rand)
{
    $divisors = [];
    $i = 1;
    while ($rand != $i) {
        if ($rand % $i == 0) {
            $divisors[] = $i;
        }
        $i = $i + 1;
    }
    $divisors[] = $rand;
    return $divisors;
}

function findGcd($rand1, $rand2)
{
    $divisors1 = findDivisors($rand1);
    $divisors2 = findDivisors($rand2);
    $result = array_uintersect($divisors1, $divisors2, "strcasecmp");
    return max($result);
}

function gcd()
{
    $answers = [];
    $questions = [];
    
    for ($i = 0; $i < ROUNDS; $i++) {
        $rand1 = rand(0, 100);
        $rand2 = rand(0, 100);
        $questions[] = "{$rand1} {$rand2}";
        $answers[] = findGcd($rand1, $rand2);
    }
    run($questions, $answers, GAMES);
}
