<?php
function findVowels($str){
    $vowels = ['a', 'e', 'i', 'o', 'u',
               'A', 'E', 'I', 'O', 'U'];

    $count = 0;

    for ($i = 0; $i < strlen($str); $i++){

        if (in_array($str[$i], $vowels)){
            $count++;

        }
    }
    return $count;
}

$input = "Hello EveryOne";
$result = findVowels($input);

echo "the number of vowels in this string is : $result";
?>