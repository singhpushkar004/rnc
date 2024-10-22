<?php
$ntid=$_REQUEST['ntid'];
//echo $ntid;
include("connection.php");
$query="delete from tbl_nonteacher where ntid='$ntid'";
mysqli_query($con,$query);
header("location:viewnonteaching.php");
?>