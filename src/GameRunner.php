<?php

namespace BrainGames\Runner;

use function BrainGames\Interaction\showMessage;
use function BrainGames\Interaction\getInput;

function welcomeUser()
{
    showMessage("Welcome to the Brain Games!");
    $name = ucfirst(getInput("May I have your name?"));
    showMessage("Hello, {$name}!");

    return $name;
}

function gameRun(string $description, callable $currentRound)
{
    $name = welcomeUser();
    showMessage($description);

    $gameRounds = 3;

    for ($i = 0; $i < $gameRounds; $i++) { 
        [$question, $answer] = $currentRound();

        showMessage("Question: {$question}");
        $userAnswer = ucfirst(getInput("Answer:"));

        if ($answer === $userAnswer) {
            showMessage("Correct!");
        } else {
            showMessage("'{$userAnswer}' is the wrong answer. The correct answer was '{$answer}'.");
            showMessage("Let's try again, {$name}!");
            return;
        }
    }

    showMessage("Congratulations, {$name}!");
}
