<?php
include("header.php");
include("left.php");
$ntid=$_REQUEST['ntid'];
//echo $ntid;
include("connection.php");
$query="select * from tbl_nonteacher";
$res=mysqli_query($con,$query);
?>
<div class="col-sm-9">
    <div class="row mt-5">
        <div class="col-sm-6 mx-auto shadow">


        <h1 class="text-center fw-3 mt-5">Edit Here!!</h1>
        <?php
        if($row=mysqli_fetch_array($res))
        {
        ?>
    <form action="updatenonteacher.php" method="post" enctype="multipart/form-data">
            <input type="hidden" class="form-control" name="ntid" value="<?php echo $ntid; ?>" readonly="" /><br/>
            Enter Name:
            <input type="text" name="name" required="true" class="form-control" value="<?php echo $row['name']; ?>"/></br> 
            Enter Designation:
            <input type="text" name="designation" required="true" class="form-control"value="<?php echo $row['designation']; ?>"/><br>
            Enter Qualification:
            <input type="text" name="qualification" required="true" class="form-control" value="<?php echo $row['qualification']; ?>"/></br> 
            Enter Mobile No.:
            <input type="text" name="mobile" required="true" value="<?php echo $row['mobileno']; ?>"/><br><br>
            <input type="submit" value="Update"class="btn btn-dark w-100"/>
        </form>
        <?php
        }
        ?>
        </div>
    </div>
</div>
    </body>
</html>