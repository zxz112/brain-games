<?php

namespace  BrainGames\games\Prime;

use function BrainGames\Core\run;
use const BrainGames\Core\ROUNDS_COUNT;

const DESCRIPTION = 'Answer "yes" if given number is prime. Otherwise answer "no"';

function isPrime($num)
{
    if ($num <= 1) {
        return false;
    }
    for ($i = 2; $i <= floor($num / 2); $i++) {
        if ($num % $i == 0) {
            return false;
        }
    }
    return true;
}

function prime()
{
    $answers = [];
    $questions = [];
    for ($i = 0; $i < ROUNDS_COUNT; $i++) {
        $randNum = rand(0, 100);
        $questions[] = $randNum;
        $rightAnswer = isPrime($randNum) ? 'yes' : 'no';
        $answers[] = $rightAnswer;
    }
    run($questions, $answers, DESCRIPTION);
}
