<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Landingpage</title>
</head>
<body>
  <h1>Landingpage</h1>
  <?php
  session_start();
  if ($_SESSION["is_login"]) { echo "Welcome " . $_SESSION["username"]; }
  ?>
</body>
</html>