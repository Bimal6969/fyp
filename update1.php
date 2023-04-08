<?php
session_start();
include("connection.php");
$id = $_GET["updateid"];

// Get all the bus IDs from the database
$sql = "SELECT Bus_id FROM buses";
$result = mysqli_query($conn, $sql);
$bus_ids = mysqli_fetch_all($result, MYSQLI_ASSOC);
$bus_ids = array_column($bus_ids, 'Bus_id');

if(isset($_POST['update'])){
  $bus_id=$_POST['Bus_id'];
  $city = $_POST['city'];
  $destination = $_POST['destination'];
  $bus_number = $_POST['bus-number'];
  $departure_date = $_POST['departure-date'];
  $departure_time = $_POST['departure-time'];
  $cost = $_POST['cost']; 
  
  // Use prepared statement with parameter binding
  $sql = "UPDATE routes SET Bus_id=?, city=?, destination=?, bus_number=?, departure_date=?, departure_time=?, cost=? WHERE id=?";
  $stmt = mysqli_prepare($conn, $sql);
  mysqli_stmt_bind_param($stmt, "issssssi", $bus_id, $city, $destination, $bus_number, $departure_date, $departure_time, $cost, $id);
  
  if(mysqli_stmt_execute($stmt)){
    echo "successful";
    header("location:displayroute1.php");
  }else{
    die("Failed to connect!");
  }
}

// Get the current data for the specified route from the database
$sql = "SELECT * FROM routes WHERE id = $id";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);

?>

<!DOCTYPE html>
<html>
<head>
  <title>update route</title>
  <link rel="stylesheet" type="text/css" href="css/addroutes.css">
</head>
<body>
<h2 style="margin-left: 650px;">Update Route</h2>
  <form method="POST">
  <label for="Bus_id" style="font-weight: bold;">Bus ID:</label>
    <select id="Bus_id" name="Bus_id" required style="padding: 5px; margin-top: 5px; margin-bottom: 5px;">
      <?php foreach ($bus_ids as $id) { ?>
        <option value="<?php echo $id; ?>" <?php if ($id == $row['Bus_id']) echo "selected"; ?>><?php echo $id; ?></option>
      <?php } ?>
    </select>

    <label for="city">City:</label>
    <input type="text" id="city" name="city" value="<?php echo $row['city']; ?>" required>

    <label for="destination">Destination:</label>
    <input type="text" id="destination" name="destination" value="<?php echo $row['Destination']; ?>" required>

    <label for="bus-number">Bus Number:</label>
    <input type="text" id="bus-number" name="bus-number" value="<?php echo $row['Bus_number']; ?>" required>

    <label for="departure-date">Departure Date:</label>
    <input type="date" id="departure-date" name="departure-date" value="<?php echo $row['Departure_date']; ?>" required>

    <label for="departure-time">Departure Time:</label>
    <input type="time" id="departure-time" name="departure-time" value="<?php echo $row['Departure_time']; ?>" required>

    <label for="cost">Cost:</label>
    <input type="text" id="cost" name="cost" value="<?php echo $row['Cost']; ?>" required>

    <input type="submit" name="update" value="Update" style="background-color: #4CAF50; color: white; padding: 10px 20px; border: none; border-radius: 5px; cursor: pointer;">

  </form>
</body>
</html>
