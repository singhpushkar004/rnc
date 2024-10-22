<?php
$tid=$_POST['tid'];
echo $tid,"<br/";
$name=$_POST['name'];
echo $name,"<br/>";
$designation=$_POST['designation'];
echo $designation,"<br/>";
$qualification=$_POST['qualification'];
echo $qualification,"</br>";
$department=$_POST['department'];
echo $department,"<br/>";
$email=$_POST['email'];
echo $email,"<br/>";
$mobile=$_POST['mobile'];
echo $mobile,"<br/>";
include("connection.php");
$query="update tbl_teacher set name='$name',designation='$designation',qualification='$qualification',department='department',mobile='$mobile' where tid='$tid'";
mysqli_query($con,$query);
echo "Data Uploaded";
header("location:viewteaching.php")
?>