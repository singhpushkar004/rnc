<?php
include("header.php")
?>
<?php
include("left.php")
?>
<?php
$con=mysqli_connect("localhost","root","","rnc");
$query="select * from tbl_contact";
$res=mysqli_query($con,$query);
?>


<div class="col-sm-9">
               <div class="container">
               <h2 style="text-align:center; margin-top:20px;">View Contact Message</h2>
                <div class="row mt-3">
                    <table style="border:1px solid black;text-align:center;" class="table table bordered border-primary">
                        <tr>
                            <th class="text-center bg-danger text-white">S.no</th>
                            <th class="text-center bg-danger text-white">Name</th>
                            
                        
                           
                            <th class="text-center bg-danger text-white">Email</th>
                            <th class="text-center bg-danger text-white">Mobile no</th>
                       
                            <th class="text-center bg-danger text-white">Message</th>
                            <th class="text-center bg-danger text-white">Date of Contact</th>
                            <th class="text-center bg-danger text-white">Delete</th>
                           
                        </tr>
                                 <?php
                                     $a=1;
                                    while($row=mysqli_fetch_array($res))
                                        {
                                             ?>
                                            <tr>
                                        <td><?php echo $row['coid'];?></td>
                                        <td><?php echo $row['name'];?></td>
                                        <td><?php echo $row['email'];?></td>
                                        <td><?php echo $row['mobileno'];?></td>
                                        <td><?php echo $row['messege'];?></td>
                                        <td><?php echo $row['doc'];?></td>                            
                                        <td><a href="contactdelete.php?coid=<?php echo $row['coid'];?>"><button class="btn btn-delete"  class="text-white" style="text-decoration:none">Delete</a></button></td>
                                        
                                        

                              
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