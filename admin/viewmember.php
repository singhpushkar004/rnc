<?php
include("header.php")
?>
<?php
include("left.php")
?>
<?php
$con=mysqli_connect("localhost","root","","rnc");
$query="select * from tbl_com_member";
$res=mysqli_query($con,$query);
$query2="select * from tbl_committee";
$res2=mysqli_query($con,$query2);
?>


<div class="col-sm-9">
               <div class="container">
               <h2 style="text-align:center; margin-top:20px;">View Member</h2>
                <div class="row mt-3">
                    <table style="border:1px solid black;text-align:center;" class="table table bordered border-primary">
                      
                        <tr>
                            <th class="text-center bg-danger text-white">CCID</th>
                            <th class="text-center bg-danger text-white">Committee name</th>
                            <th class="text-center bg-danger text-white"> Member Name</th>                         
                            <th class="text-center bg-danger text-white">Department</th>
                            <th class="text-center bg-danger text-white">Designation</th>                                              
                            <th class="text-center bg-danger text-white">Date of Add committee</th>
                            <th class="text-center bg-danger text-white">Status</th>
                            <th class="text-center bg-danger text-white">Delete</th>
                            <th class="text-center bg-danger text-white">Edit</th>
                           
                        </tr>
                        <?php

while($row2=mysqli_fetch_array($res2))
{
    $cname=$row2['name'];
}
?>
                                 <?php
                                     $a=1;
                                    while($row=mysqli_fetch_array($res))
                                        {
                                             ?>
                                            <tr>
                                        <td><?php echo $row['ccid'];?></td>
                                        <td><?php echo $cname?></td>
                                        <td><?php echo $row['name'];?></td>
                                        <td><?php echo $row['department'];?></td>
                                        <td><?php echo $row['designation'];?></td>
                                        <td><?php echo $row['doa'];?></td>
                                        <td><?php echo $row['status'];?></td>                            
                                        <td><a href="memberdelete.php?cmid=<?php echo $row['cmid'];?>" <button class="btn btn-danger"  class="text-white" style="text-decoration:none">delete</a></td>
                                        <td><a href="editmember.php?cmid=<?php echo $row['cmid'];?>" <button class="btn btn-warning"  class="text-white" style="text-decoration:none">edit</a></td>
                                        
                                        

                              
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