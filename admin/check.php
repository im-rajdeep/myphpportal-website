<?php
    include_once("../config.php");
    // code   username availablityerror_reporting(E_ALL);
    ini_set('display_errors', 1);
    session_start();
    if(isset($_POST["btnlogin"])) 
    {
        $email    = mysqli_real_escape_string($conn , $_POST["eid"]);
        $password = mysqli_real_escape_string($conn , $_POST["txtpswd"]);
        $query    = mysqli_query($conn,"SELECT * FROM admin_login WHERE eid='$email' AND password='$password'");	

      $row = mysqli_num_rows($query);
      if($row > 0) {
        $data     = mysqli_fetch_assoc($query);
        $_SESSION["naam"]= $data["name"];
        header("location: admin_dashboard.php");}
    
        else {
       echo "<script>alert('invalid username');window.location='index.php'</script>";
    }
   
  }




?>
