<?php

function countWords($sentence) {
    $wordCount = str_word_count($sentence);             // Usefd str_word_count to count words in a string

    return $wordCount;
}

$sentence = "This is a sample sentence.";
$result = countWords($sentence);

echo "Number of words in the sentence: $result";

?>
