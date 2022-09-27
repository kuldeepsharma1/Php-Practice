<?php
$err = false;
$showError = false;
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    include 'partials/_db_connect.php';
    $name = $_POST["name"];
    $username = $_POST["username"];
    $number = $_POST["number"];
    $password = $_POST["password"];
    $cpassword = $_POST["cpassword"];

    //check whether user is exist or not
    $existSql = "SELECT * FROM `users`where username='$username'";
    $result = mysqli_query($conn, $existSql);
    $numExistRows = mysqli_num_rows($result);
    if ($numExistRows > 0) {
        $showError = " Account Already Existed";
    } else {




        if ($password == $cpassword) {
            $sql = "INSERT INTO `users` (`name`, `username`,`number`, `password`, `date`) VALUES ( '$name', '$username', '$number','$password', current_timestamp())";
            $result = mysqli_query($conn, $sql);
            if ($result) {
                $err = true;
            }
        } else {
            $showError = "Passwords do not Match ";
        }
    }
}


?>



<!DOCTYPE html>
<html lang="en">






<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css?family=Lato:700%7CMontserrat:400,600" rel="stylesheet">

    <!-- Bootstrap -->
    <!-- <link type="text/css" rel="stylesheet" href="css/bootstrap.min.css"/> -->

    <!-- Font Awesome Icon -->
    <link rel="stylesheet" href="css/font-awesome.min.css">

    <!-- Custom stlylesheet -->
    <link type="text/css" rel="stylesheet" href="css/style.css" />
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Log In</title>
</head>

<body>
    <!-- This include the nav bar   -->
    <?php require  'partials/_nav.php' ?>
    <?php
    if ($err) {
        echo  ' <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Sucess</strong> Your Account is created sucessfully and You can log in now
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>';
    }
    if ($showError) {
        echo  ' <div class="alert alert-danger alert-dismissible fade show" role="alert">
                 <strong>Sucess</strong> ' . $showError . '
                 <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
             </div>';
    }


    ?>

    <div class="container my-4">
        <h1 class="text-center">signup to our Website</h1>

        <div class="container">
            <form action="/php-practice/signup.php" method="post">

                <div class="mb-3 col-md-6">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" id="name" name="name" required>
                   
                </div>
                <div class="mb-3 col-md-6">
                    <label for="username" class="form-label">Email address</label>
                    <input type="text" class="form-control" id="username" name="username" aria-describedby="emailHelp" required>
                    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                </div>
                <div class="mb-3 col-md-6">
                    <label for="number" class="form-label">Contact NO</label>
                    <input type="tel" class="form-control" id="namber" name="number" required>

                </div>
                <div class="mb-3 col-md-6">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password" required>
                    <div id="emailHelp" class="form-text">Create strong Password</div>
                </div>
                <div class="mb-3 col-md-6">
                    <label for="cpassword" class="form-label">Confirm Password</label>
                    <input type="password" class="form-control" id="cpassword" name="cpassword" required>
                    <div id="emailHelp" class="form-text">Make sure to type same password</div>
                </div>
                <!-- <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                </div> -->
                <button type="submit" class="btn btn-primary">Sign Up</button>
                <button type="reset" class="btn btn-secondary">Reset</button>
            </form>
        </div>
    </div>
    <?php require 'partials/_footer.php' ?>







    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
    <!-- jQuery Plugins -->
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
    <script type="text/javascript" src="js/google-map.js"></script>
    <script type="text/javascript" src="js/main.js"></script>
</body>

</html>