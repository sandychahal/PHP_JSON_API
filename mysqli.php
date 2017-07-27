<?php
date_default_timezone_set('Europe/London');
$host="localhost";    // Write Host name or IP address here
$username="root";     // Write SQL username here
$password="";         // Write password for same user
$database="db_name";  // Write Database name here, check DB.SQL from sample database
$mysqli=mysqli_connect($host,$username,$password,$database) or die(mysqli_error($conn));
?>
