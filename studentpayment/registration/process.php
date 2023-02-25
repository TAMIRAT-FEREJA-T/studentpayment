<?php
include("connect.php");
if(isset($_POST["create"])){
    // $ID = mysqli_real_escape_string($conn, $_POST["ID"]);
    $name = mysqli_real_escape_string($conn, $_POST["name"]);
    $department = mysqli_real_escape_string($conn, $_POST["department"]);
    $email = mysqli_real_escape_string($conn, $_POST["email"]);
    $entrance_result = mysqli_real_escape_string($conn, $_POST["entrance_result"]);
    $gender = mysqli_real_escape_string($conn, $_POST["gender"]);
   
    $sql = "INSERT INTO list_reg (name,department,email,entrance_result,gender) VALUES ( '$name','$department','$email', '$entrance_result','$gender')";
    if(mysqli_query($conn,$sql)){

        echo "<h1> record inserted <br>  successflly </h1>" ;
    }
    else{
        die ("something went wrong");
    }
}


?>