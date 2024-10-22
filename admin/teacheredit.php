<?php
include("header.php");
include("left.php");
$tid=$_REQUEST['tid'];
//echo $tid;
include("connection.php");
$query="select * from tbl_teacher";
$res=mysqli_query($con,$query);
//header("location:viewnonteaching.php")
?>
     <div class="col-sm-9">
        <div class="row">
            <div class="col-sm-6 mx-auto shadow">

            
        <h3 class="text-center fw-3 mt-5">Edit Here!!</h3>
        <?php
        if($row=mysqli_fetch_array($res))
        {
        ?>
    <form action="updateteacher.php" method="post" enctype="multipart/form-data">
            <input type="hidden" name="tid" value="<?php echo $tid; ?>" readonly="" /><br/>
            Enter Name:
            <input type="text" name="name" required="true" value="<?php echo $row['name']; ?>" style="width:300px"/></br> </br>
            Enter Designation:
            <input type="text" name="designation" required="true" value="<?php echo $row['designation']; ?>"/><br><br>
            Enter Qualification:
            <input type="text" name="qualification" required="true" value="<?php echo $row['qualification']; ?>"/></br> </br>
            Enter Department:
            <input type="text" name="department" required="true" value="<?php echo $row['department'];?>"/><br><br>
            Enter Email:
            <input type="email" name="email" required="true" readonly="" value="<?php echo $row['email']; ?>"/></br> </br>
            Enter Mobile No.:
            <input type="text" name="mobile" required="true" value="<?php echo $row['mobileno']; ?>"/><br><br>
            <button class="btn btn-dark w-100"><input type="submit" value="Update"></button>
        </form>
        <?php
        }
        ?>
        </div>
        </div>     
</div>
    </body>
</html>