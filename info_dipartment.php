<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=
    , initial-scale=1.0"> <!-- Google font -->
  <link href="https://fonts.googleapis.com/css?family=Lato:700%7CMontserrat:400,600" rel="stylesheet">

  <!-- Bootstrap -->
  <!-- <link type="text/css" rel="stylesheet" href="css/bootstrap.min.css"/> -->

  <!-- Font Awesome Icon -->
  <link rel="stylesheet" href="css/font-awesome.min.css">

  <!-- Custom stlylesheet -->
  <link type="text/css" rel="stylesheet" href="css/style.css" />

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">


  <title>Information Technology</title>
  <style>
    table {

      border-collapse: collapse;
      width: 100%;

    }

    th {
      color: red;
    }

    td,
    th {
      border: 1px solid #dddddd;
      text-align: left;
      padding: 8px;
    }
  </style>
</head>

<body>
  <!-- This include the nav bar   -->
  <?php require  'partials/_nav.php' ?>
  <div class="container table-responsive mt-4 mb-4">
    <table class="table">
      <tr>
        <th scope="col">Sr No</th>
        <th scope="col">Name</th>
        <th scope="col">Designation</th>
        <th scope="col">Qualification</th>
        <th scope="col">Experience</th>
        <th scope="col">Branch</th>
        <th scope="col">Teaching/ Non-Teaching</th>
        <th scope="col">Lesson Plan</th>
      </tr>
      <tr>
        <td>1</td>
        <td>David</td>
        <td>Computer Scientist</td>
        <td>Phd</td>
        <td>10 yr</td>
        <td>Computer Science</td>
        <td>Teaching</td>
        <td><button class="btn btn-primary"><a style="text-decoration: none;" class="text-light" href="https://cs.harvard.edu/malan/">About Me</a></button></td>
      </tr>

      <tr>
        <td>2</td>
        <td>Andrew NG</td>
        <td>Computer Scientist</td>
        <td>Phd</td>
        <td>15year</td>
        <td>Artificial intelligence</td>
        <td>Teaching</td>
        <td><button class="btn btn-primary"><a style="text-decoration: none;" class="text-light" href="https://www.andrewng.org/">About Me</a></button></td>
      </tr>
      <tr>
        <td>Alfreds Futterkiste</td>
        <td>Maria Anders</td>
        <td>Germany</td>
        <td>Germany</td>
        <td>Germany</td>
        <td>Germany</td>
        <td>Germany</td>
        <td>Germany</td>
      </tr>
      <tr>
        <td>Alfreds Futterkiste</td>
        <td>Maria Anders</td>
        <td>Germany</td>
        <td>Germany</td>
        <td>Germany</td>
        <td>Germany</td>
        <td>Germany</td>
        <td>Germany</td>
      </tr>
      <tr>
        <td>Alfreds Futterkiste</td>
        <td>Maria Anders</td>
        <td>Germany</td>
        <td>Germany</td>
        <td>Germany</td>
        <td>Germany</td>
        <td>Germany</td>
        <td>Germany</td>
      </tr>
      <tr>
        <td>Alfreds Futterkiste</td>
        <td>Maria Anders</td>
        <td>Germany</td>
        <td>Germany</td>
        <td>Germany</td>
        <td>Germany</td>
        <td>Germany</td>
        <td>Germany</td>
      </tr>
      <tr>
        <td>Alfreds Futterkiste</td>
        <td>Maria Anders</td>
        <td>Germany</td>
        <td>Germany</td>
        <td>Germany</td>
        <td>Germany</td>
        <td>Germany</td>
        <td>Germany</td>
      </tr>
      <tr>
        <td>Alfreds Futterkiste</td>
        <td>Maria Anders</td>
        <td>Germany</td>
        <td>Germany</td>
        <td>Germany</td>
        <td>Germany</td>
        <td>Germany</td>
        <td>Germany</td>
      </tr>
    </table>
  </div>


  <?php require 'partials/_footer.php' ?>


















  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  <!-- jQuery Plugins -->
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
  <script type="text/javascript" src="js/google-map.js"></script>
  <script type="text/javascript" src="js/main.js"></script>
</body>

</html>