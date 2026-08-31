<?php
session_start();
$c=mysqli_connect('localhost','root','','register');
echo "Hello";
if(isset($_REQUEST['bt']))
{
	echo $a=$_FILES["a"]["name"];
	echo $_FILES["a"]["tmp_name"];
	
	
	$iii=$_SESSION['g'];
	echo $iii;
	
	
	
	
	
move_uploaded_file($_FILES["a"]["tmp_name"],"FITNESS_PROJECT/uploadt/" .$_FILES["a"]["name"]);	
	$t="UPDATE regtrainer SET image='$a' WHERE id='$iii'";
	mysqli_query($c,$t);
	
	header('');
	
}

?>

<html>
<body>
<form method="post" enctype="multipart/form-data">
<input type="file" name="a">
<input type="submit" name="bt">
</form>
</body>
</html>