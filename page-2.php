<?php

// Start Session
session_start();

echo "Your favorite favorite game is " . $_SESSION["favorite_game"] . "<br>";
echo "Your favorite favorite food is " . $_SESSION["favorite_food"] . "<br>";
echo "Your favorite favorite movie is " . $_SESSION["favorite_movie"] . "<br>";

?>