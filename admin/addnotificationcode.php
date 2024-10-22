<?php
$message=$_POST['message'];
//echo $message;
$filename=$_FILES['file']['name'];
//echo $filename;
$type=$_FILES['file']['type'];
//echo $type;
$size=$_FILES['file']['size'];
///echo $size;
$tmpname=$_FILES['file']['tmp_name'];
//echo $tmpname;


$location="notice/";
include("connection.php");
$query="insert  into tbl_notification(message,file,dor) values('$message','$filename',curdate())";
 move_uploaded_file($tmpname,$location.$filename);
 mysqli_query($con,$query);
 header("location:addnotification.php");
?>