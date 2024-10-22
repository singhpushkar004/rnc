<?php
$name=$_POST['name'];
//echo $name;
$filename=$_FILES['file']['name'];
//echo $filename;
$type=$_FILES['file']['type'];
//echo $type;
$size=$_FILES['file']['size'];
//echo $size;
$tmpname=$_FILES['file']['tmp_name'];
//echo $tmp_name;
$designation=$_POST['designation'];
//echo $designation;
$qualification=$_POST['qualification'];
//echo $qualification;
$mobile=$_POST['number'];
//echo $mobile;

include("connection.php");
$query="insert  into tbl_nonteacher(name,picname,designation,qualification,mobileno,dor,status)
 values('$name','$filename','$designation','$qualification','$mobile',curdate(),'Y')";
 $location="nonteacher/";
 move_uploaded_file($tmpname,$location.$filename);
 $res=mysqli_query($con,$query);
 //echo "datasaved";
 header("location:addnonteaching.php");

?>