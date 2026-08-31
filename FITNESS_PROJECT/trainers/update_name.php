<?php
session_start();
$id1=$_SESSION['g'];

$c=mysqli_connect('localhost','root','','register');
$t="SELECT * FROM regtrainer WHERE id='$id1'";
	$u=mysqli_query($c,$t);
	$s=mysqli_fetch_array($u);
	$user=$s['username'];
	
if(isset($_REQUEST['bt']))
{
	
	
	
	
	$n=$_POST['nm'];
	
	$iii=$_SESSION['g'];
	
	$q= "UPDATE regtrainer SET username='$n' WHERE id='$iii'";
	mysqli_query($c,$q);
	
	
	header('location: trainerprofile.php');
}
?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Update Name</title>
<link href="../Bootstrap/bootstrap-3.3.7-dist/bootstrap-3.3.7-dist/css/bootstrap.css" rel="stylesheet" type="text/css" />
</head>

<body style="background-image:url(../images/cyril-saulnier-250098.jpg); height:100%">
<div class="container-fluid">
<div class="row">
<div class="col-lg-12" style="border:solid; height:100px; background-color:black">
<p> <h2 style="text-align:center; color:white; line-height:50px"><i><b> UPDATE NAME </b> </i> </h2></p>
</div>

</div>

<form method="post" >
<div class="input-group" style="padding-left:400px; padding-right:400px; padding-top:150px">
<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
<input type="text" class="form-control" placeholder="Enter Name" style="text-transform:capitalize" name="nm" value="<?php echo $user; ?>"  />
</div>




<div style="border:solid hidden; text-align:center; padding:30px" >
<input type="submit" name="bt" value="Submit" />
</div>

</form>

</div>
</body>
</html>