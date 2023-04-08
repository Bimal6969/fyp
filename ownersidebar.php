<?php
session_start();
include("connection.php");?>
<!DOCTYPE html>
<html>
<head>
	<title>Owner Panel</title>
	<link rel="stylesheet" href="css/adminpanel.css">
</head>

<body>

	<div class="sidebar">
		<div class="sidebar-header">
			<h2>Admin Panel</h2>
			<button class="sidebar-toggle" onclick="toggleSidebar()">&#9776;</button>
		</div>
		<ul class="sidebar-menu">
			<li><a href="ownerdashboard.php">Dashboard</a></li>
			<li><a href="displayroute1.php">Manage Routes</a></li>
			<li><a href="Managebuses1.php">Manage Buses</a></li>
			<li><a href="adminbooking1.php">Booking Ticket</a></li>
			<li><a href="login.php">Logout</a></li>
		</ul>
	</div>
	<script>
		function toggleSidebar() {
			document.querySelector('.sidebar').classList.toggle('collapsed');
		}
	</script>

</body>
</html>
