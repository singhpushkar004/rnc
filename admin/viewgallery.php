<?php
include("header.php")
?>
<?php
include("left.php")
?>
<?php
$con=mysqli_connect("localhost","root","","rnc");
$query="select * from tbl_gallery";
$res=mysqli_query($con,$query);
?>


<div class="col-sm-9">
               <div class="container">
                <h2 style="text-align:center; margin-top:20px;">View Gallery</h2>
                <div class="row mt-3">
                    <table style="border:1px solid black;text-align:center;" class="table table bordered border-primary">
                        <tr>
                            <th class="text-center bg-danger text-white">S.no</th>
                            <th class="text-center bg-danger text-white">Name</th>
                            <th class="text-center bg-danger text-white">Picname</th>
                            <th class="text-center bg-danger text-white">Date of Registration</th>
                            <th class="text-center bg-danger text-white">Status</th>
                            <th class="text-center bg-danger text-white">Delete</th>

                        </tr>
                                 <?php
                                     $a=1;
                                    while($row=mysqli_fetch_array($res))
                                        {
                                             ?>
                                            <tr>
                                        <td><?php echo $row['gid'];?></td>
                                        <td><?php echo $row['name'];?></td>
                                        <td><img src="gallery/<?php echo $row['picname'];?>" height="100px" width="100px/>"</td>
                                        <td><?php echo $row['dor'];?></td>
                                        <td><?php echo $row['status'];?></td>
                                        <td><a href="gallerydelete.php?gid=<?php echo $row['gid'];?>" <button class="btn btn-danger"  class="text-white" style="text-decoration:none">delete</a></td>
                                        

                              
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