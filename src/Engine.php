<?php

namespace BrainGames\Engine;

use function BrainGames\Interaction\welcomeUser;
use function cli\line;
use function cli\prompt;

function runGame(string $description, callable $getQuestionAndAnswer): void
{
    $name = welcomeUser();
    line($description);

    $roundsCount = 3;

    for ($i = 0; $i < $roundsCount; $i++) {
        [$question, $correctAnswer] = $getQuestionAndAnswer();

        line("Question: {$question}");
        $userAnswer = prompt("Answer");

        if (strcasecmp($correctAnswer, $userAnswer) !== 0) {
            line("'{$userAnswer}' is the wrong answer. The correct answer was '{$correctAnswer}'.");
            line("Let's try again, {$name}!");
            return;
        }

        line("Correct!");
        continue;
    }

    line("Congratulations, {$name}!");
}
