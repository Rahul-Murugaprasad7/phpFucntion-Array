<?php

function Average($numbers) {
    // Check if the array is not empty
    if (count($numbers) > 0) {
        // Calculate the sum of the numbers
        $sum = array_sum($numbers);

        // Calculate the average
        $average = $sum / count($numbers);

        return $average;
    } else {
        return "Error: The array is empty.";
    }
}

$numberArray = [10, 20, 30, 40, 60, 50];
$result = Average($numberArray);

echo "Average: " . $result;

?>
