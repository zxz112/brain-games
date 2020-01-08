<?php

namespace  BrainGames\games\Even;

use function cli\line;
use function cli\prompt;
use function BrainGames\Core\run;

use const BrainGames\Core\ROUNDS;

const GAMES = 'Answer "yes" if the number is even, otherwise answer "no".';

function isEven($num)
{
    if ($num % 2 == 0) {
        return 'yes';
    }
    return 'no';
}

function even()
{
    $answers = [];
    $questions = [];
    for ($i = 0; $i < ROUNDS; $i++) {
        $rand = rand(0, 100);
        $questions[] = $rand;
        $answers[] = isEven($rand);
    }
    run($questions, $answers, GAMES);
}
