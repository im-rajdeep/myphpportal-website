<?php 
     include_once("../config.php");
     $id = $_GET["del"];
     $q  = mysqli_query($conn,"DELETE FROM news WHERE news_id = '$id'");
     if ($q) {
         echo "<script>alert('News post successfully deleted');window.location='manage_news.php'</script>";
     }
?>