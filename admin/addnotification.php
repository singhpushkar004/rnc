
<?php
include("header.php")
?>
<?php
include("left.php")
?>

<div class="col-sm-8 mx-auto mt-5">
               <div class="container">
                <div class="row mt-3">
                    <h1>Add Notification</h1>
                   
                    <div class="col-sm-10">
                        <form method="post" action="addnotificationcode.php" enctype="multipart/form-data">
                            <lable>Add Notification:</label>
                    <input type="text" name="message" class="form-control"/>
                    <br><br>
                    <lable>Attach file:-:</label>
                    <input type="file" name="file" class="form-control"/>
                    <br><br>
                    <input type="submit"  class="btn btn-dark w-100" />
                    <br><br>
            
                    </form>
                </div>
                    </div>
                </div>
               </div>
               



     <!-- second section end -->
    
</body>
</html>