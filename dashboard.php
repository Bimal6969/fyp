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
    <p id="total-bookings"></p>
  </div>
  <div class="dashboard-box">
    <h2>Completed Bookings</h2>
    <p id="completed-bookings"></p>
  </div>
  <div class="dashboard-box">
    <h2>Cancelled Bookings</h2>
    <p id="cancelled-bookings"></p>
  </div>
  <div class="dashboard-box">
    <h2>Total Revenue</h2>
    <p id="total-revenue"></p>
  </div>
  <div class="dashboard-box">
    <h2>Most Popular Route</h2>
    <p id="popular-route"></p>
  </div>
  <div class="dashboard-box">
    <h2>Least Popular Route</h2>
    <p id="unpopular-route"></p>
  </div>
</div>
 
    </body>
    </html>
