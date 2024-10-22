<?php
include("header.php");
?>
<?php

include("left.php");
?>
<?php
error_reporting(0);
$msg=$_REQUEST['msg'];
if($msg==1)
{
  $msgerr="Invalid Old Password";
}
if($msg==2)
{
    $msgerr="Invalid Confirm Password";
}
if($msg==3)
{
    $msgerr="Change Successfully"; 
}
?>
<div class="col-sm-9 ">
    <div class="row">
        <div class="col-sm-6 mx-auto">
    <div class="row mt-5 shadow">
        <h1 class="text-center">Change Password</h1>
        <h4 class="text-center text-danger"><?php echo $msgerr ?></h4>
        <form method="post" action="changepasswordcode.php" enctype="multipart/form-data">
         <lable>Old password:</lable>
         <input type="password" name="op" class="form-control" placeholder="--old password--"/>
</br></br>
<lable>New Password:</lable>
         <input type="password" name="np" class="form-control" placeholder="--new password--"/>
</br></br><lable>Confirm New Password:</lable>
         <input type="password" name="cnp" class="form-control" placeholder="--confirm password --"/>
</br></br>
<input type="submit" class="form-control btn btn-dark"/> 
        </form>

    </div>
    </div>
</div>
</div>
</div>
</div>
<!-- second section end -->
</body>

</html>