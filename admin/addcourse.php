<?php
include("header.php");
?>
<?php

include("left.php");
?>
<div class="col-sm-9 overflow-y-scroll">
    <div class="row">
        <div class="col-sm-6 mx-auto">
            <div class="row mt-5 shadow">
                <h3 class="text-center fw-3">Add Course</h3>
                <form method="post" action="coursecode.php" enctype="multipart/form-data">
                    <lable>Enter Course Name:</lable>
                    <input type="text" name="name" class="form-control" placeholder="course" />
                    <lable>Enter Duration:</lable>
                    <input type="text" name="duration" class="form-control" placeholder="duration" />
                    <lable>Enter Fee:</lable>
                    <input type="text" name="fees" class="form-control" placeholder="fee" />
                    <lable>Enter Seat:</lable>
                    <input type="text" name="seat" class="form-control" placeholder="seat" />
                    <input type="submit" value="Upload" class="form-control btn btn-danger"/>
                </form>
     
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-8 mx-auto">
            <br>
        <table class="table table-bordered">
        <tr>
            <th class="bg-danger text-white fw-bold text-center">S.No.</th>
            <th class="bg-danger text-white fw-bold text-center">Course Name</th>
            <th class="bg-danger text-white fw-bold text-center">Duration</th>
            <th class="bg-danger text-white fw-bold text-center">Fee</th>
            <th class="bg-danger text-white fw-bold text-center">Seat</th>
            <th class="bg-danger text-white fw-bold text-center">Date of Upload</th>
            <th class="bg-danger text-white fw-bold text-center">Delete</th>
        </tr>
        <?php
        include("connection.php");
        $query="select * from tbl_course order by cid";
        $res=mysqli_query($con,$query);
        $a=1;
        while($row=mysqli_fetch_array($res))
        {        
        ?>
         <tr>
            <td><?php echo $a; ?></td>
            <td><?php echo $row['name']; ?></td>
            <td><?php echo $row['duration']; ?></td>
            <td><?php echo $row['fees']; ?></td>
            <td><?php echo $row['seat']; ?></td>
            <td><?php echo $row['doc']; ?></td>
            <td><a href="deletecourse.php? cid=<?php echo $row['cid'] ?>" class="btn btn-danger">delete</a></td>
         </tr>
         <?php
         $a++;
        }
         ?>
    </table>
</div>
    </div>
</div>
</div>
</div>
<!-- second section end -->
</body>

</html>