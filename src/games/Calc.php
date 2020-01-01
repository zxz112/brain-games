<?php

namespace  BrainGames\games\Calc;

use function cli\line;
use function cli\prompt;
use function BrainGames\Core\run;
use const BrainGames\Core\ROUNDS;

const GAMES = 'What is the result of the expression?';

function calc()
{
    $mathSymbol = ['*', '+', '-'];
    $answers = [];
    $questions = [];
    for ($i = 0; $i < ROUNDS; $i++) {
        $rand1 = rand(0, 100);
        $rand2 = rand(0, 100);
        $symbolKey = array_rand($mathSymbol);
        $symbol = $mathSymbol[$symbolKey];
        $questions[] = "{$rand1}{$symbol}{$rand2}";
        if ($symbol == '-') {
            $answers[] = $rand1 - $rand2;
        } elseif ($symbol == '+') {
            $answers[] = $rand1 + $rand2;
        } else {
            $answers[] = $rand1 * $rand2;
        }
    }
    run($questions, $answers, GAMES);
}
