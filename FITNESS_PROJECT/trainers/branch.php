<?php
session_start();
$c=mysqli_connect('localhost','root','','register');

if(isset($_POST['bt']))

{
	$idd1=$_SESSION['g'];
	
$choice=$_POST['check1'];

$v= implode(',',$choice);
$q="UPDATE regtrainer SET branch='$v' WHERE id='$idd1'" ;
mysqli_query($c,$q);	
	
  	header('location: trainerprofile.php');
  
  
}

?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title> Current Working Branch</title>
<link href="../Bootstrap/bootstrap-3.3.7-dist/bootstrap-3.3.7-dist/css/bootstrap.css" rel="stylesheet" type="text/css" />
</head>

<body style="background-image:url(../images/cyril-saulnier-250098.jpg); height:100%">
<div class="container-fluid">
<div class="row">
<div class="col-lg-12" style="border:solid; height:100px; background-color:black">
<p> <h2 style="text-align:center; color:white; line-height:50px"><i><b>UPDATE CURRENT WORKING BRANCH: </b> </i> </h2></p>
</div>
<form method="post">

<p style="text-align:left; padding-left:550px; font-size:20px">
<input type="checkbox" name="check1[]" value="Chd Sec 22" />CHD SEC 22</br> 
<input type="checkbox" name="check1[]" value="Chd Sec 17" />CHD SEC 17</br>
<input type="checkbox" name="check1[]" value="Chd Sec 63" />CHD SEC 63 </br>
<input type="checkbox" name="check1[]" value="Chd Sec 20" />CHD SEC 20 </br>
<input type="checkbox" name="check1[]" value="Chd Sec 34" />CHD SEC 34</br>
<input type="checkbox" name="check1[]" value="Mohali Phase 10" />MOHALI PHASE 10</br>
<input type="checkbox" name="check1[]" value="Mohali Phase 7" />MOHALI PHASE 7</br>
<input type="checkbox" name="check1[]" value=" Hoshiarpur" /> HOSHIARPUR</br>
<input type="checkbox" name="check1[]" value="Jalandhar" />JALANDHAR</br>
<input type="checkbox" name="check1[]" value="Ludhiana" />LUDHIANA</br>
<input type="checkbox" name="check1[]" value="Amritsar" />AMRITSAR</br>
<input type="checkbox" name="check1[]" value="Ambala" />AMBALA</br>


</br>

<input type="submit" name="bt" value="Submit" />  
</p>
</form>
</div>
</body>
</html>