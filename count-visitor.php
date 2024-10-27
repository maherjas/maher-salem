<?php
$file = 'count.txt';

// Check if the file exists; if not, create it and set the initial count to 0
if (!file_exists($file)) {
    file_put_contents($file, 0);
}

// Read the current count from the file
$count = file_get_contents($file);

// Increment the count
$count++;

// Save the new count back to the file
file_put_contents($file, $count);

// Output the current count
echo $count;
?>