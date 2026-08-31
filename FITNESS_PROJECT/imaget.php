<?php
session_start();
$c=mysqli_connect('localhost','root','','register');
if(isset($_REQUEST['bt']))
{
		$a=$_FILES["a"]["name"];

$id3=$_SESSION['g'];
move_uploaded_file($_FILES["a"]["tmp_name"],"uploadt/".$_FILES["a"]["name"]);

	$t="UPDATE regtrainer SET image='$a' WHERE id='$id3'";
	mysqli_query($c,$t);
		header('location: trainers/trainerprofile.php');


}


?>
<html>
<body>
<form method="post" enctype="multipart/form-data">
<input type="file" name="a" />
<input type="submit" name="bt" />
</form>
</body>
</html>