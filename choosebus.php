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
<h1 style="text-align: center;">Choose your bus</h1>
    <style>
         /* body {
      background-image: url('image/image3.jpg');
      background-size: cover;
      background-repeat: no-repeat;
    } */
        table {
            border-collapse: collapse;
            width: 80%;
            margin-left:168px;
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
    </style>
   <table>
    <tr>
        <th> Id</th>
        <th>Bus_id</th>
        <th>City</th>
        <th>Destination</th>
        <th>Bus Number</th>
        <th>Departure Date</th>
        <th>Departure Time</th>
        <th>Cost</th>
        <th>Book</th>
    </tr>
<table> 
<?php
        $sql="SELECT * FROM `routes`";
        $result=(mysqli_query($conn,$sql));
        if($result){
            while($row=mysqli_fetch_assoc($result)){
                $id=$row['Id'];
                $Bus_id=$row['Bus_id'];
                $city=$row['city'];
                $destination=$row['Destination'];
                $bus_number=$row['Bus_number'];
                $departure_date=$row['Departure_date'];
                $departure_time=$row['Departure_time'];
                $cost=$row['Cost'];
                echo "<tr>
                <td>".$id."</td>
                <td>".$Bus_id."</td>
                <td>".$city."</td>
                <td>".$destination."</td>
                <td>".$bus_number."</td>
                <td>".$departure_date."</td>
                <td>".$departure_time."</td>
                <td>".$cost."</td>
                <td><button><a href='booking.php?Bus_id=".$Bus_id."&Bus_number=".$bus_number."&city=".$city."&Destination=".$destination."&departure_date=".$departure_date."&departure_time=".$departure_time."&cost=".$cost."'>Book now</a></button></td>
              </tr>";              
            }
           
        }
    ?>
    
</body>
</html>