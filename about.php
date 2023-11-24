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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/b3df2714ad.js" crossorigin="anonymous"></script>
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
    <link rel="stylesheet" href="css/headerstyle.css">
    <link rel="stylesheet" href="css/contactus.css">
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
                        <li class="nav-item p-3"><a class="text-decoration-none nav-link active " href="about.php"><b>About</b></a></li>
                        <li class="nav-item p-3"><a class="text-decoration-none nav-link " href="admin/index.php"><b>Login</b></a></li>
                        <li class="nav-item p-3"><a class="text-decoration-none nav-link " href="contact_us.php"><b>Contact us</b></a></li>
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
                        <input type="text" placeholder="Search.." name="search">
                        <button type="submit"><i class="fa fa-search"></i></button>
                    </form>
                </div>
            </div>
            </div>
        </nav>

        <hr>
        <div class="container text-center mt-2 mb-5">
            <div class="row">
                <div>
                    <div class="mt-3">
                        <h1 style="font-size:40px;">FOLLOW ALONG</h1>
                    </div>
                    <div class="mt-4" style=" font-size:20px; padding-left:50px; padding-right:50px;">
                        <P>Check me out at on my socialmedia where we can interact with our choice for inspiration, ideas and the latest content for web development.</P>
                    </div>
                </div>
                <div class="mt-3"><a href="www.linkedin.com/in/rajdeep-singh-2a9045270" style="font-size: 26px;border-radius: 3px;color: #303030;background:  whitesmoke;width: 40px;height: 40px;line-height: 40px; margin: 15px;" data-onhovercolor="" data-onhoverbg="" data-onleavebg="#ffffff" data-onleavecolor="#303030">
                        <i class="fab fa-linkedin-in" aria-hidden="true"></i></a>
                    <a href=" " style="font-size: 26px;border-radius: 3px;color: #303030;background:  whitesmoke; margin: 15px;width: 40px;height: 40px;line-height: 40px" data-onhovercolor="" data-onhoverbg="" data-onleavebg="#ffffff" data-onleavecolor="#303030">
                        <i class="fab fa-instagram" aria-hidden="true"></i></a>
                    <a href="" style="font-size: 26px;border-radius: 3px;color: #303030; margin: 15px;background: whitesmoke;width: 40px;height: 40px;line-height: 40px" data-onhovercolor="" data-onhoverbg="" data-onleavebg="#ffffff" data-onleavecolor="#303030">
                        <i class="fab fa-youtube" aria-hidden="true"></i></a>
                </div>
            </div>
        </div>




        <?php
        include_once "includes/footer.php";
        ?>