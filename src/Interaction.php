<?php

namespace BrainGames\Interaction;

function showMessage(string $message): void
{
    echo "{$message}\n";
}

function getInput(string $prompt = ""): string
{
    return readline("{$prompt} ");
}
