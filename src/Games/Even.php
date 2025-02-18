<?php

namespace BrainGames\Even;

use function BrainGames\Engine\runGame;

function isEven(int $num): bool
{
    return $num % 2 === 0;
}

function generateNumber(int $num): array
{
    $answer = isEven($num) ? "Yes" : "No";

    return [$num, $answer];
}

function evenGame(): void
{
    $description = 'Answer "yes" if the number is even, otherwise answer "no".';
    $question = fn() => generateNumber(rand(1, 100));

    runGame($description, $question);
}
