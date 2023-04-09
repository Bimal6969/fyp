<?php
    include("connection.php");
    include("ownersidebar.php");
   
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Message</title>
</head>
<body>  
<style>
        table {
            border-collapse: collapse;
            width: 80%;
            margin-left:270px;
        }
        th, td {
            text-align: left;
            padding: 8px;
        }
        th {
            background-color: #4CAF50;
            color: white;
        }
        tr:nth-child(even){background-color: #f2f2f2}
       
         .delete-btn {
            display: inline-block;
            background-color: #555555;
            color: white;
            padding: 6px 12px;
            margin-right: 5px;
            text-align: center;
            text-decoration: none;
            font-size: 14px;
            border-radius: 5px;
            border: none;
            cursor: pointer;
        }
         .delete-btn:hover {
            background-color: #333333;
        }
    </style>
<table>
    <tr>
        <th> Id</th>
        <th>Name</th>
        <th>email</th>
        <th>Subject</th>
        <th>message</th>
        <th>Delete</th>
    </tr>
    <?php 
    $sql="Select * from `contact_us`";
    $result=(mysqli_query($conn,$sql));
    if($result){
        while($row=mysqli_fetch_assoc($result)){
            $id=$row['id'];
            $name=$row['name'];
            $email=$row['email'];
            $subject=$row['subject'];
            $message=$row['message'];
            echo "<tr>
            <td>".$id."</td>
            <td>".$name."</td>
            <td>".$email."</td>
            <td>".$subject."</td>
            <td>".$message."</td>
            <td><button><a href=deletemessageowner.php?deleteid=".$id.">Delete</a></button></td>
         </tr>";
        }
       
    }?>
</body>
</html>