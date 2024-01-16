hi
<?php

function capitalizeWords($sentence) {

    return ucwords($sentence);      //Uppercase the first character of each word in a string

}

$sentence = "this is a sample sentence";
$capital = capitalizeWords($sentence);

echo $capital;

?>
