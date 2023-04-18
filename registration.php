<?php 
session_start();
include ("connection.php");
?>
<?php
// Check if the form is submitted
if (isset($_POST['submit'])) {
  // Retrieve the user's information from the form
  $fullname = ($_POST['fullname']);
  $email = ($_POST['email']);
  $mobile = ($_POST['mobile']);
  $password = ($_POST['password']);
  $confirmpassword = ($_POST['confirmpassword']);
  $gender = ($_POST['gender']);
  $dob = ($_POST['dob']);

  // Check if the email address is valid
  if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $_SESSION['message'] = "Invalid email address";
    $_SESSION['msg_type'] = "error";
    header("location: registration.php");
    exit();
  }

  
  // Hash the password
  $hashed_password = password_hash($password, PASSWORD_DEFAULT);

  // Insert the user's information into the "users" table
  $stmt = mysqli_prepare($conn, "INSERT INTO users (fullname, email, mobile, password, gender, dob) VALUES (?, ?, ?, ?, ?, ?)");
  mysqli_stmt_bind_param($stmt, "ssssss", $fullname, $email, $mobile, $hashed_password, $gender, $dob);

  if (mysqli_stmt_execute($stmt)) {
    echo "successful";
    header("location: login.php");
  } else {
    die("Failed to connect!");
  }
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Registration Page</title>
     <link rel="stylesheet" type="text/css" href="css/registration.css">
    <!-- <link rel="stylesheet" type="text/css" href="css/navbar.css"> -->
    <link rel="stylesheet" type="text/css" href="css/footer.css">
</head>
<body>
  <style>
    body{
      background-image: url('image/image7.jpg');
    }
  </style>
  <?php
    include("navbar.php");
  ?>


    <div class="registration-container">
      <h2>Create a new account</h2>
      <form method="POST">
        <label for="fullname">Full Name:</label>
        <input type="text" id="fullname" name="fullname" required>
        <div>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
        <?php 
    if(isset($_SESSION['message'])) {
      echo "<p>{$_SESSION['message']}</p>";
      unset($_SESSION['message']); // remove the message once displayed
    }
  ?>
        <label for="mobile">Mobile Number:</label>
        <input type="tel" id="mobile" name="mobile" required>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
        <label for="confirmpassword">Confirm Password:</label>
        <input type="password" id="confirmpassword" name="confirmpassword" required>
        <label for="gender">Gender:</label>
        <select id="gender" name="gender" required>
            <option value="">Select gender</option>
            <option value="male">Male</option>
            <option value="female">Female</option>
            <option value="other">Other</option>
        </select>
        <label for="dob">Date of Birth:</label>
        <input type="date" id="dob" name="dob" required>
        <input type="submit" value="Submit" name="submit" id="submit-btn">
    </form>

    <!-- </div>
    <footer>
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <p class="text-muted">&copy; 2023 Bus Ticket System. All Rights Reserved.</p>
            </div>
          </div>
        </div>
      </footer> -->
<script>
document.getElementById('submit-btn').addEventListener('click', function(event) {
  var password = document.getElementById('password').value;
  var confirmPassword = document.getElementById('confirmpassword').value;

  if (password !== confirmPassword) {
    event.preventDefault(); // prevent form submission
    alert("The passwords do not match");
  }
});
</script>

</body>
</html>
