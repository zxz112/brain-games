<?php

namespace  BrainGames\games\Gcd;

use function cli\line;
use function cli\prompt;
use function BrainGames\Core\run;

const GAMES = 'Find the greatest common divisor of given numbers.';

function delit($rand1)
{
    $res = [];
    $del = 1;
    while ($rand1 != $del) {
        if ($rand1 % $del == 0) {
            $res[] = $del;
        }
        $del = $del + 1;
    }
    $res[] = $rand1;
    return $res;
}

function obshi($rand1, $rand2)
{
    $res1 = delit($rand1);
    $res2 = delit($rand2);
    $result = array_uintersect($res1, $res2, "strcasecmp");
    return max($result);
}

function gcd()
{
    $answer = [];
    $que = [];
    
    for ($i = 0; $i < 3; $i++) {
        $rand1 = rand(0, 100);
        $rand2 = rand(0, 100);
        $que[] = "{$rand1} {$rand2}";
        $answer[] = obshi($rand1, $rand2);
    }
    run($que, $answer, GAMES);
}
