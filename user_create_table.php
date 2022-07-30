<?php
//creating connection;
$conn=mysqli_connect("localhost:3308","root","","advertisment");
if($conn){
//create table;
$tb="create table user_registration ( id int not null, 
username varchar(22),
email varchar(23),
password varchar(20))";
if(mysqli_query($conn,$tb))
echo"table created successfully";
else
echo"failed to create table".mysqli_error($conn);
}
?>