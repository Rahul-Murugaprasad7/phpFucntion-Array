<?php

function getFileExtension($filename) {
    // Use pathinfo() function to extract information about the file
    $fileInfo = pathinfo($filename);

    // Check if 'extension' key exists in the $fileInfo array
    if (isset($fileInfo['extension'])) {
        // Return the file extension in lowercase
        return strtolower($fileInfo['extension']);
    } else {
        // Return an empty string if the file has no extension
        return '';
    }
}

// Example usage:
$filename = 'example_file.txt';
$extension = getFileExtension($filename);

echo "The file extension of '$filename' is: $extension";

?>


<!-- doubt -->