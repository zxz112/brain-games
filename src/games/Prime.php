<?php

namespace  BrainGames\games\Prime;

use function cli\line;
use function cli\prompt;
use function BrainGames\Core\run;

const GAMES = 'Answer "yes" if given number is prime. Otherwise answer "no"';
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
    $answer = [];
    $que = [];
    for ($i = 0; $i < 3; $i++) {
        $randNum = rand(0, 100);
        $que[] = $randNum;
        $rightAnswer = isPrime($randNum) ? 'yes' : 'no';
        $answer[] = $rightAnswer;
    }
    run($que, $answer, GAMES);
}
