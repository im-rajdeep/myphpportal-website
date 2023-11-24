<?php
    include_once("../config.php");
    include_once("includes/admin_footer.php");
    $id   = $_GET["cid"];

    if(!empty($_POST["editcategory"])){
        $cnm   = $_POST["txtcategory"];
        $query = mysqli_query($conn, "UPDATE category SET category_name = '$cnm' WHERE category_id='$id'");
        $row = mysqli_affected_rows($conn);
        if($row>0){
            echo "<script>alert('Category successfully updated');</script>";
            echo "<script>window.location='http://localhost/myphpportal/admin/manage_category.php';</script>";    
        }
        else{
            echo "<script>alert('No change in Category updation');</script>";
        }
    }

    $q    = mysqli_query($conn, "SELECT * FROM category WHERE category_id='$id'");
    $data = mysqli_fetch_array($q);
    
?>

<?php
     include_once("includes/admin_header.php");
    
?>
<div class="container">
<form method="post">
  <div class="container mt-2">
    <div class="alert alert-danger text-center"><h2>Edit Category</h2></div>
    <big><p>Fill in this category option and update record..</p></big>
    <hr>
    <label for="cate"><h5><b>Update category</b></h5></label>
    <input type="text" placeholder="Enter name" value="<?php echo $data['category_name'] ?>" name="txtcategory" id="cate" required>
    <hr>
    <div>
    <input type="submit" name="editcategory" class="registerbtn" value="UPDATE"></input>
    </div>
  </div>
 </form>
</div>

<?php include_once("includes/admin_footer.php") ?>