<?php
session_start();
if($_SESSION ['admin']=="")
{
    session_destroy();
    header("location:index.php?msg=3");
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RNC | Admin Panel</title>
    <link rel="icon" href="../images/logo.png">
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <script src="js/bootstrap.bundle.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
        <style>
            .card:hover{
                background-color:#008B8B ;
            }
            .btn:hover{
                background-color:#008B8B;
            }
        
            h5{
                text-shadow: 0 0 3px #FF0000,0 0 5px #0000FF;
            }
            h3{
                color:white;
                text-shadow:1px 1px 2px black,0 0 25px blue,0 0 5px darkblue;
            }
            
    #log:hover {
      color: red !important;
    }

        </style>
</head>
<body>
    <!-- first section start -->
    <div class="container-fluid">
        <div class="row" style="background-color:#008B8B;">
            <div class="col-sm-10 pt-2">
                <?php
                date_default_timezone_set('Asia/Kolkata');
              $currentTime = date('H:i:s');
              if ($currentTime >= '05:00:00' && $currentTime < '12:00:00') {
                  $greeting = "GOOD MORNING!";
              } elseif ($currentTime >= '12:00:00' && $currentTime < '16:00:00') {
                  $greeting = "GOOD AFTERNOON!";
              } elseif ($currentTime >= '16:00:00' && $currentTime < '22:00:00') {
                  $greeting = "GOOD EVENING!";
              } 
              else {
                  $greeting = "GOOD NIGHT!";
              }
              ?>
              <div class="row text-white">
               <H2 style="font-family:Algerian;">
              <?php
                echo $greeting;
               echo " ADMIN MASTER ";
               
               ?></H2>
              </div>
                
            </div>
            <div class="col-sm-2 text-end pt-1" class="log">
                <span class="text-white"><?php echo $_SESSION['admin'];?></span>
                <div class="dropdown">
                    <button class="btn btn-outline-light dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fa-solid fa-right-from-bracket text-white"></i>
                    </button>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="logout.php">Logout</a></li>
                      <li><a class="dropdown-item" href="changepassword.php">Change Password</a></li>
                     
                    </ul>
                  </div>
            </div>
        </div>
    </div>
    <!-- first section end -->
    <!-- second section start -->
     <div class="container-fluid">
        <div class="row">