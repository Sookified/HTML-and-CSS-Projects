<?php
session_start();
$c=mysqli_connect('localhost','root','','register');
if(isset($_REQUEST['bt']))
{
	$gend=$_POST['gender'];
	
	
	$klmail=$_SESSION['g'];
	
	
	$q= "UPDATE regtrainer SET gender='$gend' WHERE id='$klmail'";
	mysqli_query($c,$q);
	
	header('location: trainerprofile.php');
	
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Update Gender</title>
<link href="../Bootstrap/bootstrap-3.3.7-dist/bootstrap-3.3.7-dist/css/bootstrap.css" rel="stylesheet" type="text/css" />
</head>

<body style="background-image:url(../images/cyril-saulnier-250098.jpg); height:100%">
<div class="container-fluid">
<div class="row">
<div class="col-lg-12" style="border:solid; height:100px; background-color:black">
<p> <h2 style="text-align:center; color:white; line-height:50px"><i><b> CHANGE GENDER</b> </i> </h2></p>
</div>

</div>

<form method="post" >
<div class="input-group" style="padding-left:400px; padding-right:400px; padding-top:150px">
<p style="text-align:center; font-size:20px"><input type="radio" name="gender" value="male" checked="checked" > <b>MALE </b></input></p>
</div>

<div class="input-group" style="padding-left:400px; padding-right:400px; padding-top:20px">
<p style="text-align:center; font-size:20px"><input type="radio" name="gender" value="female" > <b>FEMALE </b></input></p>
</div>

<div class="input-group" style="padding-left:400px; padding-right:400px; padding-top:20px">
<p style="text-align:center; font-size:20px"><input type="radio" name="gender" value="transgender" > <b>TRANSGENDER </b></input></p>
</div>

<div style="border:solid hidden; text-align:left; padding-left:400px; padding-top:30px" >
<input type="submit" name="bt" value="Submit" />
</div>

</form>

</div>
</body>
</html>