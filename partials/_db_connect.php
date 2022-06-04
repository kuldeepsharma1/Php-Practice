<?php



$server = "localhost";
$username ="root";
$password = "";
$database ="user1963";

$conn = mysqli_connect($server,$username,$password,$database);
if (!$conn){
   // echo "sucess";


     die( "Error".mysqli_connect_error());
   
}

?>
<!--
  How to configure database

  create a databse 
   create a sign up form 
   login form
 -->