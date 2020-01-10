<?php

namespace  BrainGames\Core;

use function cli\line;
use function cli\prompt;

const ROUNDS_COUNT = 3;

function run($questions, $answers, $descriptiom)
{
    line('Welcome to the Brain Game!');
    line("%s", $descriptiom);
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
    for ($i = 0; $i < ROUNDS_COUNT; $i++) {
        $answerUser = '';
        line('Question:%s', $questions[$i]);
        $answerUser = prompt("Answer");
        if ($answers[$i] == $answerUser) {
            line('Correct');
        } else {
            line("'%s' is wrong answer ;(. Correct answer was '%s'.", $answerUser, $answers[$i]);
            line("Let's try again, %s!", $name);
            return;
        }
    }
    line("Congratulations, %s!", $name);
}
