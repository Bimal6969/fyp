<?php
include('connection.php');
include('sidebar.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="css/dashboard.css">
<h1 style="text-align: center;">Welcome to the Admin Panel</h1>
   <title>Document</title>
</head>
    <body>
    <div class="dashboard-container">
  <div class="dashboard-box">
    <h2>Total Bookings</h2>
    <?php
      $sql = "SELECT COUNT(*) AS total FROM bookings";
      $result = mysqli_query($conn, $sql);
      $row = mysqli_fetch_assoc($result);
      echo "<p>".$row['total']."</p>";
    ?>
    <p id="total-bookings"></p>
  </div>

  <div class="dashboard-box">
    <h2>Users</h2>
    <?php
      $sql = "SELECT COUNT(*) AS total FROM users";
      $result = mysqli_query($conn, $sql);
      $row = mysqli_fetch_assoc($result);
      echo "<p>".$row['total']."</p>";
    ?>
    <p id="total-users"></p>
  </div>

  <div class="dashboard-box">
    <h2>Routes</h2>
    <?php
      $sql = "SELECT COUNT(*) AS total FROM routes";
      $result = mysqli_query($conn, $sql);
      $row = mysqli_fetch_assoc($result);
      echo "<p>".$row['total']."</p>";
    ?>
    <p id="total-routes"></p>
  </div>

  <div class="dashboard-box">
    <h2>Buses</h2>
    <?php
      $sql = "SELECT COUNT(*) AS total FROM buses";
      $result = mysqli_query($conn, $sql);
      $row = mysqli_fetch_assoc($result);
      echo "<p>".$row['total']."</p>";
    ?>
    <p id="total-Buses"></p>
  </div>

  <div class="dashboard-box">
    <h2>Message</h2>
    <?php
      $sql = "SELECT COUNT(*) AS total FROM contact_us";
      $result = mysqli_query($conn, $sql);
      $row = mysqli_fetch_assoc($result);
      echo "<p>".$row['total']."</p>";
    ?>
    <p id="total-message"></p>
  </div>

  <div class="dashboard-box">
    <h2>Owner</h2>
    <?php
      $sql = "SELECT COUNT(*) AS total FROM owner_info";
      $result = mysqli_query($conn, $sql);
      $row = mysqli_fetch_assoc($result);
      echo "<p>".$row['total']."</p>";
    ?>
    <p id="total-owners"></p>
  </div>
</div>
 
    </body>
    </html>
