<?php

namespace BrainGames\Calc;

use function BrainGames\Engine\runGame;

function generateExpression(int $a, int $b): array
{
    $operators = [
        fn($x, $y) => ["{$x} + {$y}", $x + $y],
        fn($x, $y) => ["{$x} - {$y}", $x - $y],
        fn($x, $y) => ["{$x} * {$y}", $x * $y]
    ];

    $index = rand(0, count($operators) - 1);

    return $operators[$index]($a, $b);
}

function calcGame(): void
{
    $description = "What is the result of the expression?";
    $question = fn() => generateExpression(rand(1, 100), rand(1, 100));

    runGame($description, $question);
}
