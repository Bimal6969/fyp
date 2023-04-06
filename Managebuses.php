<?php
    include ("connection.php");
    include ("sidebar.php");
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Manage buses</title>
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

<a href="addbuses.php" class="add-route-btn">Add Bus</a>

<table>
    <tr>
        <th>Bus_Id</th>
        <th>Bus_number</th>
        <th>Mobile_number</th>
        <!-- <th>Bus Number</th>
        <th>Departure Date</th>
        <th>Departure Time</th>
        <th>Cost</th> -->
        <th>Update</th>
        <th>Delete</th>
    </tr>
    <?php
        $sql="Select * from `buses`";
        $result=(mysqli_query($conn,$sql));
        if($result){
            while($row=mysqli_fetch_assoc($result)){
                $id=$row['Bus_id'];
                $Bus_number=$row['Bus_number'];
                $Mobile_number=$row['mobile_number'];
                // $bus_number=$row['Bus_number'];
                // $departure_date=$row['Departure_date'];
                // $departure_time=$row['Departure_time'];
                // $cost=$row['Cost'];
                echo "<tr>
                <td>".$id."</td>
                <td>".$Bus_number."</td>
                <td>".$Mobile_number."</td>
                <td><button><a href=updatebuses.php?updateid=".$id.">Update</a></button></td>
                <td><button><a href=deletebus.php?deleteid=".$id.">Delete</a></button></td>
              </tr>";

            }

           
        }
    ?>
</table>

</body>
</html>
