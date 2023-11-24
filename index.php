<?php
include_once "includes/header.php";

?>
<!-- Page Features-->
<div class="row mt-5">
    <?php
    include_once "config.php";
    $query2 = mysqli_query($conn, "select * from news order by news_id desc limit 1,2");
    while ($row = mysqli_fetch_array($query2)) {
        $category = $row['news_category'];
        $date = $row['news_date'];
        $title = $row['news_title'];
        $thumbnail = $row['thumbnail'];



    ?>
        <div class="col-lg-6 mb-5">
            <div class="card bg-light ">
                <div class="card-body text-center p-4 p-lg-5 pt-0 pt-lg-0">
                    <div class="feature bg-primary bg-gradient text-white rounded-3 mb-4 mt-n4"><i class="bi bi-collection"></i></div>
                    <strong class="d-inline-block text-dark pull-left mt-3" style="font-size:15px;"><?php echo $category; ?></strong>
                    <h2 class="" style="font-size:24px;"><a class="text-decoration-none text-dark" href="singlepage.php?single=<?php echo $row['news_id']; ?>"><?php echo $row['news_title']; ?></a></h2>
                    <div class="text-muted mb-3"><?php echo $date ?></div>
                    <a href="singlepage.php?single=<?php echo $row['news_id']; ?>" class="text-decoration-none" style="font-size:15px;">continue reading...</a>
                </div>
            </div>
        </div>

    <?php } ?>
</div>
</section>
<br>
<hr>
<br>
<div class="container ">
    <div class="row" style="font-size:15px;">
        <div class="col-md-3">
            <div class="cards">
                <img src="assets/card1img.jpg" alt="" style="width:100%; height:auto;">
                <h3 style="padding-left:10px; padding-right:10px;">Robotics funding saw another dip in 2023</h3>
                <p style="padding-left:25px; padding-right:25px;">The spectacular first images from a dark matter-hunting telescope were unveiled Tuesday, showcasing bustling galaxies, clusters of ancient stars and wispy, dreamlike stellar nurseries.</p>
            </div>
        </div>
        <div class="col-md-3">
            <div class="cards">
                <img src="assets/card2img.jpg" alt="" style="width:100%; height:auto;">
                <h3 style="padding-left:10px; padding-right:10px;">Rivian eyes software upcharges around AR and autonomy.</h3>
                <p style="padding-left:25px; padding-right:25px;">The spectacular first images from a dark matter-hunting telescope were unveiled Tuesday, showcasing bustling galaxies, clusters of ancient stars and wispy, dreamlike stellar nurseries.</p>
            </div>
        </div>
        <div class="col-md-3">
            <div class="cards">
                <img src="assets/card3img.jpg" alt="" style="width:100%; height:auto;">
                <h3 style="padding-left:10px; padding-right:10px;">Sumo Logic urges customers to reset API keys.</h3>
                <p style="padding-left:25px; padding-right:25px;">The spectacular first images from a dark matter-hunting telescope were unveiled Tuesday, showcasing bustling galaxies, clusters of ancient stars and wispy, dreamlike stellar nurseries.</p>
            </div>
        </div>
        <div class="col-md-3">
            <div class="cards">
                <img src="assets/card4img.jpg" alt="" style="width:100%; height:auto;">
                <h3 style="padding-left:10px; padding-right:10px;">Euclid telescope's first image.</h3>
                <p style="padding-left:25px; padding-right:25px;">The spectacular first images from a dark matter-hunting telescope were unveiled Tuesday, showcasing bustling galaxies, clusters of ancient stars and wispy, dreamlike stellar nurseries.</p>
            </div>
        </div>
    </div>
</div>
<br>
<br>
<hr>
<div class="container">
    <div class="row">
        <div class="col-md-9 mb-4 border">

            <h1 class="mb-2 p-4 fst-italic text-center" style="font-size:30px;"><b>From Rajdeep's Bureau</b></h1>
            <div class="row">
                <?php
                include_once "config.php";
                $query = mysqli_query($conn, "select * from news order by news_id desc");
                while ($row = mysqli_fetch_array($query)) {
                ?>

                    <div class="col-md-6 border">
                        <div class="blog-post p-4 mb-3 mt-1">
                            <h1 class="blog-post-title"><a class="text-decoration-none text-dark" href="singlepage.php?single=<?php echo $row['news_id']; ?>"><?php echo $row['news_title']; ?></a></h1>
                            <p class="blog-post-meta"><?php echo $row['news_date']; ?> by admin</p>
                            <hr>
                            <a class="mt-4"><img class="thumbimg" src="images/<?php echo $row['thumbnail']; ?>" alt="" width="350" height="auto"></a>
                            <blockquote><?php echo substr($row['news_description'], 0, 200); ?></blockquote><a href="singlepage.php?single=<?php echo $row['news_id']; ?>" class="btn btn-primary btn-lg">Read More</a>
                        </div><br>
                    </div>
                <?php } ?>
            </div>
        </div>

        <div class="col-md-3 mb-4 border">
            <div class="bg-light text-dark m-4 p-3">
                <h3 class="text-center"><b>About us</b></h3>
                <blockquote>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Saepe porro modi velit aliquid debitis quisquam beatae eos sapiente, minus dolor eveniet fuga! Tenetur, voluptas! Optio a sit maiores deserunt esse!</p>
                </blockquote>
            </div>

            <div class="p-3 m-4" style="font-size:17px;">
                <h3><b>Categories</b></h3>
                <ul class="list-styled">
                    <?php
                    include_once "config.php";
                    $query1 = mysqli_query($conn, "select * from category");
                    while ($row1 = mysqli_fetch_array($query1)) {
                    ?>
                        <li><a href="<?php echo $row1['category_id']; ?>"><?php echo $row1['category_name']; ?></a></li>
                    <?php } ?>
                </ul>
            </div>
            <div class="p-3 m-4" style="font-size:17px;">
                <h3><b>Live NEWS</b></h3>
                <div class="mt-3">
                    <iframe width="220" height="150" src="https://www.youtube.com/embed/_-7JWGXWiow" title="Today Breaking News LIVE : आज 05 नवंबर 2023 के मुख्य समाचार | Iran | Israel Hamas War | Lebnon" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </div>
                <div class="mt-5">
                    <iframe width="220" height="150" src="https://www.youtube.com/embed/gCNeDWCI0vo" title="🔴 Al Jazeera English | Live" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </div>
                <div class="mt-5">
                    <iframe width="220" height="150" src="https://www.youtube.com/embed/OOtxXPaQvoM" title="LIVE: Latest News Headlines and Events l ABC News Live" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </div>
                <div class="mt-5">
                    <iframe width="220" height="150" src="https://www.youtube.com/embed/ATVE4Nnr0bk" title="TV9 Bharatvarsh LIVE TV | Earthquake In Delhi-NCR | Israel Palestine War LIVE | Hamas|Russia Ukraine" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </div>
            </div>
            <div class="p-2 m-4" style="font-size:17px;">
                <h3><b>Most Read :</b></h3>
                <ul class="list-styled">
                    <?php
                    include_once "config.php";
                    $query2 = mysqli_query($conn, "select * from news order by news_id limit 3,5");
                    while ($row = mysqli_fetch_array($query2)) {
                        $title = $row['news_title'];
                    ?>
                        <li><a href="singlepage.php?single=<?php echo $row['news_id']; ?>" class="text-decoration-none"><?php echo $row['news_title']; ?></a></li><br>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </div>
</div>
<br>
<div class="bg-image"></div>

<div class="bg-text">
    <h2 style="font-size:30px; text-shadow: 2px 2px 4px #000000;">NEWS-PORTAL</h2>
    <h1 style="font-size:50px; text-shadow: 2px 2px 4px #000000;">Hi, I am Rajdeep singh</h1>
    <p style="font-size:15px; text-shadow: 2px 2px 4px #000000;">And I made this newsportal project</p>
</div>


<?php
include_once "includes/footer.php";
?>