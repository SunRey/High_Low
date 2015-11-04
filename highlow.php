<?php
    $random = rand ( 1 , 100 );
    echo "$random\n";
    echo "We gunna play a game now, you see?\nYou are going to guess a number 'tween 1 & 100\n";
    echo 'I\'m going to give you clues if ya don\'ts guess it right. You & I\'s we\'re guuna have some fun' . "\n";
    fwrite(STDOUT, 'Guess, I said! ');
    $guess = fgets(STDIN);
    if ($random != $guess) {
        fwrite(STDOUT, "Your guess {$guess} was w-r-o-n-g. \nGuess again ");
        $guess = fgets(STDIN);
    }

?>