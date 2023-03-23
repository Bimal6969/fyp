<?php
include ("connection.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>choose bus</title>
</head>
<body>
    <h1>Choose your bus</h1>
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
        .book-btn {
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
    <a href="manualbooking.php" class="book-btn">Book Ticket </a>

<table>
    <tr>
        <th> Id</th>
        <th>City</th>
        <th>Destination</th>
        <th>Bus Number</th>
        <th>Departure Date</th>
        <th>Departure Time</th>
        <th>Cost</th>
        <th>Booking</th>
        
    </tr>
    <?php
        $sql="Select * from `routes`";
        $result=(mysqli_query($conn,$sql));
        if($result){
            while($row=mysqli_fetch_assoc($result)){
                $id=$row['Id'];
                $city=$row['city'];
                $destination=$row['Destination'];
                $bus_number=$row['Bus_number'];
                $departure_date=$row['Departure_date'];
                $departure_time=$row['Departure_time'];
                $cost=$row['Cost'];
                echo "<tr>
                <td>".$id."</td>
                <td>".$city."</td>
                <td>".$destination."</td>
                <td>".$bus_number."</td>
                <td>".$departure_date."</td>
                <td>".$departure_time."</td>
                <td>".$cost."</td>
              </tr>";
            }
           
        }
    ?>
</body>
</html>