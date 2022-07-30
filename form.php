<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form</title>
    <link rel="stylesheet" href="./form.css">
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css"
  />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </head>
<body>
    <div class="container">
        <h1>complete correct information</h1>
          <form action=""  method="POST">
            <div class="container">
            <div class="col-sm-10 bnn">
              <input type="text" class="fonm form-control-lg" placeholder="Name of the hotel" name="nameofhotel" id="nameofhotel">
            </div>
              <select class="form-select" name="levl" id="levl">
            <option selected disabled value="">level of hotel</option>
            <option>1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
            <option>5</option>
            <option>6</option>
            <option>7</option>
              </select>
              <div class="phonenu">
              <div class="col-sm-10">
                <input type="text" class="form-control form-control-md" name="phoneNumber" placeholder="phone Number" id="phoneNumber">
              </div>
            </div>
              <div class="col-auto">
                <input type="text" class="form-control" name="website" id="website"  placeholder="website of Hotel">
              </div>
          <label for="row g-3 needs-validation">locatoin of hotel:</label>
              <div class="row">
                <div class="col">
                  <select class="form-select" name="country" id="country" required>
                    <option selected disabled value="">country</option>
                    <option disabled>Eritrea</option>
                    <option selected >Ethiopia</option>
                    <option disabled>Djibouti</option>
                    <option disabled>Sudan</option>
                    <option disabled>Somali</option>
                      </select>
                </div>
                <div class="col">
                  <select class="form-select" name="region" id="region" required>
                    <option selected disabled value="">region</option>
                    <option>Addis Ababa (Capital City)</option>
                    <option>Dire Dawa (Chartered City)</option>
                    <option>Tigray</option>
                    <option>Afar</option>
                    <option>Amhara</option>
                    <option>Oromia</option>
                    <option>Somalia</option>
                    <option>Benishangul-Gumuz</option>
                    <option>SNNPE</option>
                    <option>Harari</option>
                    <option>Gambela</option>
                   </select>
                </div>
                <div class="col">
                <input type="text" class="form-control" name="city" id="city"  placeholder="city"> 
                </div>
              </div>
          </div>
          <div class="mb-3">
            <textarea class="form-control" name="additional" id="additional" placeholder="wrte about hotel" rows="3"></textarea>
          </div>
          <div class="fil">        
          <label for="file">upload your license</label>
          <input type="file" id="file"  name="file">
        </div>
          <input  id="submit" type="submit" value="Submit"  name="submit">
          </div>
          </form> 
          </div>
    </div>
</body>
</html>
<?php
if(isset($_POST['submit'])):{
$hotelName=$_POST['nameofhotel'];
$hotelLevel=$_POST['levl'];
$phoneNumber=$_POST['phoneNumber'];
$website=$_POST['website'];
$country=$_POST['country'];
$rigon=$_POST['region'];
$city=$_POST['city'];
$additional=$_POST['additional'];
$file=$_POST['file'];
}
$conn = mysqli_connect('localhost:3308','root','','advertisment');
if(!$conn){
  die("connction faild");
}
  $tbl="INSERT INTO hotel_infon(N_HOTEL, H_LEVEL, PHONE_NU, WEB_ADD, COUNTRY, RIGION, CITY, ADDITIONAL_INFO, L_FILE) VALUES('$hotelName','$hotelLevel','$phoneNumber','$website','$country', '$rigon', '$city', '$additional', '$file')";
  $result = mysqli_query($conn, $tbl);
   endif;
?>
