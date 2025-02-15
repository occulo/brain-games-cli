<?php

namespace BrainGames\Interaction;

function showWelcomeMessage()
{
    echo "Welcome to the Brain Games!\n";
}

function getName(): string
{
    return readline("May I have your name? ");
}

function greetUser(string $name)
{
    echo "Hello, {$name}!\n";
}
