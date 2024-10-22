<?php
$mid=$_REQUEST['mid'];
//echo $mid;
include("connection.php");
$query="delete from tbl_mentor where mid='$mid'";
mysqli_query($con,$query);
header("location:mentor.php");

?>