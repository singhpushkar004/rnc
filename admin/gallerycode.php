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
//echo $tmpname;


$location="gallery/";
include("connection.php");
$query="insert  into tbl_gallery(name,picname,dor,status) values('$name','$filename',curdate(),'Y')";
 move_uploaded_file($tmpname,$location.$filename);
 mysqli_query($con,$query);
 header("location:gallery.php");



?>