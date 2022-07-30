<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<link rel="stylesheet" href="./signupform.css">
</head>
<body>
    <div class="container">
        <h3>Create a new account</h3>
        <p>It’s quick and easy.</p>
          <div class="mb-3">
            <form action="" method="post" id="next">
            <input type="text" name="Fname" class="form-control" id="First" placeholder="user name" maxlength="20" minlength="4">
          <input type="email" name="emailInput" class="form-control" id="email" placeholder="name@example.com" maxlength="50">
          <input type="password" name="password" class="form-control" id="password" placeholder="password" maxlength="13">
        <input type="submit" name="submit" class="form-control"  id="submit" value="signup">
        <div id="last"></div>
        </form>
        <a href="./admin_login.php">Already have an account?</a>
      </div> 
    </div>
    </script>
</body>
</html>
<?php
error_reporting(1);
if(isset($_POST['submit'])):{
	$uname=$_POST['Fname'];
    $pass=$_POST['password'];
    $email=$_POST['emailInput'];
}
$conn=mysqli_connect('localhost:3308','root','','advertisment');
if($conn) {
$result="insert into admin(username,password,email) values('$uname','$pass','$email')";
$quer = mysqli_query($conn,$result);
    if (!$quer) {
    echo"faild to insert data to admin table".mysqli_error($conn);  
}
}
endif;
?>