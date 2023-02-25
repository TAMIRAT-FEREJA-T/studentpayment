<?php
require_once('db.php');
$query = "SELECT * from list_reg";
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
                                <td>department</td>
                                <td>email</td>
                                <td>entrance</td>
                                <td>gender</td>
                                <td>edite</td>
                                <td>delete</td>


                            </tr>
                            <tr>
                                <?php
                                while($row = mysqli_fetch_assoc($result))
                                {
                                    ?>
                     
                                    <td><?php echo $row['ID'];?></td>
                                    <td><?php echo $row['name'];?></td>
                                    <td><?php echo $row['department'];?></td>
                                    <td><?php echo $row['email'];?></td>
                                    <td><?php echo $row['entrance_result'];?></td>
                                    <td><?php echo $row['gender'];?></td>
                                    <td><a href="#" class="btn btn-primary"> edit</a> </td>
                                    <td><a href="#" class="btn btn-danger"> delete</a> </td>



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
</body>
</html>