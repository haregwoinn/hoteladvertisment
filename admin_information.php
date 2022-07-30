<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
       <link rel="stylesheet" href="./admin.css">
    </head>
    <body>
    <h1>This is admin information</h1>
  
<?php
$conn = mysqli_connect('localhost:3308','root','','advertisment');
if(!$conn){
    die("connection failed");
}
    echo"<table border='1px'>";
    echo"
    <tr> 
    <th> ID</th>
    <th> username</th> 
    <th> email</th>
    <th> password</th>
    </tr>";
    
    $sel="select *from admin";
    
    $sl=mysqli_query($conn,$sel);
    
    while($rows=mysqli_fetch_assoc($sl)){
        $id = $rows["id"];
    echo"<tr>
    <td>".$rows['id']."</td>
    <td>".$rows['username']."</td>
    <td>".$rows['email']."</td>
    <td>".$rows['password']."</td>
    <td><a href = 'delete_admin_information.php?delete=$id'><button id ='button'>delete</button></td>
    <td>  <a href='update_admin.php'> <button>update</button></a></td>
    <td>  <a href='logout.php'> <button>LOGOUT</button></a></td>
    </tr>";
    }
    echo"</table>";
  
?>
    </body>
</html>