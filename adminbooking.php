<?php
    include ("connection.php");
    include ("sidebar.php");
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Routes Table</title>
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
        .add-route-btn {
            display: inline-block;
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            margin-left:273px;
            margin-bottom:10px;
            font-size: 16px;
            border-radius: 5px;
            border: none;
            cursor: pointer;
        }
        .update-btn, .delete-btn {
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
        .update-btn:hover, .delete-btn:hover {
            background-color: #333333;
        }
    </style>
</head>
<body>

<a href="addbookingadmin.php" class="add-route-btn">Add Booking</a>

<table>
    <tr>
        <th> Id</th>
        <th>bus_id</th>
        <th>City</th>
        <th>Destination</th>
        <th>Bus Number</th>
        <th>Departure date</th>
        <th>Departure time</th>
        <th>cost</th>
        <th>seat id</th>
        <th>fullname</th>
        <th>contact Number</th>
        <th>email</th>
        <th>gender</th>
        <th>Update</th>
        <th>Delete</th>
    </tr>
    <?php
        $sql="Select * from `bookings`";
        $result=(mysqli_query($conn,$sql));
        if($result){
            while($row=mysqli_fetch_assoc($result)){
                $id=$row['booking_id'];
                $bus_id=$row['bus_id'];
                $city=$row['city'];
                $destination=$row['Destination'];
                $bus_number=$row['Bus_number'];
                $departure_date=$row['departure_date'];
                $departure_time=$row['departure_time'];
                $cost=$row['cost'];
                $seat_id=$row['seat_id'];
                $fullname=$row['fullName'];
                $contactNumber=$row['contactNumber'];
                $email=$row['email'];
                $gender=$row['gender'];
                echo "<tr>
                <td>".$id."</td>
                <td>".$bus_id."</td>
                <td>".$city."</td>
                <td>".$destination."</td>
                <td>".$bus_number."</td>
                <td>".$departure_date."</td>
                <td>".$departure_time."</td>
                <td>".$cost."</td>
                <td>".$seat_id."</td>
                <td>".$fullname."</td>
                <td>".$contactNumber."</td>
                <td>".$email."</td>
                <td>".$gender."</td>
                <td><button><a href=updatebooking.php?updateid=".$id.">Update</a></button></td>
                <td><button><a href=deletebooking.php?deleteid=".$id.">Delete</a></button></td>
              </tr>";
            }
           
        }
    ?>
</table>
</body>
</html>
