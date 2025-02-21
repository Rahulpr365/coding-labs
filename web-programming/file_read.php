<?php
// Open the file in read mode
$file = fopen("ex.txt", "r");
if ($file) {
    $contents = fread($file, filesize("ex.txt")); // Read the file content
    fclose($file); // Close the file
    echo nl2br($contents); // Display file content with proper line breaks
} else {
    echo "Error: Unable to open file.";
}
?>
