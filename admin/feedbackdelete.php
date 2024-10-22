<?php
$ccid=$_REQUEST['fid'];
//echo $fid;
include("connection.php");
$query="delete from tbl_feedback where fid='$fid'";
mysqli_query($con,$query);
header("location:viewfeedback.php");

?>