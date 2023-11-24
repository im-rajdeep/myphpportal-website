<?php
include_once("../config.php");
include_once("includes/admin_header.php");

?>


<div class="container mt-3 bg-light ">
    <form action="add_news.php" method="post" enctype="multipart/form-data" name="categoryform" onsubmit=" return validateform()">
        <div class="container">
            <div class="alert alert-danger text-center form-control">
                <h2>Add Posts(News)</h2>
            </div>
            <big>
                <p>Select category and fill in news option.</p>
            </big>
            <hr>
            <div>
                <label for="exampleInputEmail">
                    <h5><b>Post Title</b></h5>
                </label>
                <input type="text" class=" form-control" id="posttitle" name="posttitle" placeholder="Enter title" required>
            </div>
            <div><label for="cate">
                    <h5><b>Select category</b></h5>
                </label>
                <select name="selcategory" id="" class="active form-control btn bg-light" onChange="getSubCat(this.value);" required>
                    <option value="" class="sel">Click to select<i class="fas fa-angle-down"></i></option>
                    <?php
                    $result_set = mysqli_query($conn, "SELECT *  FROM category");
                    while ($data = mysqli_fetch_assoc($result_set)) {
                    ?>
                        <option value="<?php echo $data['category_id'] ?>" class="mt-2 sel"><?php echo $data['category_name'] ?><i class="fas fa-angle-down"></i></option>
                    <?php } ?>
                </select>
            </div>
            <br>
            <div><label for="cate">
                    <h5><b>Select subcategory</b></h5>
                </label>
                <select name="selsubcategory" id="subcategory" class="active form-control btn bg-light">
                   
                </select>

            </div>
            <br>
            <div class="card-box">
                <label>
                    <h5 class="header-title"><b>Post Details</b></h5>
                </label>
                <textarea class="form-control bg-light" row="5" name="postdescription" required></textarea>
            </div>
            <br>
            <div>
                <label for="exampleInputdate">
                    <h5><b>Date</b></h5>
                </label>
                <input type="date" class=" form-control bg-light" id="postdate" name="date" required>
            </div>
            <br>
            <div class="card-box">
                <h5 class="header-title"><b>Feature Image</b></h5>
                <input type="file" class="form-control" id="postimage" name="postimage" required>
            </div><br>
            <hr>
            <input type="submit" name="addnews" class="registerbtn" value="SAVE POST"></input>
        </div>
    </form>
</div>


<script>
    function getSubCat(val) {
        $.ajax({
            type: "POST",
            url: "get_subcategory.php",
            data: 'id=' + val,
            success: function(data) {
                $("#subcategory").html(data);
            }
        });
    }
</script>

<?php
include_once("includes/admin_footer.php");
?>

<?php
if (isset($_POST["addnews"])) {
    $title = mysqli_real_escape_string($conn, $_POST["posttitle"]);
    $category = mysqli_real_escape_string($conn, $_POST["selcategory"]);
    $subcategory = mysqli_real_escape_string($conn, $_POST["selsubcategory"]);
    $description = mysqli_real_escape_string($conn, $_POST["postdescription"]);
    $date = mysqli_real_escape_string($conn, $_POST["date"]);
    $thumbnail = mysqli_real_escape_string($conn, $_FILES["postimage"]["name"]);
    $tmp_thumbnail = $_FILES["postimage"]["tmp_name"];
    move_uploaded_file($tmp_thumbnail, "../images/$thumbnail");

    $query1 = mysqli_query($conn, "INSERT INTO news(news_title,news_date,news_description,news_category,news_subcategory,thumbnail) VALUES('$title','$date','$description','$category','$subcategory','$thumbnail')");
    if ($query1) {
        echo "<script>alert('News post added successfully')</script>";
        echo "<script>window.location='http://localhost/myphpportal/admin/manage_news.php'; </script>";
    } else {
        echo "<script>alert('Newspost added unsuccessful')</script>";
    }
}


?>
