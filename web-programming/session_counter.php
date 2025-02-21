<?php
session_start();

// Initialize counter if not already set
if (!isset($_SESSION['counter'])) {
    $_SESSION['counter'] = 0;
}

// Increment counter
$_SESSION['counter']++;

// Display visit count
echo "You have visited this page " . $_SESSION['counter'] . " times.";

session_write_close();
?>
