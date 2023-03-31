<?php 

session_start();
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin Login</title>
	<link rel="stylesheet" href="css/adminlogin.css">
	<link rel="stylesheet" href="css/navbar.css">
	<link rel="stylesheet" href="css/footer.css">
</head>

<body>
<?php include("connection.php"); ?>
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

	<div class="login-form">

		<h2>Admin Login</h2>

		<form method="POST">

			<div class="form-group">
				<label for="username">Username:</label>
				<input type="text" name="username" id="username" required>
			</div>

			<div class="form-group">
				<label for="password">Password:</label>
				<input type="password" name="password" id="password" required>
			</div>

			<input type="submit" name="login" value="Login">

		</form>
    <?php
if(isset($_POST['login'])){        //checks if the form was submitted with the name "login" using the isset function, If the form was submitted, it proceeds with the login operation.
    $username = $_POST['username']; //get the values of the "username" and "password" fields submitted in the form using the $_POST superglobal array
    $password = $_POST['password'];
    $hashed_password = password_hash($password, PASSWORD_DEFAULT); // encrypt the password

    // Check if the username and password match the default admin credentials
    if ($username === 'admin' && $password === 'admin') {

        // Check if the admin account already exists in the database
        $query = "SELECT * FROM admin_info WHERE username = '$username'";
        $result = mysqli_query($conn, $query);

        if(mysqli_num_rows($result) > 0){    //check the number of row returned. if 0 numb of row is return then it insert the username and password if not then processed to the login.
            $_SESSION['username'] = $username;
            header("location:dashboard.php");
        }
        else{
            // Insert the admin credentials into the database table
            $query = "INSERT INTO admin_info (username, password) VALUES ('$username', '$hashed_password')";
            mysqli_query($conn, $query);

            $_SESSION['username'] = $username;
            header("location:dashboard.php");
        }
    } else {
        echo'<script type="text/javascript">alert("Incorrect")</script>';
    }
}
?>



	</div>
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
