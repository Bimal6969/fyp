<?php
include('connection.php');
include('sidebar.php');

if (isset($_POST['submit'])) {
    $username = ($_POST['username']);
    $email = isset($_POST['email']) ? $_POST['email'] : '';
    $phone = ($_POST['phone']);
    $password = ($_POST['password']);
     // Hash the password
//   $hashed_password = password_hash($password, PASSWORD_DEFAULT);

  // Insert the user's information into the "owner_info" table
  $stmt = mysqli_prepare($conn, "INSERT INTO owner_info (username, email, phone, password) VALUES (?, ?, ?, ?)");
  mysqli_stmt_bind_param($stmt, "ssss", $username, $email, $phone, $password);

  if (mysqli_stmt_execute($stmt)) {
    echo "owner added successfully";
    header("location: add_owner.php");
  } else {
    die("Failed to connect!");
  }
  

}
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css/bus_owner.css">
    <title>bus_owner</title>
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
  
<div class="form-container">
  <h2>Add owner</h2>
  <form method="POST">
  <label for="username"></label>
  <input type="text" id="username" name="username" required placeholder="Enter username">

  <label for="email"></label>
  <input type="email" id="email" name="email" required placeholder="Enter email">

  <label for="phone"></label>
  <input type="tel" id="phone" name="phone" required placeholder="Enter Phone number">

  <label for="password"></label>
  <input type="password" id="password" name="password" required placeholder="Enter password">

  <input type="submit" value="Add Owner" name="submit">
</form>
</div>

<table>
    <tr>
        <th> Id</th>
        <th>username</th>
        <th>email</th>
        <th>phone</th>
        <th>Delete</th>
    </tr>
    <?php
        $sql="Select * from `owner_info`";
        $result=(mysqli_query($conn,$sql));
        if($result){
            while($row=mysqli_fetch_assoc($result)){
                $id=$row['id'];
                $username=$row['username'];
                $email=$row['email'];
                $phone=$row['phone'];
                echo "<tr>
                <td>".$id."</td>
                <td>".$username."</td>
                <td>".$email."</td>
                <td>".$phone."</td>
                
                <td><button><a href=deleteowner.php?deleteid=".$id.">Delete</a></button></td>
              </tr>";
            }
           
        }
    ?>
</table>
</body>
</html>
