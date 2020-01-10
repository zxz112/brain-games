<?php

namespace  BrainGames\games\Calc;

use function BrainGames\Core\run;
use const BrainGames\Core\ROUNDS_COUNT;

const DESCRIPTION = 'What is the result of the expression?';
const MATH_SYMBOLS = ['*', '+', '-'];

function calc()
{
    $answers = [];
    $questions = [];
    for ($i = 0; $i < ROUNDS_COUNT; $i++) {
        $num1 = rand(0, 100);
        $num2 = rand(0, 100);
        $symbolKey = array_rand(MATH_SYMBOLS);
        $symbol = MATH_SYMBOLS[$symbolKey];
        $questions[] = "{$num1}{$symbol}{$num2}";
        switch ($symbol) {
            case '-':
                $answers[] = $num1 - $num2;
                break;
            case '+':
                $answers[] = $num1 + $num2;
                break;
            case '*':
                $answers[] = $num1 * $num2;
                break;
        }
    }
    run($questions, $answers, DESCRIPTION);
}
