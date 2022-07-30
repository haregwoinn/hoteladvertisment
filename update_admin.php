<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="stylesheet" href="./profile.css">
    <style>
        button, input{type="submit"}{
            width:100px;
        }
        </style>
</head>
<div class="container">
<form action="" method="POST">
                <h1>update your information</h1>
                <label for="user"> name: </label>
                <input type="text" id="user"name="user" ><br><br>
                <label for="nuser">newname: </label>
                <input type="text" id="nuser"name="nuser" ><br><br>
                <label for="email"> email: </label>
                <input type="text"id="email" name="email" ><br><br>
                <label for="nemail"> nnewemail: </label>
                <input type="text"id="nemail" name="nemail" ><br><br>
                <label for="password"> password </label>
                <input type="password" id="password" name="password"  ><br><br>
                <label for="npassword"> newpassword </label>
                <input type="password" id="npassword" name="npassword" ><br><br>
                <input type="submit" name="submit"  value="save"><br><br>
                <div class="logout"><a href='logout.php'><button>LOGOUT</button></a></div>
            </form>
            </div>
               
           </body>
           </html>

<?php
error_reporting(1);
if(isset($_POST['submit'])){
$uname=$_POST['user'];
$nuname=$_POST['nuser'];
$email=$_POST['email'];
$nemail=$_POST['nemail'];
$password=$_POST['password'];
$npassword=$_POST['npassword'];
}
$conn = mysqli_connect('localhost:3308','root','','advertisment');
if(!$conn){
    echo"no connection.mysqli_error($conn)";
}
else{
$up="update admin set password='$npassword', username='$nuname' ,email='$nemail' where username='$uname' and password='$password'";
}
$update=mysqli_query($conn,$up);
if(!$update)

{
    echo"infon not updated  succesfully";
}
?>