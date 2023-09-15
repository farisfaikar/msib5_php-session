<?php

// Start session
session_start();

$_SESSION["username"] = $_POST["username"];
$_SESSION["password"] = $_POST["password"];

if ($_SESSION["username"] == "admin" && $_SESSION["password"] == "1234") {
  $_SESSION["is_login"] = true;
}
echo "Login berhasil";
header("Location: landing.php");

?>