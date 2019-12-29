<?php

namespace  BrainGames\Core;

use function cli\line;
use function cli\prompt;

function run($que, $answer, $games)
{
    line('Welcome to the Brain Game!');
    line("%s", $games);
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
    $RightAnswer = 0;
    for ($i = 0; $i < 3; $i++) {
        $answ = '';
        line('Question:%s', $que[$i]);
        $answ = prompt("Answer");
        if ($answer[$i] == $answ) {
            line('Correct');
            $RightAnswer = $RightAnswer + 1;
        } else {
                line("'%s' is wrong answer ;(. Correct answer was '%s'.", $answ, $answer[$i]);
                line("Let's try again, %s!", $name);
                break;
        }
    }
    if ($RightAnswer === 3) {
        line("Congratulations, %s!", $name);
    }
}