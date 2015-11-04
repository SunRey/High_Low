<?php
    if ($argc < 3) {
        die("You shall not pass!!..now die\n");
    } elseif ( !is_numeric($argv[1]) || !is_numeric($argv[2]) ) {
        die("You don't do the numberic dance, do you?\n");
    }

    echo "We gunna play a game now, you see?\nYou going to guess a number 'tween {$argv[1]} and {argv[2]}\n";
    echo 'I\'m going to give you clues if ya don\'ts guess right. You & I\'s we\'re guuna have some fun' . "\n";

    $random = mt_rand ( $argv[1] , $argv[2] );
    echo "$random\n";

    do {

        fwrite(STDOUT, 'Guess, I said! ');
        $guess = trim(fgets(STDIN));
        
        if ($random > $guess) {
            fwrite(STDOUT, "Your guess {$guess} was too LOW.\n ");
        } else if ($random < $guess) {
            fwrite(STDOUT, "Your guess {$guess} was too HIGH.\n");
        } else if ($random == $guess) {
            fwrite(STDOUT, "{$guess}, you are CORRECT\n");
        }

    } while ($guess != $random);
    


?>