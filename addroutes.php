<?php
session_start();
include("connection.php");

if(isset($_POST['submit'])){
  $City=$_POST['city'];
  $Destination=$_POST['destination'];
  $Bus_number=$_POST['bus-number'];
  $Departure_date=$_POST['departure-date'];
  $Departure_time=$_POST['departure-time'];
  $cost=$_POST['cost']; 
  
  // Use prepared statement with parameter binding
  $stmt = mysqli_prepare($conn, "INSERT INTO routes (City, Destination, Bus_number, Departure_date, Departure_time, cost) VALUES (?, ?, ?, ?, ?, ?)");
  mysqli_stmt_bind_param($stmt, "sssssd", $City, $Destination, $Bus_number, $Departure_date, $Departure_time, $cost);
  
  if(mysqli_stmt_execute($stmt)){
    echo "successful";
    header("location:displayroute.php");
  }else{
    die("Failed to connect!");
  }
}
?>

<!DOCTYPE html>
<head>
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="css/addroutes.css">
</head>
<body>
    
<form method="POST"> 
  <label for="city">City:</label>
  <input type="text" id="city" name="city" required>

  <label for="destination">Destination:</label>
  <input type="text" id="destination" name="destination" required>

  <label for="bus-number">Bus Number:</label>
  <input type="text" id="bus-number" name="bus-number" required>

  <label for="departure-date">Departure Date:</label>
  <input type="date" id="departure-date" name="departure-date" required>

  <label for="departure-time">Departure Time:</label>
  <input type="time" id="departure-time" name="departure-time" required>

  <label for="cost">Cost:</label>
  <input type="number" id="cost" name="cost" required>

  <button type="submit" name="submit">Add Route</button>
</form>
</body>
</html>
