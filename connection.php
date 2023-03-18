<?php
$dbhost = "localhost";
$dbuser ="root";
$dbpassword = "";
$dbname ="Ticket_booking_system";

if(!$conn = mysqli_connect($dbhost,$dbuser,$dbpassword,$dbname))
{
    die("Failed to connect!");
}
    else{
       //echo"connected"; 
    }
    
?>