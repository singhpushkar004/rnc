<?php
$tid=$_REQUEST['tid'];
//echo $tid;
include("connection.php");
$query="delete from tbl_teacher where tid='$tid'";
mysqli_query($con,$query);
header("location:viewteaching.php");
?>