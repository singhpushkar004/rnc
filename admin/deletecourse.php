<?php
$cid=$_REQUEST['cid'];
//echo $cid;
include("connection.php");
$query="delete from tbl_course where cid='$cid'";
mysqli_query($con,$query);
header("location:addcourse.php");
?>