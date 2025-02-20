<?php

namespace BrainGames\GCD;

use function BrainGames\Engine\runGame;

function calculateGCD(int $a, int $b): int
{
    while ($b !== 0) {
        $temp = $a % $b;
        $a = $b;
        $b = $temp;
    }

    return $a;
}

function getRound(int $a, int $b): array
{
    $gcd = calculateGCD($a, $b);

    return ["{$a} {$b}", $gcd];
}

function startGame(): void
{
    $description = 'Find the greatest common divisor of given numbers.';
    $questionAndAnswer = fn() => getRound(rand(1, 100), rand(1, 100));

    runGame($description, $questionAndAnswer);
}
