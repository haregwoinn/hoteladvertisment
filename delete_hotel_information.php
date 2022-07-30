<?php
include "config.php";
if(isset($_GET["delete"])){
    $getid = $_GET["delete"];
    $query = "DELETE FROM hotel_infon WHERE ID = $getid";
    $result = mysqli_query($conn,$query);
    header("location: admin_hotel_information.php");
}
?>