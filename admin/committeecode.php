<?php


$name=$_POST['name'];
//echo $name;



include("connection.php");
$query="insert  into tbl_committee(name,doc,status) values('$name',curdate(),'Y')";

 mysqli_query($con,$query);
 header("location:addcommittee.php");
?>