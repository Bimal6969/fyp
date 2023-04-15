<?php
include("connection.php");

if(isset($_GET["deleteid"])){
    $id=$_GET["deleteid"];

    $sql="delete from `bookings` where booking_id=$id";
    $result=mysqli_query($conn,$sql);
    if($result){
        //echo"delete successfully";
       header("location:adminbooking.php");
    }else{
        die("Failed to connect!");
    }
}
?>