<?php

function generateUUID() {
    // Use uniqid() to generate a unique identifier
    $uuid = uniqid();

    // Add more entropy by appending additional information, such as microtime
    $uuid = microtime();

    // Hash the resulting string using md5() to obtain a fixed-length UUID
    $uuid = md5($uuid);

    // Format the UUID (optional)
    $formattedUUID = sprintf(
        substr($uuid, 0, 8),
        substr($uuid, 8, 4),
        substr($uuid, 12, 4),
        substr($uuid, 16, 4),
        substr($uuid, 20, 12)
    );

    return $formattedUUID;
}

$uuid = generateUUID();
echo $uuid;

?>
<!-- doubt -->