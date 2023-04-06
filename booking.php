<?php
include("connection.php");
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
                        <a  class="seat" data-seat="B10">B10</a>
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
  <input type="hidden" name="Bus_number" value="<?php echo $_GET['Bus_number']; ?>">
  <input type="hidden" name="city" value="<?php echo $_GET['city']; ?>">
  <input type="hidden" name="Destination" value="<?php echo $_GET['Destination']; ?>">
  <label for="selectedSeats">Selected Seats:</label>
  <input type="text" id="selectedSeat" name="selectedSeat" value="">
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

<script>

    // booked seats
    const bookedSeats = ['B9', 'B2'];

    const collectionOfSeats = document.querySelectorAll('.seat');
    console.log(collectionOfSeats);
    collectionOfSeats.forEach(seat=>{
        if(bookedSeats.includes(seat.dataset.seat))
        seat.classList.add('booked');
    })

    // get all seat elements
    const seats = document.querySelectorAll('.bus-layout .seat');
    const selectedSeat = [];

    seats.forEach(seat => {
    seat.addEventListener('click', () => {
        if (!seat.classList.contains('booked')) {
        const seatNumber = seat.getAttribute('data-seat');
        const index = selectedSeat.indexOf(seatNumber);
        if (index >= 0) {
        selectedSeat.splice(index, 1);
        seat.classList.remove('selected');
      } else {
        selectedSeat.push(seatNumber);
        seat.classList.add('selected');
      }
      document.getElementById('selectedSeat').value = selectedSeat.join(', ');
    }
  });
});


// add event listener to book button
// add event listener to book button
const bookBtn = document.getElementById('book-btn');
bookBtn.addEventListener('click', () => {
    // Check if the form is filled out
    const fullName = document.getElementById('fullName').value;
    const contactNumber = document.getElementById('contactNumber').value;
    const email = document.getElementById('email').value;
    const gender = document.getElementById('gender').value;
    if (!fullName || !contactNumber || !email || !gender) {
        alert('Please fill out all fields before booking the seat.');
        return;
    }
    // loop through each seat element
    seats.forEach(seat => {
        // if the seat is selected
        if (seat.classList.contains('selected')) {
            // add the booked class
            seat.classList.add('booked');
            // remove the selected class
            seat.classList.remove('selected');
            // disable the seat
            // seat.setAttribute('disabled', true);
        }
    });
});
</script>
<?php
// Check if the form is submitted
if (isset($_POST['submit'])) {

  // Retrieve the user's information from the form
  $bus_number =$_POST['Bus_number'];
  $city = $_POST['city'];
  $destination = $_POST['Destination'];
  $selectedSeat = $_POST['selectedSeat'];
  $fullName = $_POST['fullName'];
  $contactNumber = $_POST['contactNumber'];
  $email = $_POST['email'];
  $gender = $_POST['gender'];

  // Check if the connection is successful
  if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }

  // Prepare and execute the sql query to insert the user's information into the "booking" table
  $stmt = mysqli_prepare($conn, "INSERT INTO booking (Bus_number, city, Destination, selectedSeat, fullName, contactNumber, email, gender) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
  mysqli_stmt_bind_param($stmt, "ssssssss", $bus_number, $city, $destination, $selectedSeat, $fullName, $contactNumber, $email, $gender);

  if (mysqli_stmt_execute($stmt)) {
    echo "Booking Successful!";
  } else {
    echo "Booking Failed!";
  }

  // Close the database connection
  mysqli_close($conn);
}


/**
 * Buses
 * id | busnumber
 * 1 | BA123
 * 2 | BA211
 * 
 * Booking
 * id | bus_id | seat_id | client_id
 * 1  | 2      | 1       | 1
 * 2  | 1      | 5       | 1
 * 3  | 2      | 2       | 2
 * 
 * 
 * 
 * $query = "SELECT * FROM booking where bus_id = 2";  
 * 
 * 
 */
?>

</body>

</html>
