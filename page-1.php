<?php
// Start session
session_start();

// Set session variables
$_SESSION["favorite_game"] = "Space Station 13";
$_SESSION["favorite_food"] = "Burger";
$_SESSION["favorite_movie"] = "Sicario";

echo "Sessions are set";

?>