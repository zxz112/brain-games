<?php

namespace  BrainGames\games\Calc;

use function cli\line;
use function cli\prompt;
use function BrainGames\Core\run;

const GAMES = 'What is the result of the expression?';

function calc() 
{
    $mathSymbol = ['*', '+', '-'];
    $answer = [];
    $que = [];
    for ($i = 0; $i < 3; $i++) {
        $rand1 = rand(0, 100);
        $rand2 = rand(0, 100);
        $symbolKey = array_rand($mathSymbol);
        $symbol = $mathSymbol[$symbolKey];
        $que[] = "{$rand1}{$symbol}{$rand2}";
        if ($symbol == '-') {
            $answer[] = $rand1 - $rand2;
        } elseif ($symbol == '+') {
            $answer[] = $rand1 + $rand2;
        } else {
            $answer[] = $rand1 * $rand2;
        }
    }
    run($que, $answer, GAMES);
}
