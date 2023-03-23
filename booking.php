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
                        <a href="#" class="seat" data-seat="B2">B2</a>
                    </td>
                    <td>
                        <a href="#" class="seat" data-seat="B4">B4</a>
                    </td>
                    <td>
                        <a href="#" class="seat" data-seat="B6">B6</a>
                    </td>
                    <td>
                        <a href="#" class="seat" data-seat="B8">B8</a>
                    </td>
                    <td>
                        <a href="#" class="seat" data-seat="B10">B10</a>
                    </td>
                    <td>
                        <a href="#" class="seat" data-seat="B12">B12</a>
                    </td>
                    <td>
                        <a href="#" class="seat" data-seat="B14">B14</a>
                    </td>
                    <td>
                        <a href="#" class="seat" data-seat="B16">B16</a>
                    </td>
                    <td>
                        <a href="#" class="seat" data-seat="B18">B18</a>
                    </td>
                </tr>
                <tr>
                    <td>
                        <a href="#" class="seat" data-seat="B1">B1</a>
                    </td>
                    <td>
                        <a href="#"class="seat" data-seat="B3">B3</a>
                    </td>
                    <td>
                        <a href="#" class="seat" data-seat="B5">B5</a>
                    </td>
                    <td>
                        <a href="#" class="seat" data-seat="B7">B7</a>
                    </td>
                    <td>
                        <a href="#" class="seat" data-seat="B9">B9</a>
                    </td>
                    <td>
                        <a href="#" class="seat" data-seat="B11">B11</a>
                    </td>
                    <td>
                        <a href="#" class="seat" data-seat="B13">B13</a>
                    </td>
                    <td>
                        <a href="#" class="seat" data-seat="B15">B15</a>
                    </td>
                    <td>
                        <a href="#" class="seat" data-seat="B17">B17</a>
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
                    <a href="#" class="seat" data-seat="A17">A17</a>
                </td>
                <tr>
                    <td>
                       
                    </td>
                    <td>
                        <a href="#" class="seat" data-seat="A2">A2</a>
                    </td>
                    <td>
                        <a href="#" class="seat" data-seat="A4">A4</a>
                    </td>
                    <td>
                        <a href="#" class="seat" data-seat="A6">A6</a>
                    </td>
                    <td>
                        <a href="#" class="seat" data-seat="A8">A8</a>
                    </td>
                    <td>
                        <a href="#" class="seat" data-seat="A10">A10</a>
                    </td>
                    <td>
                        <a href="#" class="seat" data-seat="A12">A12</a>
                    </td>
                    <td>
                        <a href="#" class="seat" data-seat="A14">A14</a>
                    </td>
                    <td>
                        <a href="#" class="seat" data-seat="A16">A16</a>
                    </td>
                </tr>
                
                <tr>
                    <td>
                       
                    </td>
                    <td>
                        <a href="#" class="seat" data-seat="A1">A1</a>
                    </td>
                    <td>
                        <a href="#" class="seat" data-seat="A3">A3</a>
                    </td>
                    <td>
                        <a href="#" class="seat" data-seat="A5">A5</a>
                    </td>
                    <td>
                        <a href="#" class="seat" data-seat="A7">A7</a>
                    </td>
                    <td>
                        <a href="#" class="seat" data-seat="A9">A9</a>
                    </td>
                    <td>
                        <a href="#" class="seat" data-seat="A11">A11</a>
                    </td>
                    <td>
                        <a href="#" class="seat" data-seat="A13">A13</a>
                    </td>
                    <td>
                        <a href="#" class="seat" data-seat="A15">A15</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <h1>Passenger Information</h1>
    <form>
  <label for="selectedSeats">Selected Seats:</label>
  <input type="text" id="selectedSeats" name="selectedSeats" value="">
  <button type="submit" name="login">Book </button>
</form>
      <script>
      const seats = document.querySelectorAll('.seat');
const selectedSeats = [];

seats.forEach(seat => {
  seat.addEventListener('click', () => {
    const seatNumber = seat.getAttribute('data-seat');
    const index = selectedSeats.indexOf(seatNumber);
    if (index >= 0) {
      selectedSeats.splice(index, 1);
      seat.classList.remove('selected');
    } else {
      selectedSeats.push(seatNumber);
      seat.classList.add('selected');
    }
    document.getElementById('selectedSeats').value = selectedSeats.join(', ');
  });
});
  </script>
</body>

</html>
