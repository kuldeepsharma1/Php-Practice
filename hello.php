<?php
$err = false;
$showError = false;
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    include 'partials/_db_connect.php';

    $username = $_POST["email"];

    $password = $_POST["pwd"];
    $cpassword = $_POST["pwd1"];


    //check whether user is exist or not
    $existSql = "SELECT * FROM `userstest`where uname ='$username'";
    $result = mysqli_query($conn, $existSql);
    $numExistRows = mysqli_num_rows($result);
    if ($numExistRows > 0) {
        $showError = " Account Already Existed";
        echo '<div class="alert alert-danger" role="alert">
        '.$showError.'
      </div>';
    } else {




        if ($password == $cpassword) {
            $sql = "INSERT INTO `userstest` ( `uname`, `password`, `date`) VALUES (  '$username', '$password', current_timestamp())";
            $result = mysqli_query($conn, $sql);
            if ($result) {
                $err = true;
            }else{
                echo '<div class="spinner-grow" style="width: 3rem; height: 3rem;" role="status">
                <span class="visually-hidden">Loading...</span>
              </div>';
            }
        } else {
            $showError = "Passwords do not Match ";
            echo '<div class="alert alert-danger" role="alert">
            '.$showError.'
          </div>';
        }
    }
}


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Document</title>
</head>

<body>

    <div class="container">
        <form action="hello.php" method="POST">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1" name="pwd">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1" name="pwd1">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

    <?php

    $test = 1;
    if ($test == 2) {
        echo '<div class="spinner-border text-success" role="status">
        <span class="visually-hidden">Loading...</span>
    </div>';
    }



    ?>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>

</html>