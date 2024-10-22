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
$department=$_POST['department'];
//echo $department;
$email=$_POST['email'];
//echo $email;
$mobile=$_POST['number'];
//echo $mobile;

include("connection.php");
$query="insert  into tbl_teacher(name,picname,designation,qualification,department,email,mobileno,dor,status)
 values('$name','$filename','$designation','$qualification','$department','$email','$mobile',curdate(),'Y')";
 $location="teacher/";
 move_uploaded_file($tmpname,$location.$filename);
 $res=mysqli_query($con,$query);
 echo "datasaved";
 header("location:addteaching.php");



?>