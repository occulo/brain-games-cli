<?php

namespace BrainGames\Calc;

use function BrainGames\Engine\runGame;

function getOperator(): string
{
    $operators = ['+', '-', '*'];
    return $operators[array_rand($operators)];
}

function getQuestionAndAnswer(int $a, int $b): array
{
    $operator = getOperator();
    $expression = match ($operator) {
        '+' => $a + $b,
        '-' => $a - $b,
        '*' => $a * $b,
        default => null
    };

    return ["{$a} {$operator} {$b}", $expression];
}

function startGame(): void
{
    $description = 'What is the result of the expression?';
    $questionAndAnswer = fn() => getQuestionAndAnswer(rand(1, 100), rand(1, 100));

    runGame($description, $questionAndAnswer);
}
