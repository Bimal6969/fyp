<?php
session_start();
include("connection.php");

if(isset($_POST['submit'])){
    $city=$_POST['city'];
    $destination=$_POST['Destination'];
    $bus_number=$_POST['Bus-number'];
    $selectedSeat=$_POST['selectedSeat'];
    $fullname=$_POST['fullName'];
    $contactNumber=$_POST['contactNumber'];
    $email=$_POST['email'];
    $gender=$_POST['gender'];
  
  // Use prepared statement with parameter binding
  $stmt = mysqli_prepare($conn, "INSERT INTO booking (city, Destination, Bus_number, selectedSeat, fullName, contactNumber,email, gender) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
  mysqli_stmt_bind_param($stmt, "ssssssss", $city, $destination, $bus_number, $selectedSeat, $fullname, $contactNumber, $email, $gender);
  
  if(mysqli_stmt_execute($stmt)){
    echo "successful";
    header("location:adminbooking.php");
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
  <input type="text" id="Destination" name="Destination" required>

  <label for="bus-number">Bus Number:</label>
  <input type="text" id="Bus-number" name="Bus-number" required>

  <label for="selectedSeat">selectedSeat:</label>
  <input type="text" id="selectedSeat" name="selectedSeat" required>

  <label for="fullName">fullName:</label>
  <input type="text" id="fullName" name="fullName" required>

  <label for="contactNumber">contactNumber:</label>
  <input type="number" id="contactNumber" name="contactNumber" required>

  <label for="email">email:</label>
  <input type="text" id="email" name="email" required>

  <label for="gender">Gender:</label>
        <select id="gender" name="gender" required>
            <option value="">Select gender</option>
            <option value="male">Male</option>
            <option value="female">Female</option>
            <option value="other">Other</option>
        </select>

  <button type="submit" name="submit">Add Booking</button>
</form>
</body>
</html>
