<?php
include("header.php");
?>
<?php
include("admin/connection.php");
$query4="select * from tbl_mentor";
$res4=mysqli_query($con,$query4);

?>
<div class="container-fluid">



  <!-- navbar close -->
  <!-- slider start -->
  <div class="row ">
    <div class="col-sm-9 p-0">
      <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">


          <?php
          include("admin/connection.php");
          $query="select * from tbl_slider";
          $res=mysqli_query($con,$query);
           
          while($row=mysqli_fetch_array($res))
          {
          ?>
          <div class="carousel-item active">
            <img src="admin/slider/<?php echo $row['picname'];?>" class="d-block  img-fluid" alt="h-100"
              style="height:400px; ">
          </div>
          <?php
          }
          ?>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
          data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
          data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>

    </div>
    <!-- latest update -->

    <div class="col-sm-3  p-0" style="background-color:#008B8B;border:4px solid white;">
      <h3 style=" text-align:center" class="text-white mt-3"><b>Latest News</b></h3>

      <marquee behavior="scroll" direction="up" height="280px" onmouseover="stop()" onmouseout="start()"
        style="padding-left:4%; color:white;">
        <?php
           include("admin/connection.php");
           $query2 ="select * from tbl_notification order by nid desc";
           $res2 =mysqli_query($con,$query2);
          $b=1;
          while($row2=mysqli_fetch_array($res2))
          {
            ?>
        <p><a style="color:white;text-decoration:underline;"
            href="http://localhost/RNC/admin/notice/<?php echo $row2['file'];?>">
            <?php echo $row2['message'];?>
          </a></p>
        <?php
            $b++;
          }
          ?>

      </marquee>
    </div>
  </div>
  <!-- latest end -->
  <!-- slider end -->


  <!--about section-->
  <div class="row mb-4 mx-auto" data-aos="fade-up">
    <div class="col-sm-12 border-center border-5 border-dark">
      <h1 style="text-align:center;margin-top:20px;font-family: Protest Guerrilla, sans-serif;
font-weight: 400;"><b>About Us </b></h1>
      <hr class="shadow">
    </div>
  </div>
  <div class="container mx-auto" data-aos="fade-right">
    <div class="row">
      <div class="col-sm-6">
        <p style="text-align: justify;color:#008B8B;font-size: 20px;font-family: Playfair Display, serif;">R.N. College,
          Pandaul was established on June 01, 1959 as an Institution of Higher Education with the mission to spread
          the light of knowledge among the downtrodden lot of Mithilanchal and thereby enabling them to develop as
          worthy citizens of the country with a sense of genuine pride in their hoary cultural traditions.
          We have tried to provide the best education possible in the streams of science, arts and commerce. An
          evidence of the success of these endeavors is that the college has consistently maintained its position as a
          ‘college of choice’ for many of the best students of Bihar. We also keep ourselves aware of the recent trend
          in the industry and ensure that our students meet with the contemporary demands in terms of their
          employability.</p>
          <span><a href="gallery.php">VIEW MORE</a></span>

      </div>
      <div class="col-sm-6">
        <div class="row">
          <div class="col-sm-6 zoom-in">
            <img src="images/b1.jpg"   class="p-1 border shadow img-fluid" />
          </div>
          <div class="col-sm-6 zoom-in">
            <img src="images/b2.jpg"  class="p-1 border shadow img-fluid" />
          </div>
        </div>
        <div class="row mt-4">
          <div class="col-sm-6 zoom-in">
            <img src="images/b5.jpg" height="200px" width="300px" class="p-1 border shadow img-fluid" />
          </div>
          <div class="col-sm-6 zoom-in">
            <img src="images/b4.jpg" height="200px" width="300px" class="p-1 border shadow img-fluid" />
          </div>
        </div>

      </div>
    </div>
  </div>
  <hr class="shadow">


  <!--about section end-->

 

    <!-- card2 end -->

    <!-- our mentor start -->
    <div class="row mb-4 mt-5">
      <div class="col-sm-12 border-center border-5 border-dark">
        <h1 style="text-align:center; margin-top:20px;  font-family: Protest Guerrilla, sans-serif;
          font-weight: 400;"><b> Our Mentor </b></h1>
        <div class="row mt-2 py-2">
          <?php

         $mentor=1;
         while($row4=mysqli_fetch_array($res4))
          {
          ?>
          <div class="col-sm-3 py-3">
            <div class="card h-100 shadow mycard">
              <img src="admin/mentor/<?php echo $row4['picname'];?>" class="card-img-top" alt="..." height="300px;">
              <div class="card-body">
                <h4 class="card-text text-center">
                  <?php echo $row4['name']?>
                </h4>
              



              </div>
            </div>
          </div>




          <?php

          $mentor++;
         }
         ?>
        </div>
      </div>
      <!-- our mentor end -->

      <!-- our testimonial start -->

      <div class="row mb-4 mt-3" data-aos="zoom-in-right">
        <div class="col-sm-12 border-center border-5 border-dark">
          <h1 style="text-align:center;  font-family: Protest Guerrilla, sans-serif;
        font-weight: 400;"><b> Our Testimonal </b></h1>

        </div>
      </div>
    </div>
    <div class="row" data-aos="zoom-in-right">
      <div class="col-sm-6 mt-3 py-3">
        <h1 style=" font-family: Protest Guerrilla, sans-serif;
        font-weight: 400;color:#008B8B;margin-left:30px;">What our
          People say!</h1><br>
        <h4 style="  font-family: Playfair Display, serif;margin-left:30px;">
          We have tried to provide the best education<br> possible in the streams
          of science, arts and commerce.
          Have Questions ? </h4>
        <h5 style="color:#008B8B;font-family: Playfair Display, serif;margin-left:30px;">Get in touch</h5>
      </div>
      <div class="col-sm-6 " id="test"
        style=" ;width:700px; border-radius: 20px;box-shadow:50px;background-color: rgba(0, 0, 0, 0.1);">
        <h4 class="mt-5 text-center" id="text" style=" font-family: Viga, sans-serif;
      font-weight: 400;">It was incredible,time flew I had a great <br>learning experience..</h4>
        <h5 style="color: #008B8B;margin-left: 350px;">Shivam Bsc Math's</h5>
      </div>
    </div>

    <!-- our testimonial end -->
    <!-- courses -->
    <div class="row  mb-4 mx-auto mt-5" id="book">
      <div class="col-sm-12 text-center" style="background-color: rgba(0, 0, 0, 0.1);">
        <div class="row">
          <div class="col-sm-3" style="margin-top:80px;">
            <i class="fa-solid fa-hotel text-light fs-1 "></i>
            <h3 style="color: white;margin-top: 10px;">60+</h3>
            <h5 style="color: white;">Years of Estabilshment</h5>
          </div>
          <div class="col-sm-3" style="margin-top:80px;">
            <i class="fa-solid fa-book text-light fs-1"></i>
            <h3 style="color: white;margin-top: 10px;">17+</h3>
            <h5 style="color: white;">Courses Available</h5>
          </div>
          <div class="col-sm-3" style="margin-top:80px;">
            <i class="fa-solid fa-users text-light fs-1"></i>
            <h3 style="color: white;margin-top: 10px;">4000+</h3>
            <h5 style="color: white;">Students</h5>
          </div>
          <div class="col-sm-3" style="margin-top:80px;">
            <i class="fa-solid fa-chalkboard-user text-light fs-1 "></i>
            <h3 style="color: white;margin-top: 10px;">30+</h3>
            <h5 style="color: white;">Staff</h5>
          </div>
        </div>
      </div>
    </div>
    <!-- courses end -->





    <!-- view gallery -->
    <div class="row mx-auto mt-3">
      <div class="col-sm-12 border-center border-5 border-dark">
        <h1 style="text-align:center;  font-family: Protest Guerrilla, sans-serif;
            font-weight: 400;"><b> Our Gallery </b></h1>

      </div>
    </div>

    <div class="container mx-auto">
      <div class="row">

        <?php
          include("admin/connection.php");
          $query="select * from tbl_gallery order by gid desc";
          $res=mysqli_query($con,$query);
          $a=1;
          while($row=mysqli_fetch_array($res))
          {
          ?>
        <div class="col-sm-3 mt-2 py-2">
          <div class="card shadow zoom-in" style="height:300px;">
            <img src="admin/gallery/<?php echo $row['picname'];?>" class="p-3 border shadow img-fluid" height="300px"
              width="300px" />
            <div class="card-body">
              <div class="card-title">
                <p class="text-center fw-bold">

                </p>
              </div>
            </div>
          </div>

        </div>
        <?php
          $a++;
          }
          ?>

      </div>

    </div>

    <span style="margin-left:120px;mx-auto;"><a href="gallery.php"><button class="btn btn-dark">View
          more</button></span></a>
  </div>
  <!-- view gallery end -->


  <!-- Student information -->
  <div class="row mb-4 py-3 mt-5" id="std">
    <div class="col-sm-12 " style="background-color: rgba(0, 0, 0, 0.1);">
      <h1 class="text-black text-start"
        style="line-height:100px ; font-size: 50px; font-family: Protest Guerrilla, sans-serif; margin-left: 30px;">
        Student Information System
      </h1>
      <p class="text-black text-start;" style="font-size: 20px;margin-left: 30px;"><b>This section will deal with all
          the
          information pertaining to a <br>
          such as personal,
          academic as well as digital<br> documents and student report....</b></p>
      <button<a href="#" class="btn btn-center"
        style="border:1px solid black;margin-left: 80px;background-color: #008B8B;"></a>Sign In</button>
    </div>
  </div>
  <!-- student information end -->
 

  <!-- Important Links split carosel-->
  <div class="container">
    <div class="row mb-4 mt-3 py-3">
      <div class="col-sm-12 border-center border-5 border-dark">
        <h1 style="text-align:center;  font-family: Protest Guerrilla, sans-serif;
        font-weight: 400;"><b> Important Links </b></h1>
        <hr class="shadow">
      </div>
    </div>
    <div class="row mt-2 py-2">
      <div class="col-sm-3">
        <img src="images/ql1.jpg" alt="">
      </div>
      <div class="col-sm-3">
        <img src="images/ql5 (1).png" alt="">
      </div>
      <div class="col-sm-3">
        <img src="images/ql3.png" alt="">
      </div>
      <div class="col-sm-3">
        <img src="images/ql6.jpg" alt="">
      </div>
    </div>
  </div>

  <!-- important link split carosal end -->





  <!-- footer start -->

  <div class="row footer">
    <div class="col-sm-12 p-0" height="400px">
      <img src="images/shape1 (1).png" alt="" class="w-100 ">
      <div class="row">
        <div class="col-sm-3 text-light text-center p-0 m-0" style="margin-left: 30px;">
          <h4 class="text-light">Important Link</h4>



          <h6>
            Lalit Narayan Mithila University<br>
            University Grants Commision<br>
            NPTEL Lectures<br>
            Swayam Student Portal<br>
            Grievance Redressal System<br>
            e-PG Pathshala
          </h6>

        </div>
        <div class="col-sm-3 text-light text-center p-0 m-0">
          <h4 class="text-light">Contact Us</h4>

          <h6>Rash Narayan College Main Road, Sagarpur Madhubani, Bihar - 847234</h6>
          <h6> <i class="fa-solid fa-phone"></i> 91990-43650</h6><br>
          <h6> <i class="fa-solid fa-envelope"></i> rasnarayancollege@gmail.com</h6>



        </div>
        <div class="col-sm-3 text-light text-center p-0 m-0">
          <h4 class="text-light">About Us</h4>
          <h6>
            Education System<br>
            Education Policy<br>
            Education ministry<br>

          </h6>
        </div>
        <div class="col-sm-3 text-light text-center p-0 m-0">


          <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d227826.4335143713!2d80.94616599088052!3d26.84669368594825!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x399bfd991f32b16b%3A0x93ccba8909978be7!2sLucknow%2C%20Uttar%20Pradesh!5e0!3m2!1sen!2sin!4v1725269713879!5m2!1sen!2sin"
            width="50%" height="250" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
      </div>

    </div>
  </div>



  <!-- footer end -->



</div>

<script>
  AOS.init();


  if (document.getElementById('slider1') != null) {
    var slider1 = new Splide('#slider1', {
      type: 'loop',
      perPage: 4,
      rewindByDrag: true,
      focus: 0,
      autoplay: true,
      speed: 2000,

      breakpoints: {
        991: {
          perPage: 2
        },
        561: {
          perPage: 1
        },
      }
    });

    slider1.mount();
  }

</script>

</body>

</html>