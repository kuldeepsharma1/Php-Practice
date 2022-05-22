<!DOCTYPE html>
<html>

<body>

    <h1>My first PHP page</h1>

    <?php
    echo "Hello World!\n", "another one";
    print "hello by print" . "heloo";
    //all are legel but variables have case-sensitive but keywords are not
    echo "Hello World!<br>";
    echo "Hello World!<br>";
    echo "Hello World!<br>";

    //example
    $color = "red";
    echo "My car is " . $color . "<br>";
    /*echo "My house is " . $COLOR . "<br>";//it show error because we use undeclared variable
echo "My boat is " . $coLOR . "<br>";//same above error

*/
    ?>
   <p style="font-weight: 600;"> <strong> <span style="color:red;">echo and print Statements</strong></span><br>
    echo and print are more or less the same. They are both used to output data to the screen.

    The differences are small: echo has no return value while print has a return value of 1<br>
     so it can be used in expressions. echo can take multiple parameters<br>
      (although such usage is rare) while print can take one argument. echo is marginally faster than print.</p>
</body>

</html>