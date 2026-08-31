<?php
session_start();
$id1=$_SESSION['h'];
$c=mysqli_connect('localhost','root','','register');
$t="SELECT * FROM reg WHERE id='$id1'";
	$u=mysqli_query($c,$t);
	$s=mysqli_fetch_array($u);
	$dob=$s['date_of_birth'];
	

if(isset($_REQUEST['bt']))
{
	$b=$_POST['dob'];
	
	$kl=$_SESSION['h'];
	
	$q= "UPDATE reg SET date_of_birth='$b' WHERE id='$kl'";
	mysqli_query($c,$q);
	
	header('location: profilepage.php');
	
}
?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Update Date Of Birth</title>
<link href="Bootstrap/bootstrap-3.3.7-dist/bootstrap-3.3.7-dist/css/bootstrap.css" rel="stylesheet" type="text/css" />
<script
			  src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
			  integrity="sha256-k2WSCIexGzOj3Euiig+TlR8gA0EmPjuc79OEeY5L45g="
			  crossorigin="anonymous"></script>
</head>

<body style="background-image:url(images/cyril-saulnier-250098.jpg); height:100%">
<div class="container-fluid">

<div class="row">
<div class="col-lg-12" style="border:solid; height:100px; background-color:black">
<p> <h2 style="text-align:center; color:white; line-height:50px"><i><b> CHANGE DATE OF BIRTH</b> </i> </h2></p>
</div>

</div>

<form method="post" >
<div class="input-group" style="padding-left:400px; padding-right:400px; padding-top:150px">
<p style="text-align:center; font-size:20px"><b>DATE OF BIRTH: </b>
<input type="date" name="dob" placeholder="<?php echo $dob;  ?>" > </input></p>
</div>



<div style="border:solid hidden; text-align:left; padding-left:600px; padding-top:30px" >
<input type="submit" name="bt" value="Submit" />
</div>

</form>

</div>
</body>
</html>