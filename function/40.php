<?php

function calculateMedian($numbers) {

    if (empty($numbers)) {
        return null;
    }

    sort($numbers);     // in ascending order

    $count = count($numbers);
    $middle = floor($count / 2);

    // Check if the count is even or odd
    if ($count % 2 == 0) {
        // If even, calculate the average of the two middle values
        $median = ($numbers[$middle - 1] + $numbers[$middle]) / 2;
    } else {
        // If odd, the median is the middle value
        $median = $numbers[$middle];
    }

    return $median;
}

$numbers = [3, 2, 2, 5, 6, 8];
$result = calculateMedian($numbers);

echo "Median: $result";

?>
