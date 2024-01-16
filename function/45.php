<?php

function generateRandomNumber($min, $max) {

    if ($min > $max) {
        list($min, $max) = array($max, $min);
    }

    return mt_rand($min, $max);     //Generate a random value via the Mersenne Twister Random Number Generator


}

$randomNumber = generateRandomNumber(10, 20);
echo "Random Number: $randomNumber";

?>
