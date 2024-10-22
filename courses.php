<?php
include("header.php"); 
?>

<!-- about section start -->
 <div class="container-fluid">
      <div class="row mb-4 py-3" id="book">
    <div class="col-sm-12 " style="background-color: rgba(0, 0, 0, 0.3);">
        <h3 class="text-light text-center" style="color:#008B8B;margin-top:50px;">R.N.COLLEGE</h3>
      <h1 class="text-light text-center typed" id="container" style="font-size:40px;" >
    COURSES

      </h1>
      <h6 class="text-white text-center"><a href="index.php" style="color:blue;">HOME ></a> COURSES</h6>
    </div>
    </div>
  <!-- course start -->
   <div class="container">
            <div class="row mb-4">
      <div class="col-sm-12 border-center border-5 border-dark">
        <h1 style="text-align:center;margin-top:20px;font-family: Protest Guerrilla, sans-serif;
        font-weight: 400;"><b> Courses we provides us 
        </b></h1>
        <hr class="shadow">
      </div>
        </div>
        </div>

        <!-- view table of courses -->
          <!--view table--->


<div class="container">
  <div class="row">
    <div class="col-sm-12">

<?php

$con=mysqli_connect("localhost","root","","rnc");
$query="select * from tbl_course";
$res=mysqli_query($con,$query);
?>



                    <table style="border:1px solid black;text-align:center;" class="table table bordered border-primary">
                        <tr>
                            <th>S.no</th>
                            <th>Courses</th>
                            <th>Duration</th>
                            <th>Fees</th>
                            <th>Total Seats</th>
                          
                                

                        </tr>
                                 <?php
                                     $a=1;
                                    while($row=mysqli_fetch_array($res))
                                        {
                                             ?>
                                            <tr>
                                        <td><?php echo $row['cid'];?></td>
                                        <td><?php echo $row['name'];?></td>
                                  
                                        <td><?php echo $row['duration'];?></td>
                                        <td><?php echo $row['fees'];?></td>
                                        <td><?php echo $row['seat'];?></td>
                                        
                                    </tr>
                                    <?php
                                    $a++;
                                    }
                                    ?>
                    </table>
    
    </div>
  </div>
</div>



    <!---view table end-->
         <!-- end of table -->

                   
   <!-- courses end -->




    <!-- Student information -->
  <div class="row mb-4 py-3 mt-3" id="std">
    <div class="col-sm-12 " style="background-color: rgba(0, 0, 0, 0.1);">
      <h1 class="text-black text-start" style="line-height:100px ; font-size: 50px; font-family: Protest Guerrilla, sans-serif; margin-left: 30px;">
        Student Information System
      </h1>
      <p  class="text-black text-start;" style="font-size: 20px;margin-left: 30px;"><b>This section will deal with all the information pertaining to a <br> 
        such as personal, 
        academic as well as digital<br> documents and student report....</b></p>
        <button<a href="#" class="btn btn-center" style="border:1px solid black;margin-left: 80px;background-color: #008B8B;" ></a>Sign In</button>
  </div>
  </div>
  <!-- student information end -->
    <!-- Important Links -->
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
  <!-- important link end -->
 </div>

</body>
</html>























<?php
include("footer.php")
?>

