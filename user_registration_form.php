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
            <input type="text" name="Fname" class="form-control" id="First" placeholder="user name" >
          <input type="email" name="emailInput" class="form-control" id="email" placeholder="name@example.com">
          <input type="password" name="password" require="required"  class="form-control" id="password" placeholder="password">
        <input type="submit" name="submit" class="form-control"  id="submit" value="signup">
        <div id="last"></div>
        </form>
        <a href="./user_login.php">Already have an account?</a>
      </div> 
    </div>
</body>
<script>
  let Fname = document.getElementById("First");
let emailInput = document.getElementById("email");
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
    if(emailInput.value ==='' || /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/.test(emailInputValue) != true) {
        errormassage.push('please insert information correctly');
        emailInput.style.border="thin solid red";
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
        e.preventDefault();
    }
  })
</script>
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
$result="insert into user_registration(username,password,email) values('$uname','$pass','$email')";
$re =mysqli_query($conn,$result);
    if (!$re)
    {
        echo"data inserted succesfully to user_registration table";
    }
  }
endif;
?>
