<?php

namespace  BrainGames\games\Calc;

use function cli\line;
use function cli\prompt;
use function BrainGames\Core\run;

use const BrainGames\Core\ROUNDS;

const GAMES = 'What is the result of the expression?';
const MATH_SYMBOLS = ['*', '+', '-'];

function calc()
{
    $answers = [];
    $questions = [];
    for ($i = 0; $i < ROUNDS; $i++) {
        $rand1 = rand(0, 100);
        $rand2 = rand(0, 100);
        $symbolKey = array_rand(MATH_SYMBOLS);
        $symbol = MATH_SYMBOLS[$symbolKey];
        $questions[] = "{$rand1}{$symbol}{$rand2}";
        switch ($symbol) {
            case '-':
                $answers[] = $rand1 - $rand2;
                break;
            case '+':
                $answers[] = $rand1 + $rand2;
                break;
            case '*':
                $answers[] = $rand1 * $rand2;
                break;
        }
    }
    run($questions, $answers, GAMES);
}
