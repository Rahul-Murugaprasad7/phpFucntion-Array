<?php

function Perimeter($sideLength) {

    $perimeter = 4 * $sideLength;           //perimeter of the sq is 4 times of its length
    return $perimeter;
}

$sideLength = 5;
$perimeter = Perimeter($sideLength);

echo "The perimeter of the square with side length $sideLength is $perimeter.";

?>
