<?php

function trimspace($str) {
    return trim($str);      //remove space beginning and end of a string
}

$inputString = "   Hello, Everyone!   ";
$trimmedString = trimspace($inputString);

echo "Original String: '$inputString'<br>";
echo "Trimmed String: '$trimmedString'";

?>
