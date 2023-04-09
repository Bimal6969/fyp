<?php
  session_start();
  include("connection.php");

  if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    // Verify email address
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $_SESSION['message'] = "Invalid email address";
      $_SESSION['msg_type'] = "error";
      header("location: contactus.php");
      exit();
    }

    // Insert data into database
    $stmt = mysqli_prepare($conn, "INSERT INTO `contact_us` (name, email, subject, message) VALUES (?, ?, ?, ?)");
    mysqli_stmt_bind_param($stmt, "ssss", $name, $email, $subject, $message);
    if (mysqli_stmt_execute($stmt)) {
      $_SESSION['message'] = "";
      $_SESSION['msg_type'] = "success";
      header("location: contactus.php");
      exit();
    } else {
      $_SESSION['message'] = "Failed to send message.";
      $_SESSION['msg_type'] = "error";
      header("location: Home.php");
      exit();
    }
  }
?>


<!DOCTYPE html>
<html>
<head>
  <title>Contact Us</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/contactus.css">
  <!-- <link rel="stylesheet" href="css/navbar.css"> -->
  <link rel="stylesheet" href="css/footer.css">
</head>
<body>
  <?php
    include("navbar.php");
  ?>
<!-- <nav>
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
      </nav> -->

  <header>
    <h1>Contact Us</h1>
  </header>
  <main>
    <section>
      <h2>Get in Touch</h2>
      <p>Feel free to send us a message or ask any questions you may have using the form below.</p>
      <form method="POST">
        <label for="name">Name</label>
        <input type="text" id="name" name="name" required>

        <label for="email">Email</label>
        <input type="email" id="email" name="email" required>
        <?php 
    if(isset($_SESSION['message'])) {
      echo "<p>{$_SESSION['message']}</p>";
      unset($_SESSION['message']); // remove the message once displayed
    }
  ?>

        <label for="subject">Subject</label>
        <input type="text" id="subject" name="subject" required>

        <label for="message">Message</label>
        <textarea id="message" name="message" rows="5" required></textarea>

        <input type="submit" value="Submit" name="submit" style="background-color: #4caf50;">
      </form>
    </section>
  </main>
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
