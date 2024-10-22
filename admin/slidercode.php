<?php

$filename=$_FILES['file']['name'];
echo $filename;
$type=$_FILES['file']['type'];
//echo $type;
$size=$_FILES['file']['size'];
//echo $size;
$tmpname=$_FILES['file']['tmp_name'];
//echo $tmpname;


$location="slider/";
include("connection.php");
$query="insert  into tbl_slider(picname,status,dos) values('$filename','Y',curdate())";
 move_uploaded_file($tmpname,$location.$filename);
 mysqli_query($con,$query);
 header("location:slider.php");



?>