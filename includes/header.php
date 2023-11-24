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
  <button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fa-solid fa-arrow-up"></i> Top
  </button>
  <header>
    <!-- Responsive navbar-->
    <nav class="navbar navbar-expand-lg navbar-light text-dark border-bottom border-2" >
      <div class="container px-lg-5">
        <a class="navbar-brand text-secondary" style="font-weight:700; font-size:40px; margin-left:-20px; margin-top:10px;" href="index.php"><span class="text-dark">SINGH</span>_PORTAL</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ms-auto " style="font-size:18px;">
            <li class="nav-item p-3"><a class="text-decoration-none nav-link active " aria-current="page" href="index.php"><b>Home</b></a></li>
            <li class="nav-item p-3"><a class="text-decoration-none nav-link  " href="about.php"><b>About</b></a></li>
            <li class="nav-item p-3"><a class="text-decoration-none nav-link " href="admin/index.php"><b>Login</b></a></li>
            <li class="nav-item p-3"><a class="text-decoration-none nav-link " href="contact_us.php"><b>Contact us</b></a></li>
          </ul>
        </div>
      </div>
    </nav>
    <nav class="navbar navbar-expand-lg border-bottom border-2" style="margin-top:-20px;">
      <div class="topnav collapse navbar-collapse justify-content-between" style="font-size:15px;">
        <div class="modalhead"><button type="button" class="border-0 text-muted modalbutton">NEWS</button>
          <div class="modalcontent">
            <h4 class="contenthead">News Assets</h4>
            <hr>
            <p class="contenthead">News that is published must be factual and error-free; only then will people subscribe to a newspaper. Newspapers may be delivered at our doorsteps or picked up at shops or from hawkers on the street. The general public depends on authentic published news.</p>
          </div>
        </div>
        <div class="modalhead"><button type="button" class="border-0 text-muted modalbutton">MEDIA</button>
          <div class="modalcontent">
            <h4 class="contenthead">Media Assets</h4>
            <hr>
            <p class="contenthead">Media refers in general to the various channels of communication, mass communication, more so. The various channels such as television, radio, newspaper and now the internet are popular media besides magazines and journals.</p>
          </div>
        </div>
        <div class="modalhead"><button type="button" class="border-0 text-muted modalbutton">WORLD</button>
          <div class="modalcontent">
            <h4 class="contenthead">World Assets</h4>
            <hr>
            <p class="contenthead"> People are fortunate to have access to resources and a place where live peacefully. Our world is filled with amazing people who can speak different languages, live in different places, and follow different traditions. But the morals, values, and compassion towards each other remain the same.</p>
          </div>
        </div>
        <div class="modalhead"><button type="button" class="border-0 text-muted modalbutton">ARTICLES</button>
          <div class="modalcontent">
            <h4 class="contenthead">Articles Assets</h4>
            <hr>
            <p class="contenthead">While you may see this as a recent change in news reporting, it is neither restricted to the press nor a new development, though the nature of online media consumption may have promoted it.</p>
          </div>
        </div>

        <div class="search-container">
          <form action="search.php" method="post">
            <input type="text" placeholder="Search.." name="search">
            <button type="searchsubmit"><i class="fa fa-search"></i></button>
          </form>
        </div>
      </div>
      </div>
    </nav>
    <!-- Header-->

    <div class="container">
      <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators opacity-75 p-1 text-center">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
          <li data-target="#myCarousel" data-slide-to="3"></li>
          <li data-target="#myCarousel" data-slide-to="4"></li>
          <li data-target="#myCarousel" data-slide-to="5"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
          <div class="item active">
            <img src="assets/photoslider1a.jpg" alt="photo1" style="width:100% ; height:450px;">
          </div>

          <div class="item">
            <img src="assets/photoslider2b.jpg" alt="photo2" style="width:100%; height:450px;">
          </div>

          <div class="item">
            <img src="assets/photo-slider3c.jpg" alt="photo3" style="width:100%; height:450px;">
          </div>

          <div class="item">
            <img src="assets/newspaperlog.jpg" alt="photo4" style="width:100%; height:450px;">
          </div>

          <div class="item">
            <img src="assets/photoslider5.jpg" alt="photo3" style="width:100%; height:450px;">
          </div>

          <div class="item">
            <img src="assets/photo6.jpg" alt="photo3" style="width:100%; height:450px;">
          </div>
        </div>

        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
          <span class="icon-prev" aria="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
          <span class="icon-next" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>
  </header>
  <br>
  <!-- Page Content-->
  <section class="container">
    <div class="container text-center mb-3 fst-italic">
      <h1 style="font-size:50px;">Latest News Posts</h1>
    </div>
    <hr>
    <div class="container mt-3 ">