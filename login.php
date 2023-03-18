
<!DOCTYPE html>
<html>
  <head>
    <title>Login to your account</title>
    <link rel="stylesheet" type="text/css" href="css/login.css">
    <link rel="stylesheet" type="text/css" href="css/navbar.css">
   <!-- <link rel="stylesheet" type="text/css" href="css/footer.css">-->
  </head>
  <body>
    <!--nav bar start here -->
    <nav>
        <div class="nav-left">
          <div class="logo">
            <a href="#">Logo</a>
          </div>
          <ul class="nav-links">
            <li><a href="Home.php">Home</a></li>
            <li><a href="aboutus.php">About Us</a></li>
            <li><a href="bookticket.php">Book Ticket</a></li>
            <li><a href="contactus.php">Contact Us</a></li>
          </ul>
        </div>
        <div class="nav-right">
          <ul class="login-register">
            <li><a href="loginmenu.php">Login /</a></li>
            <li><a href="registration.php">Register</a></li>
          </ul>
        </div>
      </nav>

    <!--main body is here-->

    <div class="container">
      <div class="login-box">
        <div class="login-header">
          <h1>Login to your account</h1>
        </div>
        <div class="login-body">
          <form method="POST">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" placeholder="Enter your username">
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" placeholder="Enter your password">
            <button type="submit" name="login">Log In</button>
            <!-- <a href="#">Forgot Password?</a> -->
          </form>
        </div>
      </div>
    </div>
    <?php
// Include the database connection file
include("connection.php");

// Start the session
session_start();

// Check if the login form has been submitted
if(isset($_POST['login'])) {
  echo"submitted";
  // Get the username and password from the form
  $username = $_POST['username'];
  $password = $_POST['password'];
  

  // SQL query to retrieve the user data based on the username
  $sql = "SELECT * FROM users WHERE username = '$username'";

  // Execute the query and store the result
  $result = mysqli_query($conn, $sql);

  // Check if a row was returned
  if(mysqli_num_rows($result) == 1) {
    // Fetch the user data from the result
    $row = mysqli_fetch_assoc($result);

    // Verify the password
    if(password_verify($password, $row['password'])) {
      // Password is correct, set session variables and redirect to bookticket.php
      $_SESSION['user_id'] = $row['id'];
      $_SESSION['username'] = $row['username'];
      header("Location: bookticket.php");
      exit();
    } else {
            // authentication failed
            // display an error message to the user
            echo "Invalid username or password. Please try again.";
        }
    } else {
        // no user found with the entered username
        // display an error message to the user
        echo "Invalid username or password. Please try again.";
    }
}
?>


    <!--footer start here-->
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <p class="text-muted">&copy; 2023 Bus Ticket System. All Rights Reserved.</p>
          </div>
        </div>
      </div>
    </footer>
  </body>
</html>
