<?php
$coid=$_REQUEST['coid'];
//echo $coid;
include("connection.php");
$query="delete from tbl_contact where coid='$coid'";
mysqli_query($con,$query);
header("location:viewcontactmessage.php")
?>