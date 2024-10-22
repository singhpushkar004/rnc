<?php
include("header.php")
?>
<?php
include("left.php")
?>

<div class="col-sm-8 mx-auto mt-5">
    <h1 style="text-align:center;">Add Gallery</h1>
               <div class="container">
                <div class="row mt-3">
                   
                    <div class="col-sm-6 shadow mx-auto" >
                        <form method="post" action="gallerycode.php" enctype="multipart/form-data">
                            <lable>Name:</label>
                    <input type="text" name="name" class="form-control"/>
                    <br><br>
                    <lable>Upload pic:</label>
                    <input type="file" name="file" class="form-control"/>
                    <br><br>
                 
                    <input type="submit"  value="Upload"class="btn btn-dark w-100"/>
                    <br><br>
            
                    </form>
                </div>
                    </div>
                </div>
               </div>
               



     <!-- second section end -->
    
</body>
</html>