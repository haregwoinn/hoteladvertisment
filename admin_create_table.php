<?php
//creating connection;
$conn=mysqli_connect("localhost:3308","root","","advertisment");
if(!$conn){
    die("connection failed");
}
//create table;
$adt="create table admin ( id int not null , 
username varchar(22) not null,
email varchar(23) not null,
password varchar(20) not null)";
$result = mysqli_query($conn,$adt);
?>