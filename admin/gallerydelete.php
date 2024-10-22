<?php
$gid=$_REQUEST['gid'];
//echo $gid;
include("connection.php");
$query="delete from tbl_gallery where gid='$gid'";
mysqli_query($con,$query);
header("location:viewgallery.php");
?>