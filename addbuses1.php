<?php
session_start();
include("connection.php");

if(isset($_POST['submit'])){
  $Bus_number=$_POST['Bus_number'];
  $Mobile_number=$_POST['mobile_number'];
//   $Bus_number=$_POST['bus-number'];
//   $Departure_date=$_POST['departure-date'];
//   $Departure_time=$_POST['departure-time'];
//   $cost=$_POST['cost']; 
  
  // Use prepared statement with parameter binding
  $stmt = mysqli_prepare($conn, "INSERT INTO buses (Bus_number, mobile_number) VALUES (?, ?)");
  mysqli_stmt_bind_param($stmt, "sd", $Bus_number, $Mobile_number,);
  
  if(mysqli_stmt_execute($stmt)){
    echo "successful";
    header("location:Managebuses1.php");
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
<!-- <label for="Bus_id">Bus_id:</label>
  <input type="text" id="Bus_id" name="Bus_id" required> -->

  <label for="Bus_number">Bus_number:</label>
  <input type="text" id="Bus_number" name="Bus_number" required>

  <label for="mobile_number">Mobile_number:</label>
  <input type="text" id="mobile_number" name="mobile_number" required>
  <button type="submit" name="submit">Add bus</button>
</form>
</body>
</html>
