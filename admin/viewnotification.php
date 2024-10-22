<?php
include("header.php")
?>
<?php
include("left.php")
?>
<?php
$con=mysqli_connect("localhost","root","","rnc");
$query="select * from tbl_notification";
$res=mysqli_query($con,$query);
?>


<div class="col-sm-9">
               <div class="container">
                <div class="row mt-3">
                <h2 style=" text-align:center;">View Notification</h2>
                    <table style="border:1px solid black;text-align:center;" class="table table bordered border-primary">
                        <tr>
                            <th class="text-center bg-danger text-white">S.no</th>
                            <th class="text-center bg-danger text-white">Message</th>
                            <th class="text-center bg-danger text-white">File</th>
                            <th class="text-center bg-danger text-white">Download</th>
                            <th class="text-center bg-danger text-white">Date of Registration</th>
                            
                            <th class="text-center bg-danger text-white">Delete</th>
                           

                        </tr>
                                 <?php
                                     $a=1;
                                    while($row=mysqli_fetch_array($res))
                                        {
                                             ?>
                                            <tr>
                                        <td><?php echo $a;?></td>
                                        <td><?php echo $row['message'];?></td>
                                        <td><img src="notice/<?php echo $row['file'];?>" height="100px" width="100px"/></td>
                                        <td><a href="http://localhost/RNC/admin/notice/<?php echo $row['file'];?>">Download</a></td>
                                        <td><?php echo $row['dor'];?></td>
                                        
                                        <td><a href="deletenotification.php?nid=<?php echo $row['nid'];?>"<button class="btn btn-danger"  class="text-white" style="text-decoration:none">delete</a></button></td>
                                        

                              
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