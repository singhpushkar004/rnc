<?php

?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>RNC | Home</title>
  <link rel="icon" href="images/logo.png">
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/style.css">
  <script src="js/bootstrap.bundle.js"></script>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
    integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=New+Amsterdam&display=swap" rel="stylesheet">




  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400..700&display=swap" rel="stylesheet">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Dancing+Script:wght@400..700&display=swap"
    rel="stylesheet">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Protest+Guerrilla&display=swap" rel="stylesheet">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Caveat:wght@400..700&display=swap" rel="stylesheet">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap"
    rel="stylesheet">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Lilita+One&family=Nerko+One&family=Sevillana&display=swap"
    rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Viga&display=swap" rel="stylesheet">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Bree+Serif&display=swap" rel="stylesheet">

<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>



<link href="css/splide.min.css" rel="stylesheet" />
     <script src="js/splide.min.js"></script>


  <style>
    .content {
      height: 700px;
    }

    .footer {
      height: 400px;
      background-color: #008B8B;
    }

    .nav-link:hover {
      color: red !important;
    }
    .mycard:hover
{
    margin-top: -20px;
}
.mycard{
    transition:0.4s ease;
}
    .zoom-in div{
    overflow: hidden;
   
}
.zoom-img{
    transition: 0.3s ease;
}
.zoom-in:hover img
{
   transform: scale(1.2);   
}

    .flip-card {
      background-color: transparent;
      width:400px;
      height: 250px;
      perspective: 2000px;
    }

    .flip-card-inner {
      position: relative;
      width: 100%;
      height: 100%;
      text-align: center;
      margin-left: 40px;
      transition: transform 0.6s;
      transform-style: preserve-3d;
      box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
    }

    .flip-card:hover .flip-card-inner {
      transform: rotateY(180deg);
    }

    .flip-card-front,
    .flip-card-back {
      position: absolute;
      width: 100%;
      height: 100%;
      -webkit-backface-visibility: hidden;
      backface-visibility: hidden;
    }

    .flip-card-front {

      color: black;
    }

    .flip-card-back {
      background-color: #008B8B;
      ;
      color: white;
      transform: rotateY(180deg);
    }
    #std
    {
    height:350px;
    background-image: url('images/std.jpg');
    background-size: cover;
    background-attachment: fixed;
    }
    #book
    {
    height:350px;
    background-image: url('images/book.jpg');
    background-size: cover;
    background-attachment:fixed;
    }
    #ncc
    {
    height:350px;
    background-image: url('images/ncc1.jpg');
    background-size: cover;
    background-attachment:fixed;
    }
    #nss
    {
    height:350px;
    background-image: url('images/nssslide.jpg');
    background-size: cover;
    background-attachment:fixed;
    }
    #test
    {
    height:250px;
    width:700px;
    background-image: url('images/1600w-qRHfsd-4Nmc.webp');
    background-size: cover;
    }
    #text:hover{
    color: red;
    }
    #container{
  display: inline-block;
  font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
  font-size: 20px;
  color:#008B8B;
}

.typed {
  overflow: hidden;
  white-space: nowrap;
  width: 0;
  animation: typing;
  animation-duration: 1.5s;
  animation-timing-function: steps(30, end);
  animation-fill-mode: forwards;
}
  
@keyframes typing {
  from { width: 0 }
  to { width: 100% }
}
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 300px;
  margin: auto;
  text-align: center;
  font-family: arial;
}

.title {
  color:black;
  font-size: 18px;
}



a {
  text-decoration: none;
  font-size: 22px;
  color: black;
}

button:hover, a:hover {
  opacity: 0.7;
}


    
</style>

</head>

<body>
  <!-- topbar start -->
  <div class="container-fluid">
    <div class="row " style="">
      <div class="col-sm-8  px-5 pt-3" style="background-color:#008B8B;padding:5px;">
        <span class="text-light py-3" style="text-size:50px;"> <i class="fas fa-lock tic fs-4 "></i> Online Admission $
          Enquiry</span>
        <span class="text-light" style="margin-left: 2%;"> <i class="fas fa-user tic fs-4 "></i> Grievance Redressal</span>
      </div>


      <div class="col-sm-4 text-end justify-text" style="background-color:#008B8B;padding:5px;">
        <span style="margin-left: 10px;"> <i class="fab fa-google fs-4 text-light  "></i></span>
        <span style="margin-left: 10px;"> <i class="fab fa-youtube text-light  mt-3 fs-4 "></i></span>
        <span style="margin-left: 10px;"><i class="fab fa-linkedin-in text-light fs-4 "></i></span>
        <span style="margin-left: 10px;"> <i class="fab fa-twitter text-light fs-4 "></i></span>
        <span><i class="fab fa-facebook-messenger  text-light fs-4 "></i></span>
      </div>
    </div>

    <!-- topbar close -->

    <div class="row header p-0">
      <div class="col-sm-2  text-center logo">
        <img src="images/logo (1).png" class="img-fluid h-100">
      </div>
      <div class="col-sm-8 py-3 text-center">
        <h1 style="font-family: New Amsterdam, sans-serif; color:#008B8B; font-size:70px;"><b>RASH NARAYAN COLLEGE,
            PANDAUL</b></h1>
        <h5><b>(A Constituent Unit of Lalit Narayan Mithila University, Darbhanga)</b></h5>
        <hr class="shadow">

      </div>
      <div class="col-sm-2">
        <img src="images/education.jpg" class="img-fluid " style="height:150px;">
      </div>
    </div>


    <!-- navbar start -->
    <div class="row">
      <div class="col-sm-12 p-0 m-0" style="color:#008B8B;">
        <nav class="navbar navbar-expand-lg nav_main text-center">
          <div class="container-fluid ">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
              data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
              aria-label="Toggle navigation" style="border:1px solid grey;">
              <i class="fas fa-bars" style="color:red;"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav mx-auto mb-2 mb-lg-0" style="color:white; ">
                <li class="nav-item">
                  <a class="nav-link" aria-current="page" href="index.php"
                    style="  font-family: Bree Serif, serif;
                    font-weight: 400;color:#008B8B; font-size: 20px; ">HOME ||</a>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="about.php" id="navbarDropdown" role="button"
                    data-bs-toggle="dropdown" aria-expanded="false"
                    style="  font-family: Bree Serif, serif;
                    font-weight: 400; font-size: 20px;color:#008B8B; ">
                    ABOUT US ||
                  </a>
                  <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="about.php">About College</a></li>
                    <li><a class="dropdown-item" href="vision.php">Vision Mission</a></li>
                    <li><a class="dropdown-item" href="vchancellor.php">Vice Chancellor Desk</a></li>
                    <li><a class="dropdown-item" href="principal.php">Principal's Desk</a></li>
                    <li><a class="dropdown-item" href="pprincipal.php">Previous Principal</a></li>
                    <li><a class="dropdown-item" href="achievement.php">Achievement</a></li>
                  </ul>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="academics.php" id="navbarDropdown" role="button"
                    data-bs-toggle="dropdown" aria-expanded="false"
                    style="font-family: Bree Serif, serif;
                    font-weight: 400; font-size: 20px;color:#008B8B; ">
                    ACADEMICS ||
                  </a>
                  <ul class="dropdown-menu" aria-labelledby="navbarDropdown">                   
                    <li><a class="dropdown-item" href="teaching.php">TEACHING STAFF</a></li>
                    <li><a class="dropdown-item" href="nonteaching.php">NON-TEACHING STAFF</a></li>                   
                  </ul>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="about.php" id="navbarDropdown" role="button"
                    data-bs-toggle="dropdown" aria-expanded="false"
                    style="  font-family: Bree Serif, serif;
                    font-weight: 400; font-size: 20px;color:#008B8B; ">
                    COMMITTEES AND CELLS ||
                  </a>
                  <?php

include("admin/connection.php");
$query3="select * from tbl_committee";
$res3=mysqli_query($con,$query3);

?>
                  <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <?php
while($row3=mysqli_fetch_array($res3))
{

?>
                    <li><a class="dropdown-item" href="cc.php? ccid=<?php echo $row3['ccid']; ?>"><?php echo $row3['name'];?></a></li>
<?php
}
?>
                    
                  </ul>
                </li>

                
                <li class="nav-item">
                  <a class="nav-link" aria-current="page" href="courses.php"
                    style="font-family: Bree Serif, serif;
                    font-weight: 400; font-size: 20px;color:#008B8B; ">COURSES ||</a>
                </li>
                
                
                <li class="nav-item">
                  <a class="nav-link" aria-current="page" href="gallery.php"
                    style="font-family: Bree Serif, serif;
                    font-weight: 400; font-size: 20px;color:#008B8B; ">GALLERY ||</a>
                </li>
                

               
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="academics.php" id="navbarDropdown" role="button"
                    data-bs-toggle="dropdown" aria-expanded="false"
                    style="font-family: Bree Serif, serif;
                    font-weight: 400; font-size: 20px;color:#008B8B; ">
                    STUDENT SUPPORT ||
                  </a>
                  <ul class="dropdown-menu" aria-labelledby="navbarDropdown">                   
                    <li><a class="dropdown-item" href="ncc.php">NATIONAL CADIT CORPS(NCC)</a></li>
                    <li><a class="dropdown-item" href="nss.php">NATIONAL SURVICES SCHEMES</a></li>                   
                  </ul>
                </li>
                <li class="nav-item">
                  <a class="nav-link" aria-current="page" href="contact.php"
                    style="font-family: Bree Serif, serif;
                    font-weight: 400; font-size: 20px;color:#008B8B; ">CONTACT US ||</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" aria-current="page" href="feedback.php"
                    style="font-family: Bree Serif, serif;
                    font-weight: 400; font-size: 20px;color:#008B8B; ">FEEDBACK ||</a>
                </li>
              </ul>
            </div>
          </div>
        </nav>

      </div>
    </div>


    <!-- navbar close -->

  </div>

  </div>
  
