<?php
session_start();
$id1=$_SESSION['g'];
$c=mysqli_connect('localhost','root','','register');
$t="SELECT * FROM regtrainer WHERE id='$id1'";
	$u=mysqli_query($c,$t);
	$s=mysqli_fetch_array($u);
	$phone=$s['phone_number'];
	$altphone=$s['alt_phone'];
	
$c=mysqli_connect('localhost','root','','register');
if(isset($_REQUEST['bt']))
{
	$phn=$_POST['ph'];
	$altphn=$_POST['altph'];
	$kk=$_SESSION['g'];
	$count=strlen($phn);
	$count1=strlen($altphn);
	
	
	
	if($count!=10)
	{
		echo '<script language="javascript">';
echo 'alert("Phone Number must have 10 digits")';
echo '</script>';
	}
	
	else if($count1!=10)
	{
		echo '<script language="javascript">';
echo 'alert("Alternative Phone Number must have 10 digits")';
echo '</script>';
	}
	else 
	{
	$q= "UPDATE regtrainer SET phone_number='$phn' WHERE id='$kk'";
	mysqli_query($c,$q);
		$t= "UPDATE regtrainer SET alt_phone='$altphn' WHERE id='$kk'";
		mysqli_query($c,$t);
		header('location: trainerprofile.php');
	}
		
	

	
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Update Phone Number</title>
<link href="../Bootstrap/bootstrap-3.3.7-dist/bootstrap-3.3.7-dist/css/bootstrap.css" rel="stylesheet" type="text/css" />
</head>

<body style="background-image:url(../images/cyril-saulnier-250098.jpg); height:100%">
<div class="container-fluid">
<div class="row">
<div class="col-lg-12" style="border:solid; height:100px; background-color:black">
<p> <h2 style="text-align:center; color:white; line-height:50px"><i><b> UPDATE PHONE NUMBER </b> </i> </h2></p>
</div>

</div>

<form method="post" >
<div class="input-group" style="padding-left:400px; padding-right:400px; padding-top:150px">
<span class="input-group-addon"><i class="glyphicon glyphicon-phone"></i></span>
<input type="tel" class="form-control"   name="ph" placeholder="<?php echo $phone; echo "&nbsp;" ; echo "(Primary Phone Number)"; ?>" />
</div>

<div class="input-group" style="padding-left:400px; padding-right:400px; padding-top:20px">
<span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
<input type="tel" class="form-control"  name="altph" placeholder="<?php echo $altphone;
echo "&nbsp;" ; echo "(Alternative Phone Number)" ?>"  />
</div>



<div style="border:solid hidden; text-align:center; padding:30px" >
<input type="submit" name="bt" value="Submit" />
</div>

</form>

</div>
</body>
</html>