<?php
include("connect.php");
if(isset($_POST["create"])){
    //$ID = mysqli_real_escape_string($conn, $_POST["ID"]);
    $name = mysqli_real_escape_string($conn, $_POST["stud_name"]);
    $school_acc = mysqli_real_escape_string($conn, $_POST["sc_acc_number"]);
    $amount = mysqli_real_escape_string($conn, $_POST["aount_of_money"]);
    $reg_num = mysqli_real_escape_string($conn, $_POST["registration_number"]);
    $pay_method = mysqli_real_escape_string($conn, "cbe");
   if( '$name' ==null){
            echo "name error";
            
        }
        // '$school_acc' ,
        //      , 
    $sql = "INSERT INTO payed_student (name,amount,registration_num,pay_method) 
    VALUES ( '$name' ,  '$amount' , '$reg_num' , '$pay_method'  )";
    if(mysqli_query($conn,$sql)){
        
       echo "record inserted thank you for  payed with cbe";
        
    }
    else{

        die ("something went wrong");
    }
}


?>
