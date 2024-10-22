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
$department=$_POST['department'];
//echo $name;

$location="mentor/";
include("connection.php");
$query="insert  into tbl_mentor(name,picname,department,status,dom) values('$name','$filename','$department','Y',curdate())";
 move_uploaded_file($tmpname,$location.$filename);
 mysqli_query($con,$query);
 header("location:mentor.php");
?>