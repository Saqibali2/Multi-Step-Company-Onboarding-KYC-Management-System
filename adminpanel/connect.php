<?php

// $con = new mysqli('localhost','root','','restaurent');

// if(!$con){
//     die (mysqli_error($con));

// }
// else {
//     echo "connected"; 
// }

$con = new mysqli('localhost','root','','restaurent');

// Check connection
if ($con->connect_error) {
  die("Connection failed: " . $con->connect_error);
}



?>