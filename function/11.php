<?php

declare(strict_types=1);

function add(int $a, int $b): int {
    return $a + $b;
}

$result = add(5, '10'); // This will cause a TypeError when strict_types is enabled

?>
