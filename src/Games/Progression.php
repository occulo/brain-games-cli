<?php

namespace BrainGames\Prog;

use function BrainGames\Engine\runGame;

function hideElement(array $prog): array
{
    $index = rand(0, count($prog) - 1);
    $answer = $prog[$index];
    $prog[$index] = '..';

    return [implode(' ', $prog), $answer];
}

function generateProg(int $step, int $length): array
{
    $start = rand(1, 100);
    $prog = [];

    for ($i = 1; $i < $length; $i++) {
        $prog[] = $start + $i * $step;
    }

    return hideElement($prog);
}

function progGame(): void
{
    $description = "What number is missing in the progression?";
    $question = fn() => generateProg(rand(1, 11), 10);

    runGame($description, $question);
}
