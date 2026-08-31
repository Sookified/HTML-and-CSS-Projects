<?php
if(isset($_REQUEST['btn']))
{
	$psl=$_POST['pl'];
	if($psl=='11032017')
	{
		header('location: regtrainer.php');
	}
	else
	{
		echo '<script language="javascript">';
echo 'alert("Only Trainers can Register !")';
echo '</script>';
	}
}
?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Passlock</title>
<link href="../Bootstrap/bootstrap-3.3.7-dist/bootstrap-3.3.7-dist/css/bootstrap.css" rel="stylesheet" type="text/css" />
</head>

<body>
<div class="container-fluid">
<div class="row">
<div class="col-lg-3" style="border:solid hidden; height:120px; background-image:url(../images/menu_bg.png)">
<a href="../Home.php"><img src="../images/LOGO_fit.png"/></a>
</div>
<div class="col-lg-9" style="border:solid hidden; height:120px; background-image:url(../images/menu_bg.png)">
<p> <a id="sukh" href="../Home.php" style="text-decoration:none; color:black">
<h2 style="text-align:right; padding-top:5px"> Home </h2></a></p>


</div>

</div>
<div class="row" style="background-image:url(../images/david-marcu-69433.jpg); background-attachment:fixed; height:100%">
<div class="col-lg-12" style="border:solid hidden; height:539px">

<form method="post" >
<div class="input-group" style="padding-left:400px; padding-right:400px; padding-top:150px">
<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
<input type="password" class="form-control" placeholder="Enter passlock" name="pl"  />
</div>

<div style="border:solid hidden; text-align:center; padding:30px" >
<input type="submit"  name="btn" value="Submit">
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