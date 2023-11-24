<?php 
     include_once("../config.php");
     $id = $_GET["id"];
     $q  = mysqli_query($conn,"DELETE FROM subcategory WHERE subcategory_id = '$id'");
     if ($q) {
         echo "<script>alert('Subcategory successfully deleted');window.location='manage_subcategory.php'</script>";
     }
?>