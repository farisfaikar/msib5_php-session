<?php

// Start session
session_start();

// Unset variable
unset($_SESSION["favorite_food"]);
session_destroy();

echo "Session variable favorite food is not unset <br>";
?>