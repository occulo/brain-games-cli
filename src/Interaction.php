<?php

namespace BrainGames\Interaction;

use function cli\line;
use function cli\prompt;

function welcomeUser(): string
{
    line("Welcome to the Brain Games!");
    $name = prompt("May I have your name?", false, ' ');
    line("Hello, {$name}!");

    return $name;
}