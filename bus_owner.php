<?php
include('connection.php');
include('sidebar.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css/bus_owner.css">
    <title>bus_owner</title>
</head>
<body>
<div class="form-container">
  <form method="post">
  <label for="owner_name">Owner Name:</label>
  <input type="text" id="owner_name" name="owner_name" required>

  <label for="owner_email">Email:</label>
  <input type="email" id="owner_email" name="owner_email" required>

  <label for="owner_phone">Phone:</label>
  <input type="tel" id="owner_phone" name="owner_phone" required>

  <label for="owner_password">Password:</label>
  <input type="password" id="owner_password" name="owner_password" required>

  <input type="submit" value="Add Owner" name="submit">
</form>
</div>

</body>
</html>