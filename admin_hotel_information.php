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
    <h1>This is all about hotels  information</h1>
<?php
$conn = mysqli_connect('localhost:3308','root','','advertisment');
if(!$conn){
    die("connection failed");
}
    echo"<table border='1px'>";
    echo"s
    <tr>
    <th>ID</th>
    <th>h_name</th>
    <th>level</th>
    <th>phone</th>
    <th>webp</th>
    <th>country</th>
    <th>region</th>
    <th>city</th>
    <th>ADDITIONAL_INFO</th>
</tr>";
    
    $sel="select *from hotel_infon";
    $sl=mysqli_query($conn,$sel);
    while($rows=mysqli_fetch_assoc($sl)){
        $id = $rows["ID"];
    echo"<tr>
    <td>".$rows['ID']."</td>
    <td>".$rows['N_HOTEL']."</td>
    <td>".$rows['H_LEVEL']."</td>
    <td>".$rows['PHONE_NU']."</td>
    <td>".$rows['WEB_ADD']."</td>
    <td>".$rows['COUNTRY']."</td>
    <td>".$rows['RIGION']."</td>
    <td>".$rows['CITY']."</td>
    <td>".$rows['ADDITIONAL_INFO']."</td>
    <td><a href = 'delete_hotel_information.php?delete=$id'><button id ='button'>delete</button></td>
    </tr>";
    }
    echo"</table>";
?>