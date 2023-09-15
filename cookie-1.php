<?php

$cookie_name = "name";
$cookie_value = "Faris Faikar";
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
echo "Cookie is set";

header("Location: cookie-2.php");

?>
