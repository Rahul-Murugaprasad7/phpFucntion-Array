<?php

function containsSubstring($haystack, $needle) {
    // Check if the substring ($needle) is present in the given string ($haystack)
    return strpos($haystack, $needle) !== false;
}

$string = "Hello, World!";
$substring = "World";

if (containsSubstring($string, $substring)) {
    echo "The string contains the substring.";
} else {
    echo "The string does not contain the substring.";
}

?>
