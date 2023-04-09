<?php
include("connection.php");

if(isset($_GET["deleteid"])){
    $id=$_GET["deleteid"];

    $sql="delete from `contact_us` where id=$id";
    $result=mysqli_query($conn,$sql);
    if($result){
        //echo"delete successfully";
       header("location:displaymessage.php");
    }else{
        die("Failed to connect!");
    }
}
?>