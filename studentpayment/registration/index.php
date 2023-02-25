<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">

    <title>Book list</title>

</head>
<body>
    <div class="container">
    <header class="d-flex justify-content-between my-4">
         <h1>book list </h1>
        <div>
            <a href="create.php" class="btn btn-primary">add new book</a>
        </div>
    </header>
    <table class="table table-bordered">
        <thead>
            <tr>
                <tr>#</tr>
                <tr>title</tr>
                <tr>author</tr>
                <tr>description</tr>

                <th> action</th>
            </tr>
            <tbody>
                <?php
                include("connect.php");
                $sql ="SELECT * FROM list_reg";
               $result = mysqli_query($conn,$sql);
               $row = mysqli_fetch_array($result);
              // 
                // while ()) {
                    ?>
                    <tr>
                    <td><?php echo $row["id"]; ?></td>
                    <td><?php echo $row["title"]; ?></td>
                    <td><?php echo $row["author"]; ?></td>
                    <td><?php echo $row["description"]; ?></td>
                    <td>
                    <a href="" class="btn btn-info">Read more</a>
                    <a href="" class="btn btn-warning">edit</a>
                    <a href="" class="btn btn-danger">Delete</a>
                    </td>
                    </tr>
                    <?php
                // }
                ?>
            </tbody>
        </thead>
    </table>
    </div>
    
</body>
</html>