<?php
session_start();
include("connection.php");
$id = $_GET["updateid"];

if(isset($_POST['update'])){
    $city=$_POST['city'];
    $destination=$_POST['Destination'];
    $bus_number=$_POST['Bus_number'];
    $selectedSeat=$_POST['selectedSeat'];
    $fullName=$_POST['fullName'];
    $contactNumber=$_POST['contactNumber'];
    $email=$_POST['email'];
    $gender=$_POST['gender']; 
  
  // Use prepared statement with parameter binding
  $sql = "UPDATE booking SET city=?, Destination=?, Bus_number=?, selectedSeat=?, fullName=?, contactNumber=?, email=?, gender=? WHERE id=?";
  $stmt = mysqli_prepare($conn, $sql);
  mysqli_stmt_bind_param($stmt, "ssssssssi", $city, $destination, $bus_number, $selectedSeat, $fullName, $contactNumber, $email, $gender, $id);
  
  if(mysqli_stmt_execute($stmt)){
    echo "successful";
    header("location:adminbooking.php");
  }else{
    die("Failed to connect!");
  }
}

// Get the current data for the specified route from the database
$sql = "SELECT * FROM booking WHERE id = $id";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);

?>

<!DOCTYPE html>
<html>
<head>
  <title>update booking</title>
  <link rel="stylesheet" type="text/css" href="css/addroutes.css">
</head>
<body>
<h2 style="margin-left: 650px;">Update booking</h2>
  <form method="POST">
    <label for="city">City:</label>
    <input type="text" id="city" name="city" value="<?php echo $row['city']; ?>"required>

    <label for="Destination">Destination:</label>
    <input type="text" id="Destination" name="Destination" value="<?php echo $row['Destination']; ?>" required>

    <label for="Bus_number">Bus Number:</label>
    <input type="text" id="Bus_number" name="Bus_number" value="<?php echo $row['Bus_number']; ?>" required>

    <label for="selectedSeat">selectedSeat:</label>
    <input type="text" id="selectedSeat" name="selectedSeat" value="<?php echo $row['selectedSeat']; ?>" required>

    <label for="fullName">fullName:</label>
    <input type="text" id="fullName" name="fullName" value="<?php echo $row['fullName']; ?>" required>

    <label for="contactNumber">contactNumber:</label>
    <input type="text" id="contactNumber" name="contactNumber" value="<?php echo $row['contactNumber']; ?>" required>

    <label for="email">email:</label>
    <input type="text" id="email" name="email" value="<?php echo $row['email']; ?>" required>

    <label for="gender" style="display: block; margin-bottom: 5px; font-weight: bold;">Gender:</label>
    <select id="gender" name="gender" required>
    <option value="">Select gender</option>
    <option value="male">Male</option>
    <option value="female">Female</option>
    <option value="other">Other</option>
    </select><br>

    <input type="submit" name="update" value="Update" style="background-color: #4CAF50; color: white; margin-top:10px; padding: 10px 20px; border: none; border-radius: 5px; cursor: pointer;">

  </form>
  
</body>
</html>
