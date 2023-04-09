<?php
session_start();
include("connection.php");
$id = $_GET["updateid"];

if(isset($_POST['update'])){
  $Bus_number = $_POST['Bus_number'];
  $Mobile_number = $_POST['mobile_number'];
//   $bus_number = $_POST['bus-number'];
//   $departure_date = $_POST['departure-date'];
//   $departure_time = $_POST['departure-time'];
//   $cost = $_POST['cost']; 
  
  // Use prepared statement with parameter binding
  $sql = "UPDATE buses SET Bus_number=?, mobile_number=? WHERE Bus_id=?";
  $stmt = mysqli_prepare($conn, $sql);
  mysqli_stmt_bind_param($stmt, "ssi", $Bus_number, $Mobile_number, $id);
  
  if(mysqli_stmt_execute($stmt)){
    echo "successful";
    header("location:Managebuses.php");
  }else{
    die("Failed to connect!");
  }
}

// Get the current data for the specified route from the database
$sql = "SELECT * FROM buses WHERE Bus_id = $id";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);

?>

<!DOCTYPE html>
<html>
<head>
  <title>update buses</title>
  <link rel="stylesheet" type="text/css" href="css/addroutes.css">
</head>
<body>
<h2 style="margin-left: 650px;">Update buses</h2>
  <form method="POST">
    <label for="Bus_number">Bus_number:</label>
    <input type="text" id="Bus_number" name="Bus_number" value="<?php echo $row['Bus_number']; ?>"required>

    <label for="mobile_number">Mobile_number:</label>
    <input type="text" id="mobile_number" name="mobile_number" value="<?php echo $row['mobile_number']; ?>" required>

    <!-- <label for="bus-number">Bus Number:</label>
    <input type="text" id="bus-number" name="bus-number" value="<?php echo $row['Bus_number']; ?>" required>

    <label for="departure-date">Departure Date:</label>
    <input type="date" id="departure-date" name="departure-date" value="<?php echo $row['Departure_date']; ?>" required>

    <label for="departure-time">Departure Time:</label>
    <input type="time" id="departure-time" name="departure-time" value="<?php echo $row['Departure_time']; ?>" required>

    <label for="cost">Cost:</label>
    <input type="text" id="cost" name="cost" value="<?php echo $row['Cost']; ?>" required> -->

    <input type="submit" name="update" value="Update" style="background-color: #4CAF50; color: white; padding: 10px 20px; border: none; border-radius: 5px; cursor: pointer;">

  </form>
</body>
</html>
