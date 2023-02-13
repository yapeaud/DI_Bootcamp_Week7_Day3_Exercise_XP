<?php
// Start the session
    session_start();

// Set session variables
    $_SESSION["firstname"] = "Beda Eric Abed-nego";
    $_SESSION["lastname"] = "Yapeaud";
// Display the variables on the page
 echo 'Hi, ' . $_SESSION["firstname"] . ' ' . $_SESSION["lastname"];
?>