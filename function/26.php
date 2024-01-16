<?php

function calculatePower($base, $exponent) {
    // Using the pow() function to find power
    return pow($base, $exponent);
}

$baseNumber = 18;
$exponentValue = 18;

$result = calculatePower($baseNumber, $exponentValue);

echo "The result of $baseNumber raised to the power of $exponentValue is: $result";

?>
