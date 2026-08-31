<?php
session_start();
$id1=$_SESSION['g'];
$c=mysqli_connect('localhost','root','','register');
$t="SELECT * FROM regtrainer WHERE id='$id1'";
	$u=mysqli_query($c,$t);
	$s=mysqli_fetch_array($u);
	$pass=$s['password'];
	
	
if(isset($_REQUEST['bt']))
{
	$oldpass=$_POST['old'];
	$new=$_POST['n1'];
	$conew=$_POST['n2'];
	$count=strlen($new);
	
	
	
	
	if($oldpass!= $pass)
	{
		echo '<script language="javascript">';
echo 'alert("Old Password does not match ! ")';
echo '</script>';
	}
	else if($new != $conew) {
		echo '<script language="javascript">';
echo 'alert("New Password does not match ! ")';
echo '</script>';
		
	}
	else if($count<8) {
		echo '<script language="javascript">';
echo 'alert("Weak Password. It must contain more than 8 characters")';
echo '</script>';
	}
	
	else 
	{
		$q= "UPDATE regtrainer SET password='$new' WHERE id='$id1'";
	mysqli_query($c,$q);
	
		header('location: trainerprofile.php');

	}
	
	header('location: trainerprofile.php');
	
	
}

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Change Password</title>
<link href="../Bootstrap/bootstrap-3.3.7-dist/bootstrap-3.3.7-dist/css/bootstrap.css" rel="stylesheet" type="text/css" />
</head>

<body style="background-image:url(../images/cyril-saulnier-250098.jpg); height:100%">
<div class="container-fluid">
<div class="row">
<div class="col-lg-12" style="border:solid; height:100px; background-color:black">
<p> <h2 style="text-align:center; color:white; line-height:50px"><i><b> CHANGE PASSWORD</b> </i> </h2></p>
</div>

</div>

<form method="post" >
<div class="input-group" style="padding-left:400px; padding-right:400px; padding-top:150px">
<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
<input type="password" class="form-control" name="old" value=<?php echo $pass; echo "&nbsp;"; echo "Enter Old Password" ?>  />
</div>

<div class="input-group" style="padding-left:400px; padding-right:400px; padding-top:20px">
<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
<input type="password" class="form-control" placeholder="Enter New Password" name="n1"  />
</div>

<div class="input-group" style="padding-left:400px; padding-right:400px; padding-top:20px">
<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
<input type="password" class="form-control" placeholder="Confirm New Password" name="n2"  />
</div>

<div style="border:solid hidden; text-align:center; padding:30px" >
<input type="submit" name="bt" value="Submit" />
</div>

</form>


</div>
</body>
</html>