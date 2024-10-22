<?php
$nid=$_REQUEST['nid'];
//echo $nid;
include("connection.php");
$query="delete from tbl_notification where nid='$nid'";
mysqli_query($con,$query);
header("location:viewnotification.php");
?>