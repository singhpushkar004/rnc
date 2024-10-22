<?php
include("header.php")
?>
<?php
include("left.php")
?>
<?php
include("connection.php");
$query="select * from tbl_mentor";
$res=mysqli_query($con,$query);

?>
<div class="col-sm-8 mx-auto mt-5">
    <h1> Add Mentor</h1>
    <div class="container">
        <div class="row mt-3">

            <div class="col-sm-10 shadow">
                <form method="post" action="mentorcode.php" enctype="multipart/form-data">
                    <lable>Name:</label>
                        <input type="text" name="name" class="form-control" />
                        <br>
                        <lable>Upload pic:</label>
                            <input type="file" name="file" class="form-control" />
                            <br>
                            <lable>Department:</label>
                                <input type="text" name="department" class="form-control" />
                                <br>
                                <input type="submit"  value="Upload"class="btn btn-danger w-100" />
                                <br>

                </form>
            </div>
        </div>
    </div>


    <div class="row mt-5">
        <h2 style="text-align:center">View Mentor</h2>
        <div class="col-sm-12 mt-4">
            <table style="border:1px solid black;text-align:center;" class="table table bordered border-primary">
                <tr>
                    <th>S.no</th>
                    <th>Name</th>
                    <th>Picname</th>
                    <th>Department</th>
                    <th>Dom</th>
                    <th>Status</th>
                    <th>Delete</th>

                </tr>
                       <?php
$a=1;
while($row=mysqli_fetch_array($res))
{

                       ?>
                                    <tr>
                                <td><?php echo $row['mid'];?></td>
                                <td><?php echo $row['name'];?></td>
                                <td><img src="mentor/<?php echo $row['picname'];?>" height="100px" width="100px"/></td>
                                <td><?php echo $row['department'];?></td>
                                <td><?php echo $row['dom'];?></td>
                                <td><?php echo $row['status'];?></td>
                                <td><a href="mentordelete.php?mid=<?php echo $row['mid'];?>" class="btn btn-danger">delete</a></td>
                                

                      
                            </tr>
                            <?php
                            $a++;
                            }
                            ?>
            </table>
   
        </div>
    </div>
</div>




<!-- second section end -->
</div>
</body>

</html>