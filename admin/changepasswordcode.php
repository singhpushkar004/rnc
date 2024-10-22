<?php
include("connection.php");
$query="select * from tbl_admin";
$res=mysqli_query($con,$query);
 while($row=mysqli_fetch_array($res))
 {

   $password= $row['password'];
   $aid=$row['adminid'];
 }

$oldpassword=$_POST['op'];
//echo $oldpassword,"<br/>";
$newpassword=$_POST['np'];
//echo $newpassword,"<br/>";
$cnewpassword=$_POST['cnp'];
//echo $cnewpassword,"<br/>";

if($oldpassword==$password)
{
 if($newpassword==$cnewpassword)
 {
    include("connection.php");
   $query2="update tbl_admin set password='$newpassword' where adminid='$aid'";
   mysqli_query($con,$query2);
   header("location:index.php");
 }
 else
 {
    header("location:changepassword.php?msg=2");
 }
}
else
{
header("location:changepassword.php?msg=1");
}
?>