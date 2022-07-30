<?php
include "config.php";
if(isset($_GET["delete"])){
    $getid = $_GET["delete"];
    $query = "DELETE FROM user_registration WHERE id = $getid";
    $result = mysqli_query($conn,$query);
    header("location: admin_user_information.php");
}
?>