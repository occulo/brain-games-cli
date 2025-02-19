<?php

namespace BrainGames\Engine;

use function BrainGames\Interaction\welcomeUser;

use function cli\line;
use function cli\prompt;

function runGame(string $description, callable $currentRound): void
{
    $name = welcomeUser();
    line($description);

    $gameRounds = 3;

    for ($i = 0; $i < $gameRounds; $i++) { 
        [$question, $correctAnswer] = $currentRound();

        line("Question: {$question}");
        $userAnswer = prompt("Answer");

        if (strcasecmp($correctAnswer, $userAnswer) == 0) {
            line("Correct!");
        } else {
            line("'{$userAnswer}' is the wrong answer. The correct answer was '{$correctAnswer}'.");
            line("Let's try again, {$name}!");
            return;
        }
    }

    line("Congratulations, {$name}!");
}
