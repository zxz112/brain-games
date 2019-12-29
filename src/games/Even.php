<?php

namespace  BrainGames\games\Even;

use function cli\line;
use function cli\prompt;
use function BrainGames\Core\run;


const GAMES = 'Answer "yes" if the number is even, otherwise answer "no".';

function even()
{
    $answer = [];
    $que = [];
    for ($i = 0; $i < 3; $i++) {
        $rand = rand(0, 100);
        $isEven = $rand % 2;

        $que[] = $rand;
        $answer[] = $isEven ? 'no' : 'yes';
    }
    run($que, $answer, GAMES);
}
