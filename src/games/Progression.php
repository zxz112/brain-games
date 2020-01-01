<?php

namespace  BrainGames\games\Progression;

use function cli\line;
use function cli\prompt;
use function BrainGames\Core\run;

use const BrainGames\Core\ROUNDS;

const GAMES = 'What number is missing in the progression?';
function makeProgression($beginProgress, $progression)
{
    $arrProg = [];
    $temp = $beginProgress;
    for ($i = 0; $i < 10; $i++) {
        $temp = $temp + $progression;
        $arrProg[$i] = $temp;
    }
    return $arrProg;
}

function progression()
{
    $answers = [];
    $questions = [];
    for ($i = 0; $i < ROUNDS; $i++) {
        $beginProgress = rand(0, 100);
        $progression = rand(1, 10);
        $randPosition = rand(0, 9);
        $arrProg = makeProgression($beginProgress, $progression);
        $answers[] = $arrProg[$randPosition];
        $arrProg[$randPosition] = '..';
        $questions[] = implode($arrProg, ' ');
    }
    run($questions, $answers, GAMES);
}
