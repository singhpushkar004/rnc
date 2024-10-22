<?php
include("connection.php");
$query="select * from tbl_committee";
$res=mysqli_query($con,$query);

?>




<?php
include("header.php")
?>
<?php
include("left.php")
?>

<div class="col-sm-8 mx-auto mt-5">
               <div class="container">
                <div class="row mt-3">
                   
                    <form method="post" action="committeecode.php" enctype="multipart/form-data">
                        <div class="row">
                        <div class="col-sm-9 mx-auto shadow" >
                        <h2 style="text-align:center">Add Committee</h2>
           
            <div class="col-auto">
                      <label for="inputcompany2" class="visually-hidden">Add Committee</label>
                      <input type="textarea" class="form-control" id="" placeholder="Add Committee..." name="name" style="width:500px;">
                    </div>
                    <br>
            <input type="submit" class="btn btn-dark" style="width:100%;"/>
            <br><br>
            
                    </form>
                    <h2 style="text-align:center">View Committees</h2>
                    <table  class="table table bordered border-primary mt-4">
                        <tr>
                         <th>S.No</th>
                            <th>Name of Committee</th>
                            <th>Date Of Committee</th>
                            <th>Status</th>
                        </tr>
                            <?php $a=1;
                            while($row=mysqli_fetch_array($res))
                            {

                            ?>
                            <tr>
                                <td><?php echo $row['ccid'];?></td>
                                <td><?php echo $row['name'];?></td>
                                <td><?php echo $row['doc'];?></td>
                                <td><?php echo $row['status'];?></td>
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
        </div>
      
     </div>
     <!-- second section end -->
    
</body>
</html>