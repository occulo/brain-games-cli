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

function generatePair(int $a, int $b): array
{
    $gcd = calculateGCD($a, $b);

    return ["{$a} {$b}", $gcd];
}

function gcdGame(): void
{
    $description = 'Find the greatest common divisor of given numbers.';
    $question = fn() => generatePair(rand(1, 100), rand(1, 100));

    runGame($description, $question);
}
