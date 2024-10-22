<?php
include("header.php")
?>
<?php
include("left.php")
?>
<?php
$con=mysqli_connect("localhost","root","","rnc");
$query="select * from tbl_slider";
$res=mysqli_query($con,$query);
?>


<div class="col-sm-9">
               <div class="container">
                <h2 style="text-align:center; margin-top:20px;">View Slider</h2>
                <div class="row mt-3">
                    <table style="border:1px solid black;text-align:center;" class="table table bordered border-primary">
                        <tr>
                            <th class="text-center bg-danger text-white">S.no</th>
                           
                            <th class="text-center bg-danger text-white">Picname</th>
                            <th class="text-center bg-danger text-white">Date of Status</th>
                            <th class="text-center bg-danger text-white">Status</th>
                            <th class="text-center bg-danger text-white">Delete</th>

                        </tr>
                                 <?php
                                     $a=1;
                                    while($row=mysqli_fetch_array($res))
                                        {
                                             ?>
                                            <tr>
                                        <td><?php echo $a;?></td>
                                        
                                        <td><img src="slider/<?php echo $row['picname'];?>" height="200px" width="200px"/></td>
                                        <td><?php echo $row['dos'];?></td>
                                        <td><?php echo $row['status'];?></td>
                                        <td><a href="sliderdelete.php?sid=<?php echo $row['sid'];?>" <button class="btn btn-danger"  class="text-white" style="text-decoration:none">delete</a></td></button
                                        

                              
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