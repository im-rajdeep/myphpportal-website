<?php
    include_once("../config.php");
    include_once("includes/admin_header.php");
    $id     = $_GET["id"];
    if(!empty($_POST["editsubcategory"])){
       $category_name = $_POST["selcategory"];
       $subcategory_name = $_POST["txteditsubcategory"];
       $q = mysqli_query($conn , "UPDATE subcategory SET category_id = '$category_name' , subcategory_id = '$subcategory_name' WHERE subcategory_id = '$category_name'");
       if(mysqli_affected_rows($conn) > 0 ){
        echo "<script>alert('Subcategory succcesfullly updated');</script>";
      }
      else{
        echo "<script>alert('No change in Subcategory updation');</script>";
      }
    }
    $query  = mysqli_query($conn, "SELECT * FROM subcategory LEFT JOIN category ON subcategory.category_id = category.category_id WHERE subcategory_id='$id'");
    $data   = mysqli_fetch_assoc($query);
    
?>

<div class="container bg-light">
<form method="post" name="editsubcategoryform" onsubmit="return validateform() ">
  <div class="container">
    <div class="alert alert-danger text-center"><h2>Edit Sub-Category</h2></div>
    <p><big>Select category and edit this sub-category option.</big></p>
    <hr>
    <div>
     <label for="cate"><h5><b>Select category</b></h5></label>
     <select name="selcategory" id="" class="mt-2 active form-control btn bg-light" required>
     <option value="" class="mt-2 sel">Click to select<i class="fas fa-angle-down"></i></option>
     <?php
         $resultset = mysqli_query($conn,"SELECT * FROM category");
         while ($data = mysqli_fetch_assoc($resultset)) {
     ?>
     <option value="<?php echo $catdata['category_id'] ?>"
     <?php if(in_array($data['category_name'],$catdata)) 
          {
            echo "selected";
          }
     ?>
     ><?php echo $catdata['category_name'] ?></option>
     <?php } ?>
    </select>
    <br><br>
    <label for="cate"><h5><b>Edit subcategory</b></h5></label>
    <input type="text" placeholder="Enter Subcategory name" value="<?php echo $data['subcategory_name'] ?>" name="txteditsubcategory" id="cate" required>
    <hr>
    <input type="submit" name="editsubcategory" class="registerbtn" value="REGISTER"></input>
  </div>
 </form>

 <script>
        function validateform(){
          var x = document.forms['editsubcategoryform']['selcategory'].value;
          if(x==""){
            alert('category must be slected first!');
            return false;
          }
        }

 </script>
 
</div>

<?php
    include_once("includes/admin_footer.php");
?>