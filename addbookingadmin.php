<?php
session_start();
include("connection.php");

if(isset($_POST['submit'])){
  $bus_id=$_POST['bus_id'];
  $city=$_POST['city'];
  $destination=$_POST['Destination'];
  $bus_number=$_POST['Bus_number'];
  $departure_date=$_POST['departure_date'];
  $departure_time=$_POST['departure_time'];
  $cost=$_POST['cost'];
  $seat_id=$_POST['seat_id'];
  $fullname=$_POST['fullName'];
  $contactNumber=$_POST['contactNumber'];
  $email=$_POST['email'];
  $gender=$_POST['gender'];

// Use prepared statement with parameter binding
$stmt = mysqli_prepare($conn, "INSERT INTO `bookings` (bus_id, city, Destination, Bus_number, departure_date, departure_time, cost, seat_id, fullName, contactNumber,email, gender) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
mysqli_stmt_bind_param($stmt, "isssssssssss", $bus_id, $city, $destination, $bus_number, $departure_date, $departure_time, $cost, $seat_id, $fullname, $contactNumber, $email, $gender);

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
  <label for="bus_id">Bus Id:</label>
  <select id="bus_id" name="bus_id" required style="padding: 5px; margin-top: 5px; margin-bottom: 5px;">
  <?php
  // fetch seat ids from seats table
  $seat_ids_query = mysqli_query($conn, "SELECT bus_id FROM buses");
  while($row = mysqli_fetch_array($seat_ids_query)) {
    $bus_id = $row['bus_id'];
    ?>
    <option value="<?php echo $bus_id; ?>"><?php echo $bus_id; ?></option>
  <?php } ?>
</select>

  <label for="city">City:</label>
  <input type="text" id="city" name="city" required>

  <label for="Destination">Destination:</label>
  <input type="text" id="Destination" name="Destination" required>

  <label for="Bus_number">Bus Number:</label>
  <input type="text" id="Bus_number" name="Bus_number" required>

  <label for="departure_date">Departure Date:</label>
  <input type="date" id="departure_date" name="departure_date" required>

  <label for="departure_time">Departure Time:</label>
  <input type="time" id="departure_time" name="departure_time" required>

  <label for="cost">Cost:</label>
  <input type="text" id="cost" name="cost" required>

  <label for="seat_id">Seat Id:</label>
  <select id="seat_id" name="seat_id" required style="padding: 5px; margin-top: 5px; margin-bottom: 5px;">
<?php
// Fetch the list of available seat_id values from the seats table
$result = mysqli_query($conn, "SELECT seat_id FROM seats");
if (mysqli_num_rows($result) > 0) {
  while ($row = mysqli_fetch_assoc($result)) {
    $seat_id = $row['seat_id'];
    echo "<option value='$seat_id'>$seat_id</option>";
  }
}
?>
</select>

  <label for="fullName">Full Name:</label>
  <input type="text" id="fullName" name="fullName" required>

  <label for="contactNumber">Contact Number:</label>
  <input type="text" id="contactNumber" name="contactNumber" required>

  <label for="email">Email:</label>
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
