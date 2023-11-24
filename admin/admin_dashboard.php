<?php
include_once("includes/admin_header.php");

?>


<div class="container mt-5">
    <div class="alert alert-danger text-center">
        <h1>Dashboard</h1>
    </div>
    <div class="row">
        <div class="col-md-4 mt-2">
            <div class=" border-1 alert alert-primary">
            <div class="anim bg-primary"></div>
                <a href="manage_news.php" class="text-decoration-none alert text-alert-primary">
                    <h4>News Posts :</h4>
                </a>
                <?php
                include_once("../config.php");
                $query = mysqli_query($conn, "select * from news");
                $countnews = mysqli_num_rows($query);
                ?>
                <a href="manage_news.php" class="text-decoration-none alert alert-text-primary ms-5">
                    <h2><?php echo htmlentities($countnews); ?></h2>
                </a>
            </div>
        </div>
        <div class="col-md-4 mt-2">
            <div class=" border-1 alert alert-success">
                <a href="manage_category.php" class="text-decoration-none alert text-alert-success">
                    <h4>Categories :</h4>
                </a>
                <?php
                include_once("../config.php");
                $query = mysqli_query($conn, "select * from category");
                $countcat = mysqli_num_rows($query);
                ?>
                <a href="manage_category.php" class="text-decoration-none alert alert-text-success">
                    <h2><?php echo htmlentities($countcat); ?></h2>
                </a>
            </div>
        </div>
        <div class="col-md-4 mt-2">
            <div class=" border-1 alert alert-secondary">
                <a href="manage_subcategory.php" class="text-decoration-none alert text-alert-secondary">
                    <h4>Sub-categories :</h4>
                </a>
                <?php
                include_once("../config.php");
                $query = mysqli_query($conn, "select * from subcategory");
                $countsubcat = mysqli_num_rows($query);
                ?>
                <a href="manage_subcategory.php" class="text-decoration-none alert alert-text-secondary">
                    <h2><?php echo htmlentities($countsubcat); ?></h2>
                </a>
            </div>
        </div>
    </div>
  

    <div><p>This project develop and design by Rajdeep singh.</p></div>
</div>
<br>
<div class="anim"></div>
<?php include_once("includes/admin_footer.php"); ?>