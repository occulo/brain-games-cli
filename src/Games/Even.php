<?php

namespace BrainGames\Even;

use function BrainGames\Engine\runGame;

function isEven(int $num): bool
{
    return $num % 2 === 0;
}

function getQuestionAndAnswer(int $num): array
{
    $answer = isEven($num) ? "Yes" : "No";

    return [$num, $answer];
}

function startGame(): void
{
    $description = 'Answer "yes" if the number is even, otherwise answer "no".';
    $questionAndAnswer = fn() => getQuestionAndAnswer(rand(1, 100));

    runGame($description, $questionAndAnswer);
}
