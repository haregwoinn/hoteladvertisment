<?php
session_start();
$name = @$_SESSION['luser'];
$password = @$_SESSION['pass'] ;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="stylesheet" href="./profile.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
<style>
    p{
        font-size:20px;
    }
</style>
</head>
    <style>{
        input{
            margin-top :20px;
        }
        body{
            background-color:blue;
        }
    }
    </style>
    <body>
    <div class="row">
    <div class="col-4">
    <a href='logout.php'> <button>LOGOUT</button></a>
    <a href='form.php'> <button>post</button></a>

    </div>
    <div class="col-4">
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
                <input type="text" id="password" name="password"  ><br><br>
                <label for="npassword"> newpassword </label>
                <input type="text" id="npassword" name="npassword" ><br><br>
                <input type="submit" name="submit"  value="save"><br><br>
            </form>
            </div>
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
$sql = "SELECT * FROM user_registration WHERE username='$name' AND password='$password' ";
$up="update user_registration set password='$npassword', username='$nuname' ,email='$nemail' where username='$uname' and password='$password'";
}
$result = mysqli_query($conn, $sql);
$update=mysqli_query($conn,$up);

while($row = mysqli_fetch_assoc($result)){
    $forign = $row['h_id'];
    echo"<div>
    <p>".$row['id']."</p>
    <p>".$row['username']."</p>
    <p>".$row['email']."</p>
    <p>".$row['password']."</p>
    </div>";
}
if(!$update || !$result)
{
    echo"infon not updated  succesfully";
}
?>

