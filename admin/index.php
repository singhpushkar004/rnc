<?php
error_reporting(0);
$msg=$_REQUEST['msg'];
if($msg==1)
{
$msgerr="Logout successfully";
}
if($msg==2)
{
$msgerr="Invalid Email or Password";
}
if($msg==3)
{
    $msgerr="Unauthorised Access";
}

?>






<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RNC | Admin Panel</title>
    <link rel="icon" href="../images/logo.png">
    <link href="css/bootstrap.css"rel="stylesheet">
    <link href="css/style.css" rel="stylesheet"> 
    <script src="js/bootstrap.bundle.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <div class="container">
        <div class="row mt-5 ">
            <div class="col-sm-3"></div>
            <div class="col-sm-6" style="background-color:; border:1px solid black;height:700px; border-radius:30px;">
                <h1 class="text-center mt-3">Login Here</h1>
               
                <img src="images/login2.jpg" class="rounded mx-auto d-block" alt="...">
                <p class="text-center"><b>Designed and Developed by----<span style="color:red;"> Kajal Yadav </span><b></p>
                <div class="alert alert-danger text-center fw-bold" role="alert">
                    <?php echo $msgerr ?>
                    </div>
            
                <form action="logcode.php" method="post">
                    <div class="mb-3 ">
                        <label for="exampleFormControlInput1" class="form-label">Email address :-</label>
                        <input type="email" class="form-control"  placeholder="Type your Email...." name="e">
                      </div>
                      <div class="mb-3">
                        <label  class="form-label">Enter Your password :-</label>
                        <input type="password" class="form-control"  placeholder="password" name="p">
                      </div>
                      <input type="submit" class="btn btn-dark" value="Login" style="width:100%;"/>
                </form>
            </div>
            <div class="col-sm-3"></div>
        </div>
    </div>
</body>
</html>