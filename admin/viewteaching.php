<?php
include("header.php")
?>
<?php
include("left.php")
?>
<?php
$con=mysqli_connect("localhost","root","","rnc");
$query="select * from tbl_teacher";
$res=mysqli_query($con,$query);
?>


<div class="col-sm-9 overflow-x-scroll overflow-y-scroll">
    <h2 style=" text-align:center;">View Teaching Staff</h2>
    <div class="container">
        <div class="row mt-3 py-2">

            <table style="border:1px solid black;text-align:center;" class="table table bordered ">
                <tr>
                    <th class="text-center bg-danger text-white">S.no</th>
                    <th class="text-center bg-danger text-white">Name</th>
                    <th class="text-center bg-danger text-white">Picname</th>
                    <th class="text-center bg-danger text-white">Designation</th>
                    <th class="text-center bg-danger text-white">Qualification</th>
                    <th class="text-center bg-danger text-white">Department</th>
                    <th class="text-center bg-danger text-white">Email</th>
                    <th class="text-center bg-danger text-white">Mobile no</th>
                    <th class="text-center bg-danger text-white">Date of Registration</th>
                    <th class="text-center bg-danger text-white">Status</th>
                    <th class="text-center bg-danger text-white">Delete</th>
                    <th class="text-center bg-danger text-white">Edit</th>
                </tr>
                <?php
                                     $a=1;
                                    while($row=mysqli_fetch_array($res))
                                        {
                                             ?>
                <tr>
                    <td>
                        <?php echo $row['tid'];?>
                    </td>
                    <td>
                        <?php echo $row['name'];?>
                    </td>
                    <td><img src="teacher/<?php echo $row['picname'];?>" height="100px" width="100px"/> </td>
                    <td>
                        <?php echo $row['designation'];?>
                    </td>
                    <td>
                        <?php echo $row['qualification'];?>
                    </td>
                    <td>
                        <?php echo $row['department'];?>
                    </td>
                    <td>
                        <?php echo $row['email'];?>
                    </td>
                    <td>
                        <?php echo $row['mobileno'];?>
                    </td>
                    <td>
                        <?php echo $row['dor'];?>
                    </td>
                    <td>
                        <?php echo $row['status'];?>
                    </td>
                    <td><a href="teacherdelete.php?tid=<?php echo $row['tid'];?>" style="text-decoration:none" class="text-white"><button class="btn btn-danger">delete</a></td></button>
                    <td><a href="teacheredit.php?tid=<?php echo $row['tid'];?>"> <button class="btn btn-warning"  class="text-white" style="text-decoration:none">Edit</a></td></button>
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