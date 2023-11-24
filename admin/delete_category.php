<?php
    include_once("../config.php");
    $id = $_GET["cid"];
    $q  = mysqli_query($conn,"DELETE FROM category WHERE category_id = '$id'");
    if ($q) {
        echo "<script>alert('Category successfully deleted');window.location='manage_category.php'</script>";
        echo "<script>window.location='http://localhost/myphpportal/admin/manage_category.php';</script>";
    }
?>