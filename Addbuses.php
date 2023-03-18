<?php
session_start();
include("connection.php");

if(isset($_POST['submit'])){
  $Bus_number=$_POST['Bus_number'];
  $Mobile_number=$_POST['Mobile_number'];
//   $Bus_number=$_POST['bus-number'];
//   $Departure_date=$_POST['departure-date'];
//   $Departure_time=$_POST['departure-time'];
//   $cost=$_POST['cost']; 
  
  // Use prepared statement with parameter binding
  $stmt = mysqli_prepare($conn, "INSERT INTO buses (Bus_number, Mobile_number) VALUES (?, ?)");
  mysqli_stmt_bind_param($stmt, "sd", $Bus_number, $Mobile_number,);
  
  if(mysqli_stmt_execute($stmt)){
    echo "successful";
    header("location:Managebuses.php");
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
  <label for="Bus_number">Bus_number:</label>
  <input type="text" id="Bus_number" name="Bus_number" required>

  <label for="Mobile_number">Mobile_number:</label>
  <input type="text" id="Mobile_number" name="Mobile_number" required>

  <!-- <label for="bus-number">Bus Number:</label>
  <input type="text" id="bus-number" name="bus-number" required>

  <label for="departure-date">Departure Date:</label>
  <input type="date" id="departure-date" name="departure-date" required>

  <label for="departure-time">Departure Time:</label>
  <input type="time" id="departure-time" name="departure-time" required>

  <label for="cost">Cost:</label>
  <input type="number" id="cost" name="cost" required> -->

  <button type="submit" name="submit">Add bus</button>
</form>
</body>
</html>
