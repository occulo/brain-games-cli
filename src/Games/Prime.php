<?php

namespace BrainGames\Prime;

use function BrainGames\Engine\runGame;

function isPrime(int $num): bool
{
    if ($num <= 1) {
        return false;
    }

    for ($i = 2; $i <= sqrt($num); $i++) {
        if ($num % $i == 0) {
            return false;
        }
    }

    return true;
}

function generateNumber(int $num): array
{
    $answer = isPrime($num) ? "Yes" : "No";

    return [$num, $answer];
}

function primeGame(): void
{
    $description = 'Answer "yes" if given number is prime. Otherwise answer "no".';
    $question = fn() => generateNumber(rand(1, 100));

    runGame($description, $question);
}
