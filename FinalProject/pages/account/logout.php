<?php
// Start the session to access session variables
session_start();

// Destroy the current session to log the user out
session_destroy();

// Redirect the user to the homepage after logging out
header('Location: /index.php');

// Stop further script execution
exit;
?>