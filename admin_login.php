<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<link rel="stylesheet" href="./loginform.css">
</head>
<body>
    <div class="container">
        <h3>Login into account</h3>
          <div class="mb-3">
            <form action="" method="POST" id="next">
          <input type="text" name="uname" class="form-control" id="uname" placeholder="username" >
          <input type="password" name="password" class="form-control" id="password" placeholder="password">
        <input type="submit" name="submit" class="form-control"  id="submit" value="login">
        <div id="last"></div>
        </form>
        <a href="#">Forgot account?</a>
        <a href="./admin_registration.php">Sign up for New account  </a>
      </div> 
    </div>
</body>
</html>
<?php
error_reporting(1);
 session_start();
 if(isset($_POST['submit']))
 {
  $uname = $_POST['uname'];
  $pass = $_POST['password'];
$conn=mysqli_connect('localhost:3308','root','','advertisment');
$query="select * from admin where username='$uname' and password='$pass' ";
$res=mysqli_query($conn,$query);
if(mysqli_num_rows($res)==1){ 
   $_SESSION['luser'] =$uname;
  $_SESSION['start'] = time();
 $_SESSION['expire'] = $_SESSION['start'] + (1* 60) ; 
 header('location:admin_page.php');
 }
 else
 {
echo"<font color='red'>Invalid user login</font>";
 }
}
?>