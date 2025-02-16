<?php

namespace BrainGames\Interaction;

function showMessage(string $message)
{
    echo "{$message}\n";
}

function getInput(string $input = ""): string
{
    return readline("{$input} ");
}
