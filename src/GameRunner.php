<?php

namespace BrainGames\Runner;

use function BrainGames\Interaction\showMessage;
use function BrainGames\Interaction\getInput;

function welcomeUser(): string
{
    showMessage("Welcome to the Brain Games!");
    $name = ucfirst(getInput("May I have your name?"));
    showMessage("Hello, {$name}!");

    return $name;
}

function playRound(string $name, callable $currentRound): bool
{
    [$question, $correctAnswer] = $currentRound();

    showMessage("Question: {$question}");
    $userAnswer = ucfirst(getInput("Answer:"));

    if ($correctAnswer == $userAnswer) {
        showMessage("Correct!");
        return true;
    } else {
        showMessage("'{$userAnswer}' is the wrong answer. The correct answer was '{$correctAnswer}'.");
        showMessage("Let's try again, {$name}!");
        return false;
    }
}

function gameRun(string $description, callable $currentRound): void
{
    $name = welcomeUser();
    showMessage($description);

    $gameRounds = 3;
    $successfulRounds = 0;

    while ($successfulRounds < $gameRounds) {
        if (playRound($name, $currentRound)) {
            $successfulRounds++;
        } else {
            return;
        }
    }

    showMessage("Congratulations, {$name}!");
}
