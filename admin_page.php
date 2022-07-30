
<?php
session_start();
error_reporting(1);
$now=time();
if($now> $_SESSION['expire']){
    echo"<p align='center'>your session has been expired please click login <a href='admin_login.php'>loginhere</a></p>";
}
else
{
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <style>
 .logout{
text-align:center;
margin:5%;
color:green;
}
button{
    background-color:blue;
    color:white;
}

    </style>
   
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
<link rel="stylesheet" href="./admin.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-3">
                <a href="./admin_information.php"><button type="button" class="btn btn-primary btn-lg">admin information</button></a>
            </div>
            <div class="col-3">
                <a href="./admin_hotel_information.php"><button type="button" class="btn btn-primary btn-lg">hotel information</button></a>
            </div>
            <div class="col-3">
                <a href="./admin_user_information.php"><button type="button" class="btn btn-primary btn-lg">user information</button></a>
            </div>
        </div>
    <div class="logout"><a href='logout.php'><button>LOGOUT</button></a></div>
    </div>
</body>
</html>
<?php
}
?>