<?php

function sumOfSquares($numbers) {
    $sum = 0;

    foreach ($numbers as $number) {
        $sum += $number * $number;
    }

    return $sum;
}

$numbers = [2, 3, 4, 5];
$result = sumOfSquares($numbers);

echo "The sum of squares is: $result";

?>
