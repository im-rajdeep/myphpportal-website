<?php
    include_once("../config.php");
    include_once("includes/admin_header.php");
    ?>
<?php
include_once("../config.php");

if(isset($_POST["submit"])){
    $eid = $_POST["news_id"];
    $title = $_POST["news_title"];
    $description = $_POST["news_description"];
    $date = $_POST["news_date"];
    $thumbnail = $_FILES["thumbnail"]["name"];
    $tmp_thumbnail = $_FILES["thumbnail"]["tmp_name"];

    move_uploaded_file($tmp_thumbnail, "../images/$thumbnail");

    $sql = mysqli_query($conn, "UPDATE news SET news_title='$title', news_date='$date', news_description='$description', thumbnail='$thumbnail' WHERE news_id = '$eid'");
    if($sql){
        echo "<script>alert('News post edit successfully')</script>";
        header("Location: http://localhost/myphpportal/admin/manage_news.php");
        exit;
    } else {
        echo "<script>alert('Unable to update news post. Please try again later!')</script>";
    }
}

$eid = $_GET["edit"];

$query  = mysqli_query($conn, "SELECT * FROM news WHERE news_id='$eid'");
while ($row = mysqli_fetch_array($query)){
    $eid = $row["news_id"];
    $title = $row["news_title"];
    $description = $row["news_description"];
    $date = $row["news_date"];
    $thumbnail = $row["thumbnail"];
}
?>


<div class="container mt-3 bg-light ">
    <form action="edit_news.php" method="post" enctype="multipart/form-data" name="categoryform">
        <div class="container">
            <div class="alert alert-danger text-center form-control">
                <h2>Edit Posts(News)</h2>
            </div>
            <big>
                <p>Select category and Edit news posts option.</p>
            </big>
            <hr>
            <div>
                <label for="exampleInputEmail">
                    <h5><b>Post Title</b></h5>
                </label>
                <input type="text" value="<?php echo $title; ?>" class=" form-control" id="posttitle" name="news_title" placeholder="Enter title" required>
            </div>
            <br>
            <div class="card-box">
                <label>
                    <h5 class="header-title"><b>Post Details</b></h5>
                </label>
                <textarea class="form-control bg-light" rows="5" name=" news_description" required><?php echo $description; ?></textarea>
            </div>
            <br>
            <div>
                <label for="exampleInputdate">
                    <h5><b>Date</b></h5>
                </label>
                <input type="date" value="<?php echo $date; ?>" class=" form-control bg-light" id="postdate" name="news_date" required>
            </div>
            <br>
            <div class="card-box">
                <h5 class="header-title"><b>Feature Image</b></h5>
                <input type="file" value="<?php echo $thumbnail; ?>" class="form-control" id="postimage" name="thumbnail" required>
                <img src="../images/<?php echo $thumbnail; ?>" alt="" width="200" height="150">
            </div><br>
            <input type="hidden" name="id" value="<?php echo $_GET['edit']; ?>">
            <hr>
            <input type="submit" name="addnews" class="registerbtn" value="EDIT POST"></input>
        </div>
    </form>
</div>

<?php
     include_once("includes/admin_footer.php");
    
?>

<?php 
include_once("../config.php");
   

?>