<?php
session_start();
include("connection.php");

// Retrieve bus IDs from database
$query = "SELECT Bus_id FROM buses";
$result = mysqli_query($conn, $query);

// Initialize empty array to store bus IDs
$bus_ids = array();

// Loop through query results and append bus IDs to array
while ($row = mysqli_fetch_assoc($result)) {
  $bus_ids[] = $row['Bus_id'];
}

if(isset($_POST['submit'])){
  $bus_id=$_POST['Bus_id'];
  $City=$_POST['city'];
  $Destination=$_POST['destination'];
  $Bus_number=$_POST['bus-number'];
  $Departure_date=$_POST['departure-date'];
  $Departure_time=$_POST['departure-time'];
  $cost=$_POST['cost']; 
  
  // Use prepared statement with parameter binding
  $stmt = mysqli_prepare($conn, "INSERT INTO routes (Bus_id, City, Destination, Bus_number, Departure_date, Departure_time, cost) VALUES (?, ?, ?, ?, ?, ?, ?)");
  mysqli_stmt_bind_param($stmt, "isssssd", $bus_id, $City, $Destination, $Bus_number, $Departure_date, $Departure_time, $cost);
  
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
<label for="Bus_id" style="font-weight: bold;">Bus ID:</label>
<select id="Bus_id" name="Bus_id" required style="padding: 5px; margin-top: 5px; margin-bottom: 5px;">
  <?php foreach ($bus_ids as $id) { ?>
    <option value="<?php echo $id; ?>"><?php echo $id; ?></option>
  <?php } ?>
</select>

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
