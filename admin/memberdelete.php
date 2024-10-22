<?php
$ccid=$_REQUEST['cmid'];
//echo $ccid;
include("connection.php");
$query="delete from tbl_committee where ccid='$cmid'";
mysqli_query($con,$query);
header("location:viewmember.php");

?>