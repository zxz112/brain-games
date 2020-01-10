<?php

namespace  BrainGames\games\Progression;

use function BrainGames\Core\run;

use const BrainGames\Core\ROUNDS_COUNT;

const DESCRIPTION = 'What number is missing in the progression?';
const LENGTH_PROGRESSION = 10;

function makeProgression($beginProgress, $diffProgression)
{
    $progression = [];
    $temp = $beginProgress;
    for ($i = 0; $i < LENGTH_PROGRESSION; $i++) {
        $temp = $temp + $diffProgression;
        $progression[$i] = $temp;
    }
    return $progression;
}

function progression()
{
    $answers = [];
    $questions = [];
    for ($i = 0; $i < ROUNDS_COUNT; $i++) {
        $beginProgress = rand(0, 100);
        $diffProgression = rand(1, 10);
        $randPosition = rand(0, LENGTH_PROGRESSION - 1);
        $progression = makeProgression($beginProgress, $diffProgression);
        $answers[] = $progression[$randPosition];
        $progression[$randPosition] = '..';
        $questions[] = implode($progression, ' ');
    }
    run($questions, $answers, DESCRIPTION);
}
