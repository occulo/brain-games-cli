<?php

namespace BrainGames\Calc;

use function BrainGames\Engine\runGame;

function getOperator(): string
{
    $operators = ['+', '-', '*'];
    return $operators[array_rand($operators)];
}

function generateQuestion(int $a, int $b): array
{
    $operator = getOperator();
    $expression = match ($operator) {
        '+' => $a + $b,
        '-' => $a - $b,
        '*' => $a * $b
    };

    return ["{$a} {$operator} {$b}", $expression];
}

function startGame(): void
{
    $description = 'What is the result of the expression?';
    $question = fn() => generateQuestion(rand(1, 100), rand(1, 100));

    runGame($description, $question);
}
