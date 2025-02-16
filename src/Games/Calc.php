<?php

namespace BrainGames\Calc;

use function BrainGames\Interaction\showMessage;
use function BrainGames\Runner\gameRun;

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

    gameRun($description, $question);
}
