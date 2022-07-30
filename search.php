<html>
    <body>
<form method="POST" >
          <div class="col-auto">
              <input type="te" class="form-control" name="ne" id="inputPassword2" placeholder="seaarch by name and locatoin">
            </div>
            <div class="col-auto">
              <button type="submit" name="pop" class="btn btn-primary mb-3">seaarch</button>
            </div>
          </form>
</body>         
 </html>
<?php
if(isset($_POST['pop'])){
$g=$_POST['ne'];
$conn=mysqli_connect('localhost:3308','root','','advertisment');

}
?>