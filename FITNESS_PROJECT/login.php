<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Login</title>
<link href="Bootstrap/bootstrap-3.3.7-dist/bootstrap-3.3.7-dist/css/bootstrap.css" rel="stylesheet" type="text/css" />
<script src="jq/bootstrap.min.js"></script>
<script src="jq/jquery.min.js"></script>
<style>

</style>
</head>

<body>
<div class="container-fluid">
<div class="row">
<div class="col-lg-3" style="border:solid hidden; height:120px; background-image:url(images/menu_bg.png)">
<a href="Home.php"><img src="images/LOGO_fit.png"/></a>
</div>
<div class="col-lg-9" style="border:solid hidden; height:120px; background-image:url(images/menu_bg.png)">
<p style="padding-right:20px"> <a id="sukh" href="Home.php" style="text-decoration:none; color:black; padding-right:30px">
<h2 style="text-align:right; padding-top:5px"> Home </h2></a></p>

</div>

</div>
<div class="row" style="background-image:url(images/david-marcu-69433.jpg); background-attachment:fixed; height:100%">
<div class="col-lg-12" style="border:solid hidden; height:539px">
<p style="text-align:center; font-size:30px; color:white; padding-top:50px"> <span style="color:#ffcd2c">LOGIN</span> DETAILS</p>


<form method="post" >
<div class="input-group" style="padding-left:400px; padding-right:400px; padding-top:50px">
<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
<input type="email" class="form-control" placeholder="Enter Email" name="email"  />
</div>

<div class="input-group " style="padding-left:400px; padding-right:400px; padding-top:20px">
<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
<input type="password" class="form-control" placeholder="Enter Password"  name="pass" />
</div>

<div style="border:solid hidden; text-align:center; padding:30px" >
<input type="submit" name="bt" value="Login">
</div>
</form>
</div>
</div>
<div class="row">
<div class="col-lg-12" style="border:solid hidden; height:100px; background-color:black; padding:20px">
<p style="text-align:center; color:white"> &copy; Copyright 2017 Body Temple Fitness Club. All Rights Reserved.</p>
<p style="text-align:center; color:white; padding:0px"> Designed by <b>Sukhpreet Kaur.</b> </p>


</div>
</div>

</div>
</body>
</html>


<?php
session_start();
$c=mysqli_connect('localhost','root','','register');
if(isset($_REQUEST['bt']))


{
	$e=$_POST['email'];
	$p=$_POST['pass'];
	
	$q= "SELECT * FROM reg WHERE email='$e' AND password='$p'";
	$r=mysqli_query($c,$q);
	$s=mysqli_fetch_array($r);
	$_SESSION['h']=$s['id'];
	
	if(mysqli_num_rows($r)>0)
	{
		header('location: profilepage.php');
		
	}
	else
	{
		echo "<script> alert ('Wrong Username or Password') </script>";
	}
}
?>
