<?php
//connection teting
$conn = mysqli_connect('localhost:3308','root','','advertisment');

//creating table as instance of database
$TBL="CREATE TABLE hotel_infon(
    ID INT PRIMARY KEY  AUTO_INCREMENT,
    N_HOTEL VARCHAR(20) NOT NULL,
    H_LEVEL VARCHAR(20) NOT NULL,
    PHONE_NU VARCHAR(30) NOT NULL,
    WEB_ADD VARCHAR(20) NOT NULL,
    COUNTRY VARCHAR(20) NOT NULL,
    RIGION VARCHAR(30) NOT NULL,
    CITY VARCHAR(20) NOT NULL,
    ADDITIONAL_INFO VARCHAR(20) NOT NULL,
    L_FILE varchar(50)  NOT NULL
)";
$tb = mysqli_query($conn,$TBL);
if(!$tb){
    echo"connection failed";
}
?>