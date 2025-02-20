<?php

namespace BrainGames\Progression;

use function BrainGames\Engine\runGame;

function hideElement(array $progression): array
{
    $index = rand(0, count($progression) - 1);
    $answer = $progression[$index];
    $progression[$index] = '..';

    return [implode(' ', $progression), $answer];
}

function getRound(int $step, int $length): array
{
    $start = rand(1, 100);
    $progression = [];

    for ($i = 1; $i < $length; $i++) {
        $progression[] = $start + $i * $step;
    }

    return hideElement($progression);
}

function startGame(): void
{
    $description = 'What number is missing in the progression?';
    $questionAndAnswer = fn() => getRound(rand(1, 11), 10);

    runGame($description, $questionAndAnswer);
}
