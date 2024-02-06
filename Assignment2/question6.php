<?php

    $num = rand(1, 100);

    $guesses = [0];

    echo "WELCOME TO GUESS ME!\n";

    
    echo "LET'S PLAY THE GUESSING GAME!\n";

    while (true) {

        $guess = readline('think a number between 1 to 100. Your Guess!! ');

        if ($guess < 1 || $guess > 10) 

        {

            echo "Out OF Bounds! Please Again Enter The Number\n";
            continue;
        }

        if ($guess == $num) 

        {

            echo "You Are Correct.You Guess The Number of " . count($guesses)."\n";

            break;

        }

        $guesses[] = $guess;

        if ($guesses[count($guesses) - 2])
        {

        if (abs($num - $guess) < abs($num - $guesses[count($guesses) - 2]))
        {
            echo "Warmer\n";
        } 
        else
        {
            echo "Colder\n";
        }

        } 
        else 
        {
        if (abs($num - $guess) <= 10)
        {
            echo "Warm\n";
        }
        else 
        {
            echo "Cold\n";
        }
    }
}
?>
