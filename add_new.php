<?php 
    include "db.conn.php";

    if (isset($_POST['submit'])){
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $email = $_POST['email'];
        $gender = $_POST['gender']; 

        $sql = "INSERT INTO `crud`( `id`,`first_name`, `last_name`, `email`, `gender`) VALUES (NULL,'$first_name','$last_name','$email','$gender')";
        
        $result = mysqli_query($conn , $sql);
        
        if($result){
            header("Location: index.php?msg=New record created successfully");
        }else{
            echo"Failed to add record" . mysqli_error($conn);
        }
    }
?>


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
        <div class="text-center mb-4">
            <h3>
                Add new user
            </h3>
            <p class = "text-muted">
                Complete the following form to add user
            </p>
        </div>

        <div class ="container d-flex justify-content-center">
            <form action = "" method = "post" style="width:50vw ; min-width : 300px;">
            <div class = "row mb-3">
                <div class="col">
                    <label for="" class="form-label">First Name : </label>
                    <input type="text" class = "form-control" name = "first_name" placeholder = " Jhone">
                </div>
                <div class="col">
                    <label for="" class="form-label">Last name : </label>
                    <input type="text" class = "form-control" name = "last_name" placeholder = " viker">
                </div>
            </div>

            <div class = "mb-3" >
                <label for="" class="form-label">Email :  </label>
                <input type="email" class = "form-control" name = "email" placeholder = "name@example.com">
            </div>

            <div class="form-group mb-3">
                <label>
                    Gender : &nbsp;
                </label>
                <input type = "radio" class="form-check-input" name = "gender" id = "mail" value = "male" >
                <label for="male" class = "form-input-label">Male</label>

                &nbsp;
                <input type = "radio" class="form-check-input" name = "gender" id = "female" value = "female" >
                <label for="male" class = "form-input-label">Female</label>
            </div>

            <div>
                <button type = "submit" class="btn btn-success" name = "submit" >
                    save
                </button>
                <a  href = "index.php" class = "btn btn-danger">
                    Cancel
                </a>
            </div>

            </form>

        </div>


    </div>


<!-- bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

</body>
</html>