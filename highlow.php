<?php
    echo "We gunna play a game now, you see?\nYou going to guess a number 'tween 1 and-uh hundred\n";
    echo 'I\'m going to give you clues if ya don\'ts guess right. You & I\'s we\'re guuna have some fun' . "\n";

    $random = mt_rand ( 1 , 100 );
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