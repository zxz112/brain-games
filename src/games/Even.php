<?php

namespace  BrainGames\games\Even;

use function BrainGames\Core\run;

use const BrainGames\Core\ROUNDS_COUNT;

const DESCRIPTION = 'Answer "yes" if the number is even, otherwise answer "no".';

function isEven($num)
{
    return ($num % 2 == 0);
}

function even()
{
    $answers = [];
    $questions = [];
    for ($i = 0; $i < ROUNDS_COUNT; $i++) {
        $question = rand(0, 100);
        $questions[] = $question;
        $answers[] = isEven($question) ? 'yes' : 'no';
    }
    run($questions, $answers, DESCRIPTION);
}
