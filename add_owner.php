<?php
include('connection.php');
include('sidebar.php');

if (isset($_POST['submit'])) {
    $username = ($_POST['username']);
    $email = isset($_POST['email']) ? $_POST['email'] : '';
    $phone = ($_POST['phone']);
    $password = ($_POST['password']);
     // Hash the password
  $hashed_password = password_hash($password, PASSWORD_DEFAULT);

  // Insert the user's information into the "owner_info" table
  $stmt = mysqli_prepare($conn, "INSERT INTO owner_info (username, email, phone, password) VALUES (?, ?, ?, ?)");
  mysqli_stmt_bind_param($stmt, "ssss", $username, $email, $phone, $hashed_password);

  if (mysqli_stmt_execute($stmt)) {
    echo "successful";
    header("location: bus_owner.php");
  } else {
    die("Failed to connect!");
  }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css/bus_owner.css">
    <title>bus_owner</title>
</head>
<body>
<div class="form-container">
  <h2>Add owner</h2>
  <form method="POST">
  <label for="username"></label>
  <input type="text" id="username" name="username" required placeholder="Enter username">

  <label for="email"></label>
  <input type="email" id="email" name="email" required placeholder="Enter email">

  <label for="phone"></label>
  <input type="tel" id="phone" name="phone" required placeholder="Enter Phone number">

  <label for="password"></label>
  <input type="password" id="password" name="password" required placeholder="Enter password">

  <input type="submit" value="Add Owner" name="submit">
</form>
</div>

</body>
</html>
