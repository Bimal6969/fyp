<!DOCTYPE html>
<html>
  <head>
    <title>Bus Ticket Booking System</title>
    <link rel="stylesheet" type="text/css" href="css/bookticket.css">
  </head>
  <body>
    <header>
      <h1></h1>
    </header>
    <main>
      <form>
        <h2>Select Your Bus and Seat</h2>
        <label for="bus">Bus:</label>
        <select id="bus" name="bus">
          <option value="bus1">Bus 1</option>
          <option value="bus2">Bus 2</option>
          <option value="bus3">Bus 3</option>
        </select>
        <div class="seat-container">
            <div class="row">
              <div class="seat" data-seat-number="1">1</div>
              <div class="seat" data-seat-number="2">2</div>
              <div class="seat aisle"></div>
              <div class="seat" data-seat-number="3">3</div>
              <div class="seat" data-seat-number="4">4</div>
            </div>
            <div class="row">
              <div class="seat" data-seat-number="5">5</div>
              <div class="seat" data-seat-number="6">6</div>
              <div class="seat aisle"></div>
              <div class="seat" data-seat-number="7">7</div>
              <div class="seat" data-seat-number="8">8</div>
            </div>
            <div class="row">
              <div class="seat" data-seat-number="9">9</div>
              <div class="seat" data-seat-number="10">10</div>
              <div class="seat aisle"></div>
              <div class="seat" data-seat-number="11">11</div>
              <div class="seat" data-seat-number="12">12</div>
            </div>
            <div class="row">
              <div class="seat" data-seat-number="13">13</div>
              <div class="seat" data-seat-number="14">14</div>
              <div class="seat aisle"></div>
              <div class="seat" data-seat-number="15">15</div>
              <div class="seat" data-seat-number="16">16</div>
            </div>
            <div class="row">
              <div class="seat" data-seat-number="13">17</div>
              <div class="seat" data-seat-number="14">18</div>
              <!--<div class="seat aisle"></div>-->
              <div class="seat" data-seat-number="15">19</div>
              <div class="seat" data-seat-number="15">20</div>
              <div class="seat" data-seat-number="16">21</div>
            </div>
          </div>
          
        <button type="submit">Book Now</button>
      </form>
    </main>
    <!-- <footer>
      <p>&copy; 2023 Bus Ticket Booking System</p>
    </footer> -->
    <script src="work.js"></script>
  </body>
</html>
