<?php
session_start();
$c=mysqli_connect('localhost','root','','register');

if(isset($_POST['bt']))

{
	$idd=$_SESSION['g'];
	
$choice=$_POST['check1'];

$v= implode(',',$choice);
$q="UPDATE regtrainer SET courses='$v' WHERE id='$idd'" ;
mysqli_query($c,$q);	
	
  	header('location: trainerprofile.php');
  
  
}

?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Courses Undertaken</title>
<link href="../Bootstrap/bootstrap-3.3.7-dist/bootstrap-3.3.7-dist/css/bootstrap.css" rel="stylesheet" type="text/css" />
</head>

<body style="background-image:url(../images/cyril-saulnier-250098.jpg); height:100%">
<div class="container-fluid">
<div class="row">
<div class="col-lg-12" style="border:solid hidden; height:100px; background-color:black">
<p> <h2 style="text-align:center; color:white; line-height:50px"><i><b>COURSE(S) ENROLLED FOR</b> </i> </h2></p>
</div>
</div>
<form method="post">
<p style="text-align:left; font-size:25px; padding-left:550px">
<input type="checkbox" name="check1[]" value="Aerobics" />Aerobics </br> 
<input type="checkbox" name="check1[]" value="Zumba" />Zumba</br>
<input type="checkbox" name="check1[]" value="Legs/Arms Exercises" />Legs/Arms Exercise </br>
<input type="checkbox" name="check1[]" value="Gym/Cardio" />Gyming/Cardio </br>
<input type="checkbox" name="check1[]" value="Spa" />Spa</br>
<input type="checkbox" name="check1[]" value="Yoga" />Yoga</br>
<input type="checkbox" name="check1[]" value="Bhangra" />Bhangra</br>
</br>

<input type="submit" name="bt" value="Submit" />  
</p>
</form>
</div>
</body>
</html>