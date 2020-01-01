<?php

namespace  BrainGames\games\Even;

use function cli\line;
use function cli\prompt;
use function BrainGames\Core\run;
use const BrainGames\Core\ROUNDS;

const GAMES = 'Answer "yes" if the number is even, otherwise answer "no".';

function even()
{
    $answers = [];
    $questions = [];
    for ($i = 0; $i < ROUNDS; $i++) {
        $rand = rand(0, 100);
        $isEven = $rand % 2;
        $questions[] = $rand;
        $answers[] = $isEven ? 'no' : 'yes';
    }
    run($questions, $answers, GAMES);
}
