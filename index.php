
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP CRUD</title>
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <!-- font awsom -->
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">

</head>
<body>

    <nav class="navbar navbar-light justify-content-center fs-3 mb-5" style = "background-color : #00ff5573">
        PHP complete crud application
    </nav>

    <div class="container">

    <?php
    if(isset($_GET['msg'])){
        $msg = $_GET['msg'];
       echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
       '.$msg.'
       <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
     </div>';
    }

    ?>
   
    <a href = "add_new.php" class = "btn btn-dark mb-3" >Add new</a>

    <table class="table table-hover text-center">
        <thead class="table-dark">
            <tr>
            <th scope="col">ID</th>
            <th scope="col">First Name</th>
            <th scope="col">Last Name</th>
            <th scope="col">Email</th>
            <th scope="col">Gender</th>
            <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include "db.conn.php";

            $sql = "SELECT * FROM `crud`";
            $result = mysqli_query($conn , $sql);

            while ($row = mysqli_fetch_assoc($result)){
                ?>
                    <tr>
                        <th><?php echo $row['id']?></th>
                        <th><?php echo $row['first_name']?></th>
                        <th><?php echo $row['last_name']?></th>
                        <th><?php echo $row['email']?></th>
                        <th><?php echo $row['gender']?></th>
                        <td>
                            <a href ="edit.php?id=<?php echo $row['id']?> " class ="btn btn-dark" >Edit</a>&nbsp;
                            <a href ="delete.php?id=<?php echo $row['id']?> " class ="btn btn-danger" >Delete</a>

                        </td>

                    </tr>
                <?php

            }

            ?>
           
        </tbody>
    </table>

    </div>

<!-- bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

</body>
</html>