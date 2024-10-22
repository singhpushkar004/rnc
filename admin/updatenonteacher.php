<?php
$ntid=$_POST['ntid'];
//echo $ntid,"<br/";
$name=$_POST['name'];
//echo $name,"<br/>";
$designation=$_POST['designation'];
//echo $designation,"<br/>";
$qualification=$_POST['qualification'];
//echo $qualification,"</br>";
$mobile=$_POST['mobile'];
//echo $mobile,"<br/>";
include("connection.php");
$query="update tbl_nonteacher set name='$name',designation='$designation',qualification='$qualification',mobile='$mobile' where ntid='$ntid'";
mysqli_query($con,$query);
//echo "Data Uploaded";
header("location:updatenonteaching.php")
?>