<?php

function AscendingOrder($arr) {
    sort($arr);
    return $arr;
}

$numbers = [5, 2, 8, 1, 7];
$sorted = AscendingOrder($numbers);

echo implode($sorted);

?>
