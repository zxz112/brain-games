<?php

namespace  BrainGames\Even;

use function cli\line;
use function cli\prompt;

function even()
{
    line('Welcome to the Brain Game!');
    line('Answer "yes" if the number is even, otherwise answer "no".');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
    for ($i = 0; $i < 3; $i++) {
        $n = rand(0, 100);
        line('Question:%s', $n);
        $answer = prompt('Your answer');
        $res = $n % 2;
        $isEven = $res ? 'no' : 'yes';
        if ($answer === $isEven) {
            line('Correct');
        } else {
            line('%s is wrong answer ;(. Correct answer was %s.', $answer, $isEven);
            line('Let\'s try again, %s!', $name);
            break;
        }
    }
}
