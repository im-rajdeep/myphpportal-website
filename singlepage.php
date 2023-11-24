<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <title>online-myphpportal</title>
  <!-- Favicon-->
  <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <!-- Bootstrap icons-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- Core theme CSS (includes Bootstrap)-->
  <link href="css/styles.css" rel="stylesheet" />
  <link rel="stylesheet" href="css/headerstyle.css">
</head>

<body>
  <header>
    <!-- Responsive navbar-->
    <nav class="navbar navbar-expand-lg navbar-light bg-light text-dark border-bottom" style="width:100%;">
      <div class="container px-lg-3">
        <a class="navbar-brand text-secondary" style="font-weight:700; font-size:40px; margin-left:-20px; margin-top:10px;" href="index.php"><span class="text-dark">SINGH</span>_PORTAL</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ms-auto " style="font-size:18px;">
            <li class="nav-item p-3"><a class="text-decoration-none nav-link" aria-current="page" href="index.php"><b>Home</b></a></li>
            <li class="nav-item p-3"><a class="text-decoration-none nav-link" href="about.php"><b>About</b></a></li>
            <li class="nav-item p-3"><a class="text-decoration-none nav-link" href="admin/index.php"><b>Login</b></a></li>
            <li class="nav-item p-3"><a class="text-decoration-none nav-link" href="contact_us.php"><b>Contact us</b></a></li>
          </ul>
        </div>
      </div>
    </nav>
    <nav class="navbar navbar-expand-lg navbar-dark bg-light border-bottom" style="margin-top:-20px;">
      <div class="topnav collapse navbar-collapse justify-content-between" style="font-size:15px;">
        <div class="modalhead"><button type="button" class="border-0 bg-light text-muted modalbutton">NEWS</button>
          <div class="modalcontent">
            <h4 class="contenthead">News Assets</h4>
            <hr>
            <p class="contenthead">News that is published must be factual and error-free; only then will people subscribe to a newspaper. Newspapers may be delivered at our doorsteps or picked up at shops or from hawkers on the street. The general public depends on authentic published news.</p>
          </div>
        </div>
        <div class="modalhead"><button type="button" class="border-0 bg-light text-muted modalbutton">MEDIA</button>
          <div class="modalcontent">
            <h4 class="contenthead">Media Assets</h4>
            <hr>
            <p class="contenthead">Media refers in general to the various channels of communication, mass communication, more so. The various channels such as television, radio, newspaper and now the internet are popular media besides magazines and journals.</p>
          </div>
        </div>
        <div class="modalhead"><button type="button" class="border-0 bg-light text-muted modalbutton">WORLD</button>
          <div class="modalcontent">
            <h4 class="contenthead">World Assets</h4>
            <hr>
            <p class="contenthead"> People are fortunate to have access to resources and a place where live peacefully. Our world is filled with amazing people who can speak different languages, live in different places, and follow different traditions. But the morals, values, and compassion towards each other remain the same.</p>
          </div>
        </div>
        <div class="modalhead"><button type="button" class="border-0 bg-light text-muted modalbutton">ARTICLES</button>
          <div class="modalcontent">
            <h4 class="contenthead">Articles Assets</h4>
            <hr>
            <p class="contenthead">While you may see this as a recent change in news reporting, it is neither restricted to the press nor a new development, though the nature of online media consumption may have promoted it.</p>
          </div>
        </div>
        <div class="search-container">
          <form action="">
            <input  type="text" placeholder="Search.." name="search">
            <button type="submit"><i class="fa fa-search"></i></button>
          </form>
        </div>
      </div>
      </div>
    </nav>
    <div class="container">
    <div class="row">
        <div class="col-md-9 mb-4">
            <h1 class="mb-4 pb-4 fst-italic border-bottom"><b>From Rajdeep's Bureau</b></h1>
            <?php
            include_once "config.php";
            $id=$_GET["single"];
            $query = mysqli_query($conn, "select * from news where news_id=$id");
            while ($row = mysqli_fetch_array($query)) {
            
             
                    $title1 = $row['news_title'];
                    $date = $row['news_date'];
                    $thumbnail = $row['thumbnail'];
                    $description = $row['news_description'];
                
            }
            ?>
                <div class="blog-post mb-4 mt-4 pt-4">
                    <h1 class="blog-post-title"><?php echo $title1;?></h1>
                    <p class="blog-post-meta"><?php echo $date; ?> by admin</p>
                    <p class="mt-4"><img src="images/<?php echo $thumbnail; ?>" alt="" width="750" height="auto"></p>
                    <blockquote><?php echo $description; ?></blockquote>
                </div><br>
                <hr>

        </div>
    
    <div class="col-md-3 mt-5 pt-2">
        <div class="bg-light text-dark m-4 p-3">
            <h3 class="text-center"><b>About us</b></h3>
            <blockquote><p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Saepe porro modi velit aliquid debitis quisquam beatae eos sapiente, minus dolor eveniet fuga! Tenetur, voluptas! Optio a sit maiores deserunt esse!</p></blockquote>
        </div>

        <div class="p-3 m-4" style="font-size:17px;">
             <h3><b>Categories</b></h3>
             <ol class="list-unstyled">
                <?php 
                  include_once "config.php";
                  $query1 = mysqli_query($conn,"select * from category");
                  while ($row1 = mysqli_fetch_array($query1)) {
                ?>
                <li><a href='#'><?php echo $row1['category_name']; ?></a></li>
                <?php } ?>
             </ol>
        </div>

    </div>
    </div>
    </div>
    


<?php
include_once "includes/footer.php";
?>