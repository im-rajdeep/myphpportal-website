<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="../vendor/bootstrap.min.css">
    <link rel="stylesheet" href="../css/dashboard.css">
    <link rel="stylesheet" href="../css/category.css">
    <link rel="stylesheet" href="//cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
</head>
<body class="bg-light" >
<?php
    
    session_start();
    if (!empty($_SESSION["naam"]))
    {
       $naam = $_SESSION["naam"];  
    }
?>
 <nav>
	<div class= "container-fluid navv">
	    <a href="admin_dashboard.php"  class="dashlogo">Admin_Dashboard</a>
	      <div class="dropdown">
        <div class="logobtn"><img class="logobtn" src="../assets/avatar1.jpg" alt="" style="height:42px; width:42px;"><?php echo $naam; ?></div>
          <div class="logocontent"> 
            <a class="dropone" href="logout.php"><i class='fas fa-sign-out-alt'></i> Logout</a>  
         </div></div>
	   <div class="dropdown"><button class="dropbtn"> COMMENTS</button><div class="dropcontent"> 
       	        <a href="cooments.php" class="dropone">Approved</a>
                <a href="cooments.php" class="dropone">Disapproved</a>
            	</div></div>
	  
	   <div class="dropdown"><button class="dropbtn"> SUB-CATEGORY</button><div class="dropcontent"> 
       	        <a href="add_subcategory.php" class="dropone">Add sub-category</a>
                   <a href="manage_subcategory.php" class="dropone">Manage</a>
            	</div></div> 
       <div class="dropdown"><button class="dropbtn"> CATEGORY</button><div class="dropcontent"> 
       	        <a class="dropone" href="category.php">Add category</a>
                <a class="dropone" href="manage_category.php">Manage category</a>
                </div></div>  
                
        <div class="dropdown"><button class="dropbtn"> NEWS</button><div class="dropcontent"> 
       	        <a href="manage_news.php" class="dropone">Management</a>
                <a href="add_news.php" class="dropone">Add news</a>
            	</div></div>
       <div class="dropdown mt-3"><a href="admin_dashboard.php" class="text-decoration-none text-white mt-3" style="font-size:14px;padding:20px;">HOME</a></div>
     </div>
 </nav>
 <br>