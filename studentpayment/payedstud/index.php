<?php
require_once('db.php');
$query = "SELECT * from payed_student";
$result = mysqli_query($conn,$query);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>fetch data from database </title>
</head>
<body class="bg-dark">
    <div class="container">
        <div class="row mt-5">
            <div class="col">
                <div class="card mt-5">
                    <div class="card-reader">
                        <h2 class="display-6 text-center"> fetch data from database in php</h2>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered text-center">
                            <tr class="bg-dark text-white">
                                <td> ID</td>
                                <td>name</td>
                                <td>amount</td>
                                <td>reg_num</td>
                                <td>method</td>
                               


                            </tr>
                            <tr>
                                <?php
                                while($row = mysqli_fetch_assoc($result))
                                {
                                    ?>
                     
                                    <td><?php echo $row['ID'];?></td>
                                    <td><?php echo $row['name'];?></td>
                                    <td><?php echo $row['amount'];?></td>
                                    <td><?php echo $row['registration_num'];?></td>
                                    <td><?php echo $row['pay_method'];?></td>
                                   



                                </tr>
                                    <?php 

                                }
                                
                                ?>
                           
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <button onclick="print();" class="btn btn-danger"> print</button>
</body>
</html>