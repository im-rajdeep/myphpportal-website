<?php
    include_once("includes/admin_header.php");
    include_once("../config.php");
?>

<div class="container bg-light">
<form method="post" name="addsubcategoryform" onsubmit="return validateform() ">
  <div class="container">
    <div class="alert alert-danger text-center"><h2>Add Sub-Category</h2></div>
    <p><big>Select category and fill in sub-category option.</big></p>
    <hr>
    <div>
     <label for="cate"><h5><b>Select category</b></h5></label>
     <select name="selcategory" id="" class="mt-2 active form-control btn bg-light" required>
     <option value="" class="mt-2 sel">Click to select<i class="fas fa-angle-down"></i></option>
     <?php
         $resultset = mysqli_query($conn,"select * from category");
         while ($data = mysqli_fetch_assoc($resultset)) {
     ?>
     <option value="<?php echo $data['category_id'] ?>"><?php echo$data['category_name'] ?></option>
     <?php } ?>
    </select>
    <br><br>
    <label for="cate"><h5><b>Add subcategory</b></h5></label>
    <input type="text" placeholder="Enter Subcategory name" name="txtsubcategory" id="cate" required>
    <hr>
    <input type="submit" name="addsubcategory" class="registerbtn" value="REGISTER"></input>
  </div>
 </form>

 <script>
        function validateform(){
          var x = document.forms['addsubcategoryform']['selcategory'].value;
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
<?php
    if(isset($_POST["addsubcategory"])) {

      $cateid = $_POST["selcategory"];
      $subcategory = $_POST["txtsubcategory"];
      $q = mysqli_query($conn,"insert into subcategory(subcategory_name,category_id) values('$subcategory','$cateid') ");
      if($q){
        echo"<script>alert('subcategory succesfully added')</script>";
      }
      else {
        echo"<script>alert('subcategory adding unsuccessful, Please try again.')</script>";
      }
    }
   

?>