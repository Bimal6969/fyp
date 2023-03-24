
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
            <label for="username">E-mail:</label>
            <input type="text" id="username" name="username" placeholder="Enter your email">
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" placeholder="Enter your password">
            <button type="submit" name="login">Log In</button>
            <!-- <a href="#">Forgot Password?</a> -->
          </form>
        </div>
      </div>
    </div>

    <?php
session_start();
include ("connection.php");

if (isset($_POST['login'])) {
  $username = $_POST['username'];
  $password = $_POST['password'];

  // Query the database to retrieve the user's hashed password based on the username provided
  $stmt = mysqli_prepare($conn, "SELECT * FROM users WHERE email = ?");
  mysqli_stmt_bind_param($stmt, "s", $username);
  mysqli_stmt_execute($stmt);
  $result = mysqli_stmt_get_result($stmt);

  if (mysqli_num_rows($result) == 1) {
    // Use the password_verify function to compare the entered password with the retrieved hashed password
    $row = mysqli_fetch_assoc($result);
    if (password_verify($password, $row['password'])) {
      // If the passwords match, create a session for the user and redirect them to a protected page
      $_SESSION['username'] = $username;
      header("Location: choosebus.php");
      exit();
    } else {
      // If the passwords don't match, show an error message
      $_SESSION['message'] = "Incorrect password";
      $_SESSION['msg_type'] = "error";
    }
  } else {
    // If the user doesn't exist, show an error message
    $_SESSION['message'] = "User not found";
    $_SESSION['msg_type'] = "error";
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
