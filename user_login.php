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
            <form action="" method="post" id="next">
          <input type="text" name="uname" class="form-control" id="uname" placeholder="username" maxlength="15">
          <input type="password" name="password" class="form-control" id="password" placeholder="password" maxlength="10">
        <input type="submit" name="submit" class="form-control"  id="submit" value="login">
        <div id="last"></div>
        </form>
        <a href="#">Forgot account?</a>
        <a href="./user_registration_form.php">Sign up for New account  </a>
      </div> 
    </div>
</body>
<script>
  let Fname = document.getElementById("uname");
let password = document.getElementById("password");
let submit = document.getElementById("submit");
let form = document.getElementById("next");
let Lname = document.getElementById("last");

form.addEventListener('submit', (e)=>{
    let errormassage =[];
    if(Fname.value.length > 20 || Fname.value.length < 4 ||  Fname.value ===''){
        errormassage.push('please insert information correctly');
        Fname.style.border="thin solid red";
        e.preventDefault();
    }
    if(password.value.length > 20 || password.value.length < 4 ||  password.value ===''){
        errormassage.push('please insert information correctly');
        password.style.border="thin solid red";
        e.preventDefault();
    }
    if(errormassage.length > 0){
        Lname.style.color = "red";
        Lname.innerText = errormassage[0];
    }
  })
</script>
</html>
<?php
error_reporting(1);
 session_start();
 if(isset($_POST['submit']))
 {
  $uname = $_POST['uname'];
  $pass = $_POST['password'];
$conn=mysqli_connect('localhost:3308','root','','advertisment');
$query="select * from user_registration where username='$uname' and password='$pass' ";
$res=mysqli_query($conn,$query);
if(mysqli_num_rows($res)==1){ 
   $_SESSION['luser'] =$uname;
  $_SESSION['start'] = time();
 $_SESSION['expire'] = $_SESSION['start'] + (1* 60) ; 
 header('location:profile.php');
 }
 else
 {
echo"<font color='red'>Invalid user login</font>";
 }
}
?>