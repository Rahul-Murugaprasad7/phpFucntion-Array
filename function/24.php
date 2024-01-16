<?php

function convertion($binaryNumber) {

    $reversedBinary = strrev($binaryNumber);              // Reverse the binary string to find decimal


    $decimal = 0;

    for ($i = 0; $i < strlen($reversedBinary); $i++) {
        if ($reversedBinary[$i] == '1') {
            $decimal += pow(2, $i);
        }
    }

    return $decimal;
}

$binaryNumber = "1101";
$Result = convertion($binaryNumber);

echo "Binary: $binaryNumber . <br>";
echo "Decimal: $Result";

?>
