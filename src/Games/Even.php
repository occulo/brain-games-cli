<?php

namespace BrainGames\Even;

use function BrainGames\Interaction\showMessage;
use function BrainGames\Runner\gameRun;

function isEven(int $num): bool
{
    if ($num % 2 === 0) {
        return true;
    }

    return false;
}

function evenGame()
{
    $description = "Answer 'Yes' if the number is even, otherwise answer 'No'.";

    gameRun($description, function() {
        $num = rand(1, 99);
        $answer = (isEven($num)) ? "Yes" : "No";
    
        return [$num, $answer];
    });
}
