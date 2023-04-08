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
$query = "SELECT s.seat_number, s.seat_type FROM bus_seats bs 
              INNER JOIN seats s ON bs.seat_id = s.seat_id 
              WHERE bs.bus_id = $bus_id";
    $result = mysqli_query($conn, $query);

    // Loop through the result set and generate the HTML for the seat layout
    while ($row = mysqli_fetch_assoc($result)) {
        $seat_number = $row['seat_number'];
        $seat_type = $row['seat_type'];
        
        // Generate the HTML for the seat based on its type (available or booked)
        $seat_html = "<a class='seat";
        if ($seat_type == 'booked') {
            $seat_html .= " booked";
        } else {
            $seat_html .= " available";
        }
        $seat_html .= "' data-seat='$seat_number'>$seat_number</a>";
        
        // Output the seat HTML
        echo "<td>$seat_html</td>";
    }
    ?>

</body>

</html>
