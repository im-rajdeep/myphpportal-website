<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <link rel="stylesheet" href="../vendor/bootstrap.min.css">
    <link rel="stylesheet" href="../css/login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/b3df2714ad.js" crossorigin="anonymous"></script>
</head>
<body >
    <div class="container mt-5">
       
       <div class="col-md-5 mx-auto logbox "> 
         <div class="alert alert-danger opacity-75 text-center">
              <h3>Admin Login</h3>
        </div>

        <form action="check.php" method="post">
        <div class="mb-3 mt-3">
          <label for="email"></label>
          <input type="email" class="form-control bordered opacity-75 text-dark" id="txteid" placeholder="Enter username" required name="eid">
        </div>
        <div class="mb-3">
          <label for="pwd"></label>
          <input type="password" class="form-control bordered opacity-75" id="pwd" placeholder="Enter password" required name="txtpswd">
        </div>
        <div class="form-check mb-3 text-light">
          <label class="form-check-label">
          <input class="form-check-input" type="checkbox" name="remember"> Remember me
          </label>
        </div>
        <div><button class="btn btn-light btn-sm opacity-75 border-none"><a class="text-decoration-none text-primary" href="../index.php"><i class="fa-solid fa-house"></i> Back</a></button></div>
           <input type="submit" name="btnlogin" class="mt-3 text-center logsubmit opacity-75"></input>
        </form>
       </div>
</div>

  
</body>
</html>