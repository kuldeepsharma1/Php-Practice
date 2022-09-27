<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exam Registration Form</title>
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


    <link rel="stylesheet" href="style.css">


</head>

<body>
    <?php require  'partials/_nav.php' ?>

    <div class="container">

        <h1>Fill Your Examination Form </h1>

    </div>
    <form action="exam_registration_data.php" method="$_POST">
        <div class="container">
            <h1> Student Registeration Form</h1>
            <hr>
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="fname" name="fname" placeholder="e.g Kuldeep" size="15" required />
                <label for="fname">First Name</label>
            </div>
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="mname" name="mname" placeholder="e.g Kuldeep" size="15" />
                <label for="mname">Middle Name</label>
            </div>
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="lname" name="lname" placeholder="e.g Kuldeep" size="15" required />
                <label for="lname">Last Name</label>
            </div>


            <h4>Select Your Course</h4>
            <select class="form-select" size="6" aria-label="size 6 select example">

                <option value="1">Information Technology</option>
                <option value="2">Computer Science</option>
                <option value="3">Civil Engineering</option>
                <option value="4">Electrical Engineering</option>
                <option value="5">Mechanical Engineering</option>
                <option value="6">Applied Sciences</option>
            </select>

            <h4>Select Your Gender</h4>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                <label class="form-check-label" for="inlineRadio1">Male</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                <label class="form-check-label" for="inlineRadio2">Female</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                <label class="form-check-label" for="inlineRadio2">Other</label>
            </div>

            <h4>Enter Your Contact details</h4>
            <div class="form-floating mb-3">
                <input type="tel" class="form-control" id="cnumber" name="cnumber" placeholder="1234 45 6789" size="10" required />
                <label for="cnumber">Contact Number</label>
            </div>
            <div class="form-floating mb-3">
                <input type="email" class="form-control" id="email" name="email" placeholder="name@gph" size="35" required />
                <label for="email">Email</label>
            </div>
            <h4>Enter Your Address </h4>
            <div class="form-floating">
                <textarea class="form-control" placeholder="" id="address" name="address" style="height: 100px"></textarea>
                <label for="address">Current Address</label>
            </div>
            <div class="mt-5"><button type="submit" class="btn btn-success">Register</button></div>

    </form>
    <div class="container pb-5"></div>
    <?php require 'partials/_footer.php' ?>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!-- jQuery Plugins -->
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
    <script type="text/javascript" src="js/google-map.js"></script>
    <script type="text/javascript" src="js/main.js"></script>
</body>

</html>