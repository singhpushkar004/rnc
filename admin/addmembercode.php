<?php
$ccid=$_POST['ccid'];
//echo $ccid;
$member=$_POST['member'];
//echo $member;
$department=$_POST['department'];
//echo $department;
$designation=$_POST['designation'];
//echo $designation;

include("connection.php");
 echo $query="insert into tbl_com_member(ccid,name,department,designation,doa,status) values('$ccid','$member','$department','$designation',now(),'Y')";

 mysqli_query($con,$query);
 header("location:addcommitteemember.php");
?>