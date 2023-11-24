<?php
     include_once("includes/admin_header.php");
    
?>
<div class="container">
<form action="category.php" method="post" name="addcategoryform" onsubmit="return validateform() ">
  <div class="container mt-2">
    <div class="alert alert-danger text-center"><h2>Add Category</h2></div>
    <big><p>Fill in this category option.</p></big>
    <hr>
    <label for="cate"><h5><b>Add category</b></h5></label>
    <input type="text" placeholder="Enter name" name="txtcategory" id="catey" required>
    <hr>
    <div>
    <input type="submit" name="addcategory" class="registerbtn" value="REGISTER"></input>
    </div>
  </div>
 </form>

 <script>
        function validateform(){
          var x = document.forms['addcategoryform']['txtcategory'].value;
          if(x==""){
            alert('category must be filled out!');
            return false;
          }
        }

 </script>
</div>
<?php 
     include_once("includes/admin_footer.php");
?>
<?php
     
     include_once("../config.php");   
     ini_set('display_errors', 1);

     if(isset($_POST["addcategory"]))
     {
        $category_name = $_POST["txtcategory"];

        $check = mysqli_query($conn, "select * from category where category_name ='$category_name'");
        if(mysqli_num_rows($check)>0){
          echo "<script>alert('This category name already taken!!')</script>";
          exit();
        }
        else{


        $query = mysqli_query($conn, "insert into category(category_name) values ('$category_name')");
          if($query)
          {
            echo "<script>alert('category created succesfully')</script>";
            echo "<script>window.location='http://localhost/myphpportal/admin/manage_category.php';</script>";
          }
          else
          {
             echo "<script>alert('Something went wrong . Please try again.')</script>";    
          } 
     }
    }
?>   
