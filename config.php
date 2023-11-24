<?php
     $hostname="localhost";
     $username= "root";
     $password= "";
     $dbname= "myphpportal";

     
     $conn = mysqli_connect($hostname, $username, $password, $dbname);
     // error handling
    if (!$conn) {
        die("Error: ". mysqli_connect_error());
        exit();
    }

?>