<?php
$name=$_POST['name'];
//echo $name,"<br/>";
$duration=$_POST['duration'];
//echo $duration,"<br/>";
$fees=$_POST['fees'];
//echo $fees,"</br>";
$seat=$_POST['seat'];
//echo $seat,"<br/>";

include("connection.php");
$query="insert into tbl_course(name,duration,fees,seat,doc,status) values('$name','$duration','$fees','$seat',curdate(),'Y')";
mysqli_query($con,$query);
//echo "Data Uploaded";
header("location:addcourse.php")
?>