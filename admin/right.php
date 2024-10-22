<?php
include("connection.php");
$query="select count(*) from tbl_teacher";
$res=mysqli_query($con,$query);
if($row=mysqli_fetch_array($res));
{
    $name=$row[0];
}

?>
<?php
include("connection.php");
$query1="select count(*) from tbl_nonteacher";
$res1=mysqli_query($con,$query1);
if($row1=mysqli_fetch_array($res1));
{
    $name1=$row1[0];
}
?>
<?php
include("connection.php");
$query2="select count(*) from tbl_notification";
$res2=mysqli_query($con,$query2);
if($row2=mysqli_fetch_array($res2));
{
    $name2=$row2[0];
}
?>
<?php
include("connection.php");
$query3="select count(*) from tbl_gallery";
$res3=mysqli_query($con,$query3);
if($row3=mysqli_fetch_array($res3));
{
    $name3=$row3[0];
}
?>
<?php
include("connection.php");
$query4="select count(*) from tbl_contact";
$res4=mysqli_query($con,$query4);
if($row4=mysqli_fetch_array($res4));
{
    $name4=$row4[0];
}
?>
<?php
include("connection.php");
$query5="select count(*) from tbl_feedback";
$res5=mysqli_query($con,$query5);
if($row5=mysqli_fetch_array($res5));
{
    $name5=$row5[0];
}
?>


<div class="col-sm-9">
    <div class="row mt-5">
 



    </div>
                <div class="row mt-5">
                <a href="viewteaching.php" style="text-decoration:none">
                    <div class="col-sm-4">
                        <div class="card w-100 shadow border-0"  style="height:230px;">                  
                            <div class="card-body" style="text-align:center; margin-top:50px;">
                            <h1> <i class="fa-solid fa-user-tie  fa-2xl"></i>
                                <span class="ms-3"><?php echo $name?></span>
                                </h1>
                               <h3 class="mt-5"> View Teaching Staff</h3>                      
                            </div>
                          </div>
                         </a>
                    </div>
                    <div class="col-sm-4">
                    <a href="viewnonteaching.php" style="text-decoration:none">
                        <div class="card w-100 shadow border-0"  style="height:230px;">
                            <div class="card-body"style="text-align:center; margin-top:50px;">
                            <h1><i class="fa-solid fa-users   fa-2xl"></i>
                            <span class="ms-3"> <?php echo $name1?></span></h1>
                                <h3 class="mt-5"> View Non-Teaching Staff</h3>                       
                            </div>
                          </div>
                            </a>
                    </div>
                        <div class="col-sm-4">
                        <a href="viewnotification.php" style="text-decoration:none">
                        <div class="card w-100 shadow border-0"  style="height:230px;">
                            <div class="card-body" style="text-align:center; margin-top:50px;">
                            <h1><i class="fa-solid fa-comments  fa-2xl"></i>
                            <span class="ms-3"> <?php echo $name2?></span></h1>
                                <h3 class="mt-5"> View Notification</h3>                         
                            </div>
                          </div>
                    </div>
</a>                                         
                </div>
                
                <div class="row mt-5">
                    <div class="col-sm-4 ">
                    <a href="viewgallery.php" style="text-decoration:none">
                        <div class="card w-100 shadow border-0"  style="height:230px;">
                            <div class="card-body" style="text-align:center; margin-top:50px;">
                            <h1> <i class="fa-solid fa-image  fa-2xl"></i>
                            <span class="ms-3">  <?php echo $name3?></h1>
                               <h3 class="mt-5"> View Gallery</h3>
                              
                            </div>
                          </div>
                          </a>
                    </div>
                    <div class="col-sm-4 ">
                    <a href="viewcontactmessage.php"style="text-decoration:none">
                        <div class="card w-100 shadow border-0"  style="height:230px;">
                            <div class="card-body" style="text-align:center; margin-top:50px;">
                            <h1><i class="fa-solid fa-phone   fa-2xl"></i>
                            <span class="ms-3"> <?php echo $name4?></span></h1>
                               <h3 class="mt-5"> View Contact</h3>                      
                            </div>
                          </div>
</a>
                    </div>
                    <div class="col-sm-4 ">
                    <a href="viewfeedback.php" style="text-decoration:none">
                        <div class="card w-100 shadow border-0" style="height:230px;">
                            <div class="card-body"style="text-align:center; margin-top:50px;">
                                <h1><i class="fa-solid fa-address-book  fa-2xl"></i>
                                <span class="ms-3"> <?php echo $name5?></span></h1>
                               <h3 class="mt-5"> View Feedback</h3>                         
                            </div>
                          </div>
                          </a>
                    </div>
                </div>



            </div>
        </div>
     </div>
     <!-- second section end -->
    
</body>
</html>