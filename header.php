<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link rel="stylesheet" href="./card.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
<title>Document</title>
     <link rel="stylesheet" href="./header.css">
     <link rel="stylesheet" href="./body.css">
     <link rel="stylesheet" href="./footer.css">
</head>
<body>
  <div class=".container-{breakpoint}">
    <nav>
      <div class="nav-wrapper">
        <ul id="nav-mobile" class="right hide-on-med-and-down">
          <li><a href="./body.php">Home</a></li>
          <li><a href="./user_registration_form.php">sign up</a></li>
          <li><a href="./user_login.php">Profile</a></li>
          <li><a href="./aboutus.php">About us </a></li>
          <li><a href="./contactus.php">contact us </a></li>
        </ul>
        <div class="num">
          <div class="row">
            <form action="" method="POST">
              <div class="row">
              <div class="col">
              <input style = "width:400px;" name = "value" id = "value" type="text" class="form-control" id="inputPassword2" placeholder="search by name or locatoin">
            </div>
            <div class="col">
              <button style = "margin-left:100px;" type="submit" name="submit" id="submit" class="btn btn-primary mb-3">search</button>
            </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </nav>
  </div>
  <?php
  require "config.php";
  if(isset($_POST['submit'])):{
    $search = $_POST['value'];
  }

  $sql = "SELECT * FROM hotel_infon WHERE N_HOTEL ='$search' || CITY = '$search'" ;
  $RESULT = mysqli_query($conn, $sql);
  $i=1;
  ?>
  
<div class="row">
<?php while($row = mysqli_fetch_assoc($RESULT)){
  $i++;
  ?>
<div class="col-md-3">

      <div class="card" style="width: 18rem;">
      
      <?php
        $id = $row['ID'];
        $image = $row["L_FILE"];
        $star= $row["H_LEVEL"];
        echo "<img src='$image'>";
        ?>
        <div class="card-body">
          <?php
    switch($star){
    case 1:
      echo "<span class='material-symbols-outlined'>
      star
      </span>";
      break;
     case 2:
        echo "<span class='material-symbols-outlined'>
        star
        </span>
        <span class='material-symbols-outlined'>
        star
        </span>";
        case 3:
          echo "<span class='material-symbols-outlined'>
          star
          </span>
          <span class='material-symbols-outlined'>
          star
          </span>
          <span class='material-symbols-outlined'>
          star
          </span>";
          break;
          case 4:
            echo "<span class='material-symbols-outlined'>
            star
            </span>
            <span class='material-symbols-outlined'>
            star
            </span>
            <span class='material-symbols-outlined'>
            star
            </span>
            <span class='material-symbols-outlined'>
            star
            </span>";
            break;
            case 5:
              echo "<span class='material-symbols-outlined'>
              star
              </span>
              <span class='material-symbols-outlined'>
              star
              </span>
              <span class='material-symbols-outlined'>
              star
              </span>
              <span class='material-symbols-outlined'>
              star
              </span>
              <span class='material-symbols-outlined'>
              star
              </span>";
              break;
    }
    ?>
          <p id="topic" class="card-text"> 
          <?php     
        // $row =mysqli_fetch_assoc($res);
          echo $row['N_HOTEL'].
        "</p>
          <p class='card-text'>"
          .$row['COUNTRY']. " ,".$row['RIGION'] . " ,". $row['CITY'].
      "</p>
      
          <a href='./more.PHP?conpair=$id '><button type='button' class='btn btn-light'>see more</button></a>
        </div>
      </div>
      
</div>"
?>
<?php
}
echo"</div>";
endif;
    ?>