<?php
include("header.php")
?>
<?php
include("left.php")
?>


<?php
include("connection.php");
$query="select * from tbl_committee";
$res=mysqli_query($con,$query);
?>

<div class="col-sm-8 mx-auto mt-5">
               <div class="container">
                <div class="row mt-3">
                <h2 style="text-align:center">Add committee member</h2>
                    <form method="post" action="addmembercode.php" enctype="multipart/form-data">
                        <div class="row">
                        <div class="col-sm-9 mx-auto shadow">
                        
            <select name="ccid" id="">
                <option value="">--select committee member--</option>
                <?php
                $a=1;
                while($row=mysqli_fetch_array($res))
                {
                ?>
                <option value="<?php echo $row['ccid'];?>"><?php  echo $row['name'];?> </option>
                <?php
                $a++;
                }
                ?>
            </select>
            <br><br>
            Add a Member:-
            <input type="text" name="member" class="form-control"/><br>
            Add a Department:-
            <input type="text" name="department" class="form-control"/><br>
            Add a Designation:-
            <input type="text" name="designation" class="form-control"/><br>

            <input type="submit" class="btn btn-dark" style="width:100%;"/>
            
                    </form>
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