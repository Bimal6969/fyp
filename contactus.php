<!DOCTYPE html>
<html>
<head>
  <title>Contact Us</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/contactus.css">
  <link rel="stylesheet" href="css/navbar.css">
  <link rel="stylesheet" href="css/footer.css">
</head>
<body>
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

  <header>
    <h1>Contact Us</h1>
  </header>
  <main>
    <section>
      <h2>Get in Touch</h2>
      <p>Feel free to send us a message or ask any questions you may have using the form below.</p>
      <form>
        <label for="name">Name</label>
        <input type="text" id="name" name="name" required>

        <label for="email">Email</label>
        <input type="email" id="email" name="email" required>

        <label for="subject">Subject</label>
        <input type="text" id="subject" name="subject" required>

        <label for="message">Message</label>
        <textarea id="message" name="message" rows="5" required></textarea>

        <button type="submit">Send Message</button>
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
