<?php
$name=$_POST['name'];
//echo $name;
$email=$_POST['email'];
//echo $email;
$mobile=$_POST['number'];
//echo $mobile;
$message=$_POST['message'];
//echo $message;




include("connection.php");
$query="insert  into tbl_feedback(name,email,mobileno,message,dof) values('$name','$email','$mobile','$message',curdate())";
 mysqli_query($con,$query);
 header("location:../feedback.php")

?>