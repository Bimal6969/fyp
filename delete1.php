<?php
include("connection.php");

if(isset($_GET["deleteid"])){
    $id=$_GET["deleteid"];

    $sql="delete from `routes` where id=$id";
    $result=mysqli_query($conn,$sql);
    if($result){
        //echo"delete successfully";
       header("location:displayroute1.php");
    }else{
        die("Failed to connect!");
    }
}
?>