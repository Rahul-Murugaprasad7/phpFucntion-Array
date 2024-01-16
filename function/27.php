<?php

function rotateArrayLeft($array, $positions) {
    $length = count($array);
    
    if ($length <= 1) {
        return $array; // No need to rotate if the array has 0 or 1 element
    }

    $positions %= $length; // Ensure positions is within array length

    // Use array_slice and array_merge to perform the rotation
    $leftPart = array_slice($array, $positions);
    $rightPart = array_slice($array, 0, $positions);

    return array_merge($leftPart, $rightPart);
}

$originalArray = [1, 2, 3, 4, 5];
$rotatedArray = rotateArrayLeft($originalArray, 2);

echo "Original Array: " . implode(', ', $originalArray) . "<br>";
echo "Rotated Array: " . implode(', ', $rotatedArray) . "<br>";

?>


<!-- <-- doubtb --> 