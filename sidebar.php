<?php
session_start();
include("connection.php");?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin Panel</title>
	<link rel="stylesheet" href="css/adminpanel.css">
</head>

<body>

	<div class="sidebar">
		<div class="sidebar-header">
			<h2>Admin Panel</h2>
			<button class="sidebar-toggle" onclick="toggleSidebar()">&#9776;</button>
		</div>
		<ul class="sidebar-menu">
			<li><a href="dashboard.php">Dashboard</a></li>
			<li><a href="displayroute.php">Manage Routes</a></li>
			<li><a href="Managebuses.php">Manage Buses</a></li>
			<li><a href="adminbooking.php">Booking Ticket</a></li>
			<li><a href="add_owner.php">Owner</a></li>
			<li><a href="displaymessage.php">Message</a></li>
			<li><a href="adminlogin.php">Logout</a></li>
		</ul>
	</div>
	<script>
		function toggleSidebar() {
			document.querySelector('.sidebar').classList.toggle('collapsed');
		}
	</script>

</body>
</html>
