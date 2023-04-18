<?php
    include('connection.php');
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>booking</title>
    <link rel="stylesheet" href="css/booking.css">
</head>

<body>
<style>
    body {
      background-image: url('image/image6.jpg');
      background-size: cover;
      background-repeat: no-repeat;
    }
    .bus-layout .seat {
  display: inline-block;
  width: 30px;
  height: 30px;
  background-color: rgb(14, 193, 11);
  border: 1px solid black;
  text-align: center;
  font-size: 14px;
  line-height: 30px;
  margin-right: 10px;
}
table{
    background-color:#fff;
}
h1{
    text-align:center;
}

  </style>
    <h1>Seat Booking</h1>
    <div class="bus-layout">
        <table class="seating-layout">
            <tbody>
                <tr>

                    <td>
                        <a  class="seat" data-seat="B2">B2</a>
                    </td>
                    <td>
                        <a  class="seat" data-seat="B4">B4</a>
                    </td>
                    <td>
                        <a  class="seat" data-seat="B6">B6</a>
                    </td>
                    <td>
                        <a  class="seat" data-seat="B8">B8</a>
                    </td>
                    <td>
                        <a  class="seat"  data-seat="B10">B10</a>
                    </td>
                    <td>
                        <a  class="seat" data-seat="B12">B12</a>
                    </td>
                    <td>
                        <a  class="seat" data-seat="B14">B14</a>
                    </td>
                    <td>
                        <a  class="seat" data-seat="B16">B16</a>
                    </td>
                    <td>
                        <a  class="seat" data-seat="B18">B18</a>
                    </td>
                </tr>
                <tr>
                    <td>
                        <a  class="seat" data-seat="B1">B1</a>
                    </td>
                    <td>
                        <a class="seat" data-seat="B3">B3</a>
                    </td>
                    <td>
                        <a  class="seat" data-seat="B5">B5</a>
                    </td>
                    <td>
                        <a  class="seat" data-seat="B7">B7</a>
                    </td>
                    <td>
                        <a  class="seat" data-seat="B9">B9</a>
                    </td>
                    <td>
                        <a  class="seat" data-seat="B11">B11</a>
                    </td>
                    <td>
                        <a  class="seat" data-seat="B13">B13</a>
                    </td>
                    <td>
                        <a  class="seat" data-seat="B15">B15</a>
                    </td>
                    <td>
                        <a  class="seat" data-seat="B17">B17</a>
                    </td>
                </tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td>
                    <a  class="seat" data-seat="A17">A17</a>
                </td>
                <tr>
                    <td>
                       
                    </td>
                    <td>
                        <a  class="seat" data-seat="A2">A2</a>
                    </td>
                    <td>
                        <a  class="seat" data-seat="A4">A4</a>
                    </td>
                    <td>
                        <a  class="seat" data-seat="A6">A6</a>
                    </td>
                    <td>
                        <a  class="seat" data-seat="A8">A8</a>
                    </td>
                    <td>
                        <a  class="seat" data-seat="A10">A10</a>
                    </td>
                    <td>
                        <a  class="seat" data-seat="A12">A12</a>
                    </td>
                    <td>
                        <a  class="seat" data-seat="A14">A14</a>
                    </td>
                    <td>
                        <a  class="seat" data-seat="A16">A16</a>
                    </td>
                </tr>
                
                <tr>
                    <td>
                       
                    </td>
                    <td>
                        <a  class="seat" data-seat="A1">A1</a>
                    </td>
                    <td>
                        <a  class="seat" data-seat="A3">A3</a>
                    </td>
                    <td>
                        <a  class="seat" data-seat="A5">A5</a>
                    </td>
                    <td>
                        <a  class="seat" data-seat="A7">A7</a>
                    </td>
                    <td>
                        <a  class="seat" data-seat="A9">A9</a>
                    </td>
                    <td>
                        <a  class="seat" data-seat="A11">A11</a>
                    </td>
                    <td>
                        <a  class="seat" data-seat="A13">A13</a>
                    </td>
                    <td>
                        <a  class="seat" data-seat="A15">A15</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
  
    
<div class="form-container">
<form method="POST">
<h3>Passenger Information</h3>
  <input type="hidden" name="Bus_id" value="<?php echo $_GET['Bus_id']; ?>">
  <input type="hidden" name="city" value="<?php echo $_GET['city']; ?>">
  <input type="hidden" name="Destination" value="<?php echo $_GET['Destination']; ?>">
  <input type="hidden" name="Bus_number" value="<?php echo $_GET['Bus_number']; ?>">
  <input type="hidden" name="departure_date" value="<?php echo $_GET['departure_date']; ?>">
  <input type="hidden" name="departure_time" value="<?php echo $_GET['departure_time']; ?>">
  <input type="hidden" name="cost" value="<?php echo $_GET['cost']; ?>">
  
  <label for="seat_id">seat Id:</label>
  <input type="text" id="seat_id" name="seat_id" value="">
  <br>
  <label for="fullName">Full Name:</label>
  <input type="text" id="fullName" name="fullName" required>
  <br>
  <label for="contactNumber">Contact Number:</label>
  <input type="tel" id="contactNumber" name="contactNumber" required>
  <br>
  <label for="email">Email:</label>
  <input type="email" id="email" name="email" required>
  <br>
  <label for="gender">Gender:</label>
  <select id="gender" name="gender" required>
    <option value="">Select Gender</option>
    <option value="male">Male</option>
    <option value="female">Female</option>
    <option value="other">Other</option>
  </select>
  <br>
  <button id="book-btn" class="login" type="submit" name="submit">Book</button>
</form>
</div>
<?php
// Check if the form is submitted
if (isset($_POST['submit'])) {
    // Retrieve the user's information from the form
    $Bus_id =$_POST['Bus_id'];
    $city = $_POST['city'];
    $Destination = $_POST['Destination'];
    $bus_number = $_POST['Bus_number'];
    $departure_date = $_POST['departure_date'];
    $departure_time = $_POST['departure_time'];
    $cost = $_POST['cost'];
    $seat_id = $_POST['seat_id'];
    $fullName = $_POST['fullName'];
    $contactNumber = $_POST['contactNumber'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    

    // Prepare and execute the sql query to insert the user's information into the "bookings" table
    $stmt = mysqli_prepare($conn, "INSERT INTO `bookings` (`booking_id`, `bus_id`, `city`, `Destination`, `Bus_number`, `departure_date`, `departure_time`, `cost`, `seat_id`, `fullName`, `contactNumber`, `email`, `gender`) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
    // Bind the variables to the prepared statement as parameters
    mysqli_stmt_bind_param($stmt, "ssssssssssss", $Bus_id, $city, $Destination, $bus_number, $departure_date, $departure_time, $cost, $seat_id, $fullName, $contactNumber, $email, $gender);
    if (mysqli_stmt_execute($stmt)) {
        echo "Booking Successful!";
    } else {
        echo "Booking Failed!";
    }

    // Close the database connection
    mysqli_close($conn);
}
?>
<script>
  const seats = document.querySelectorAll('.seat');
const seatIdField = document.getElementById('seat_id');
const bookBtn = document.getElementById('book-btn');

seats.forEach(seat => {
  seat.addEventListener('click', () => {
    // Remove "selected" class from all seats
    seats.forEach(s => s.classList.remove('selected'));

    // Add "selected" class to clicked seat
    seat.classList.add('selected');

    // Update value of seat_id field
    seatIdField.value = seat.getAttribute('data-seat');
  });
});

bookBtn.addEventListener('click', event => {
  event.preventDefault();

  const seatId = seatIdField.value;

  // Send AJAX request to book the seat
  const xhr = new XMLHttpRequest();
  xhr.open('POST', 'booking.php');
  xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
  xhr.onload = () => {
    if (xhr.status === 200) {
      // Update the seat color to red
      const selectedSeat = document.querySelector('.seat.selected');
      selectedSeat.classList.add('booked');

      // Disable the book button
      bookBtn.disabled = true;
    } else {
      console.error(xhr.statusText);
    }
  };
  xhr.onerror = () => {
    console.error(xhr.statusText);
  };
  xhr.send(`seat_id=${seatId}`);
});

</script>
</body>

</html>