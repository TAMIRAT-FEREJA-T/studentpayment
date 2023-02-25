<?php
$dbhost= "localhost";
$dbuser = "root";
$dbpass = "";
$dbname= "stud_payment";


$conn=mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
if(!$conn){
    die("something went wrong");
}
?>