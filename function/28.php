<?php

function gcd($a, $b) {                  // Greatest Common Divisor
    while ($b != 0) {
        $temp = $b;                     //Initialization: At the beginning of each iteration, $temp is assigned the value of $b.
        $b = $a % $b;                   //Update $b: The value of $b is updated to the remainder of the division of $a by $b.
        $a = $temp;                     //Update $a: Finally, $a is updated to the value stored in $temp (the original value of $b).
    }
    return abs($a);                 // ensure the result is non-negative
}

$num1 = 48;
$num2 = 18;

$result = gcd($num1, $num2);

echo "The GCD of $num1 and $num2 is: $result";

?>
