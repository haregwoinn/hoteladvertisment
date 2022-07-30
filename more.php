<?php
include "./header.php";
$conn = mysqli_connect('localhost:3308','root','','advertisment');
$link = $_GET['conpair'];
$sql = "SELECT * FROM hotel_infon  WHERE ID = '$link'";
$res = mysqli_query($conn, $sql);

$rowcount = mysqli_num_rows($res);
$row =mysqli_fetch_assoc($res);
?>

<div style="margin-top:5%; margin-bottom:5%; " class="maxcontainer">
  
<div class="row">
<div class="col-md-3">

      <div class="card" style="width: 18rem;">
      
      <?php
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
          echo $row['N_HOTEL'].
        "</p>
          <p class='card-text'>"
          .$row['COUNTRY']. " ,".$row['RIGION'] . " ,". $row['CITY'].
      "</p>"
      ?>
        </div>
      </div>
      
</div>
<div class="col-8" id="lar">
      <div class="row">
        <div class="col-8">
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
    echo"<h2>".$row['N_HOTEL']."</h2>";
    ?>
            
            <label for="room">G+8 floar with:-</label>
            <ol id="room">
              <li>Restorant</li>
              <li>Bars(3) </li>
              <li>Halls(5)</li>
              <li>Pent house</li>
              <li>Single rooms</li>
              <li>Double rooms</li>
              <li>VIP rooms</li>
              <li>Suite rooms</li>
              <li>Deluxe rooms</li>
              <li>Deluxe-suite rooms</li>s
            </ol>
              <p id=""> Amazing for wdding, concert , weekend, birthday and other meetings. <br> enjoy with swimming
                   pools, GYM,spa with 24 hour access by 
                   <br> 147 loyal and butiful workers.</p>
              <p id="additionainfo" style='font-size:20px;'> <b>location</b>:          <?php     
          echo " <p class='card-text'>"
          .$row['COUNTRY']. " ,".$row['RIGION'] . " ,". $row['CITY'].",".$row['N_HOTEL'].
      "</p>"
      ?> </p>
          </div>
        </div>
        <div class="col-4">
        <?php echo "<img id='imago' class='img-fluid' src='$image'>"; ?>
        <div class="adress">
          <?php
          echo"<p style='font-size:20px;' > <b>Contact us <br> phone</b>:  " .$row['PHONE_NU']." </p>";
          ?>
            <a target="_blank" href="<?php echo $row['WEB_ADD'] ?>"> <button type="button" class="btn btn-light">book now</button> <br></a>
     </div>
        </div>
    </div>
    </div>
</div>
<div class="footer">
    <footer class="page-footer">
              <p style="color: white;">&copy; 2014 Copyright Text</p>
        </footer>
</div>
  </body>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.js" integrity="sha512-n/4gHW3atM3QqRcbCn6ewmpxcLAHGaDjpEBu4xZd47N0W2oQ+6q7oc3PXstrJYXcbNU1OHdQ1T7pAP+gi5Yu8g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  </html>
<?php
echo"</div>";


    include "footer.php";
    ?>
  
</div>