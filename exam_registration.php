<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exam Registration Form</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">


    <style>
        body {
            font-family: Calibri, Helvetica, sans-serif;

        }

        .container {
            padding: 50px;
            
        }

        input[type=text],
        input[type=password],
        textarea {
            width: 100%;
            padding: 15px;
            margin: 5px 0 22px 0;
            display: inline-block;
            border: none;
            color:black;
            background: #f1f1f1;
        }

        input[type=text]:focus,
        input[type=password]:focus {
        
            outline: none;
        }

        div {
            padding: 10px 0;
        }

        hr {

            margin-bottom: 25px;
        }

        .registerbtn {
            
            color: white;
            padding: 16px 20px;
            margin: 8px 0;
            border: none;
            cursor: pointer;
            width: 100%;
            opacity: 0.9;
        }

        .registerbtn:hover {
            opacity: 1;
        }
    </style> 
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
            <label> Firstname </label>
            <input type="text" name="firstname" placeholder="Firstname" size="15" required />
            <label> Middlename: </label>
            <input type="text" name="middlename" placeholder="Middlename" size="15" required />
            <label> Lastname: </label>
            <input type="text" name="lastname" placeholder="Lastname" size="15" required />
            <div>
                <label>
                    Course :
                </label>

                <select>
                    <option value="Course">Course</option>
                    <option value="IT">IT</option>
                    <option value="CSE">CSE</option>
                    <option value="Mechanical Engg">Mechanical Engg</option>
                    <option value="Civil">Civil</option>
                    <option value="Electrical Engg">Electrical Engg</option>
                    <option value="Applied Sciences">Applied Sciences</option>
                </select>
            </div>
            <div>
                <label>
                    Gender :
                </label><br>
                <input type="radio" value="Male" name="gender" checked> Male
                <input type="radio" value="Female" name="gender"> Female
                <input type="radio" value="Other" name="gender"> Other

            </div>
            <label>
                Phone :
            </label>
            <input type="text" name="country code" placeholder="Country Code" value="+91" size="2" />
            <input type="text" name="phone" placeholder="phone no." size="10" / required>
            Current Address :
            <textarea cols="80" rows="5" placeholder="Current Address" value="address" required>
</textarea>
            <label for="email"><b>Email</b></label>
            <input type="text" placeholder="Enter Email" name="email" required>

            <label for="psw"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="psw" required>

            <label for="psw-repeat"><b>Re-type Password</b></label>
            <input type="password" placeholder="Retype Password" name="psw-repeat" required>
            <button type="submit" class="btn btn-success">Register</button>
    </form>
    <div class="container"><?php require 'partials/_footer.php' ?></div>

</body>

</html>