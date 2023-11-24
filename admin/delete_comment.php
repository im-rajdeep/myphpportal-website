<?php
    include_once("../config.php");
    $id = $_GET["cid"];
    $q  = mysqli_query($conn,"DELETE FROM comment WHERE id = '$id'");
    if ($q) {
        echo "<script>alert('Comment successfully deleted');window.location='cooments.php'</script>";
        echo "<script>window.location='http://localhost/myphpportal/admin/cooments.php';</script>";
    }
?>