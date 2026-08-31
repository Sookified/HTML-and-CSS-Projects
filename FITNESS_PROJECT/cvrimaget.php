<?php
session_start();
$c=mysqli_connect('localhost','root','','register');
if(isset($_REQUEST['bt']))
{
	$a=$_FILES["b"]["name"];
	
	
	$iji=$_SESSION['g'];
	
	
	
	
	
	move_uploaded_file($_FILES["b"]["tmp_name"], "cvruploadt/" .$_FILES["b"]["name"]);
	
	$t="UPDATE regtrainer SET coverimage='$a' WHERE id='$iji'";
	mysqli_query($c,$t);
	
		header('location: trainers/trainerprofile.php');
	
}

?>

<html>
<body>
<form method="post" enctype="multipart/form-data">
<input type="file" name="b">
<input type="submit" name="bt">
</form>
</body>
</html>

