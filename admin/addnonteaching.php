<?php
include("header.php")
?>
<?php
include("left.php")
?>
<div class="col-sm-9">
               <div class="container">
                <div class="row mt-3">
                <h2 style="text-align:center;margin-top:20px; ">Add Non-Teacher Staff</h2>
                    <form method="post" action="addnonteachingcode.php" enctype="multipart/form-data">
                    <div class="row">
                    <div class="col-sm-9 mx-auto shadow"  >
                    
            Enter your Name:-
            <input type="text" name="name" class="form-control"/>
            <br>
             Chose Photo:-
            <input type="file" name="file" required class="form-control"/>
            <br>
             Enter Designation
            <input type="text" name="designation" required class="form-control"/>
            <br>
             Enter Qualification:-
            <input type="text" name="qualification" required class="form-control"/>
            <br>
           Enter Mobile No.:-
            <input type="number" name="number" required class="form-control"/>
            <br>
            <input type="submit" class="btn btn-dark" style="width:100%;"/>
            
                    </form>
                </div>
               </div>
               
</div>
</div


            </div>
        </div>
     </div>
     <!-- second section end -->
    
</body>
</html>