
<?php
session_start();
$c=mysqli_connect('localhost','root','','register');
if(isset($_REQUEST['bt']))
{
	$a=$_FILES["a"]["name"];
	
	
	$ii=$_SESSION['h'];
	
	
	
	
	
	move_uploaded_file($_FILES["a"]["tmp_name"], "upload/" .$_FILES["a"]["name"]);
	
	$t="UPDATE reg SET image='$a' WHERE id='$ii'";
	mysqli_query($c,$t);
	
	header('location: profilepage.php');
	
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