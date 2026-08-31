





<?php
session_start();
$id=$_SESSION['h'];

$c=mysqli_connect('localhost','root','','register');
$q="SELECT * FROM reg WHERE id='$id'";
$r=mysqli_query($c,$q);
$s=mysqli_fetch_array($r);

$name=$s['username'];
$phone=$s['phone_number'];
$address=$s['address'];
$email1=$s['email'];
$gend=$s['gender'];
$dob=$s['date_of_birth'];
$img=$s['image'];
$cvrimg=$s['coverimage'];


?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Profile Page</title>
<link href="Bootstrap/bootstrap-3.3.7-dist/bootstrap-3.3.7-dist/css/bootstrap.css" rel="stylesheet" type="text/css" />
</head>

<body>
<div class="container-fluid" >
<div class="row">
<div class="col-lg-1" style="border:solid hidden; height:1000px; background-color:black"></div>


<div class="col-lg-10" style="border:1px solid hidden ; height:1000px; padding-top:50px; background-color:#CCF">
<div class="col-lg-3" style="border:1px solid hidden; height: 300px">


<a href="image.php" style="color:black">
<div class="row" style="border:1px solid hidden ; height:270px ">
<img src="upload/<?php echo $img ?>" width="100%" height="100%"  />
</div>



<div class="row" style="border: 1px solid hidden  ; height:30px">

<p style="text-align:center; font-size:15px">
<b> Update Profile Picture</b>
</p>

</div>
</a>

</div>
<div class="col-lg-9" style="border:solid hidden; height: 300px">
<a href="coverimage.php" style="color:black">
<div class="row" style="border: 1px solid hidden ; height:270px">
<img src="uploadcover/<?php echo $cvrimg; ?>" width="100%" height="100%" />
</div>

<div class="row" style="border: 1px solid  hidden; height:30px">
<p style="text-align:left; padding-left:30px">
<b>Update Cover Photo</b>
</p>
</div>
</a>
</div>


<div class="row" style="padding:20px">
<div class="col-lg-12" style="border:solid hidden ; height:600px; padding:30px">

<div class="row" style="border:solid hidden; height:50px"> 
<div class="col-lg-3" style="border:solid hidden; height:50px">
<h3 style="padding-left:20px; line-height:5px"><b> NAME : </b></h3>
</div>
<div class="col-lg-6" style="border:solid hidden ; height:50px">
<h3 style="text-align:left; text-transform:capitalize; line-height:10px"><b><?php echo $name; ?></b></h3>
</div>

<div class="col-lg-3" style="border:solid hidden; height:50px">
<p><a href="UpdateName.php" style="text-decoration:underline"><h4>Edit </h4></a></p>
</div>

</div>
<br />
<div class="row" style="border:solid hidden; height:50px">
<div class="col-lg-3" style="border:solid hidden; height:50px">
<h3 style="padding-left:20px; line-height:5px"><b> EMAIL : </b></h3>
</div>
<div class="col-lg-6" style="border:solid hidden ; height:50px">
<h3 style="text-align:left;  line-height:10px"><b><?php echo $email1; ?></b></h3>

</div>

<div class="col-lg-3" style="border:solid hidden; height:50px">
<p><a href="ChangeEmail.php" style="text-decoration:underline"><h4>Edit </h4></a></p>
</div>

</div>
<br />

<div class="row" style="border:solid hidden; height:50px">
<div class="col-lg-3" style="border:solid hidden; height:50px">
<h3 style="padding-left:20px; line-height:5px"><b>PASSWORD: </b></h3>
</div>
<div class="col-lg-6" style="border:solid hidden ; height:50px">
<h3 style="text-align:left; text-transform:capitalize; line-height:10px"><b><?php echo "*********"; ?></b></h3>

</div>

<div class="col-lg-3" style="border:solid  hidden; height:50px">
<p><a href="changepassword.php" style="text-decoration:underline"><h4>Change Password </h4></a></p>

</div>

</div>

<br />

<div class="row" style="border:solid hidden; height:50px">
<div class="col-lg-3" style="border:solid hidden; height:50px">
<h3 style="padding-left:20px; line-height:5px"><b> PHONE NUMBER : </b></h3>
</div>
<div class="col-lg-6" style="border:solid  hidden; height:50px">
<h3 style="text-align:left; text-transform:capitalize; line-height:10px"><b><?php echo $phone; ?></b></h3>

</div>

<div class="col-lg-3" style="border:solid hidden; height:50px">
<p><a href="updatephone.php" style="text-decoration:underline"><h4>Update </h4></a></p>
</div>
</div>
<br />

<div class="row" style="border:solid hidden; height:50px">
<div class="col-lg-3" style="border:solid hidden; height:50px">
<h3 style="padding-left:20px; line-height:5px"><b> GENDER : </b></h3>
</div>
<div class="col-lg-6" style="border:solid hidden ; height:50px">
<h3 style="text-align:left; text-transform:capitalize; line-height:10px"><b><?php echo $gend; ?></b></h3>

</div>
<div class="col-lg-3" style="border:solid hidden; height:50px">
<p><a href="updategender.php" style="text-decoration:underline"><h4>Edit </h4></a></p>
</div>
</div>
<br />

<div class="row" style="border:solid hidden; height:50px">
<div class="col-lg-3" style="border:solid hidden; height:50px">
<h3 style="padding-left:20px; line-height:5px"><b> DATE OF BIRTH : </b></h3>
</div>
<div class="col-lg-6" style="border:solid hidden ; height:50px">
<h3 style="text-align:left; text-transform:capitalize; line-height:10px"><b><?php echo $dob; ?></b></h3>

</div>

<div class="col-lg-3" style="border:solid hidden; height:50px">
<p><a href="updateDOB.php" style="text-decoration:underline"><h4>Edit </h4></a></p>
</div>
</div>
<br />

<div class="row" style="border:solid hidden; height:50px">
<div class="col-lg-3" style="border:solid hidden; height:50px">
<h3 style="padding-left:20px; line-height:5px"><b> ADDRESS : </b></h3>
</div>
<div class="col-lg-6" style="border:solid hidden ; height:50px">
<h3 style="text-align:left; text-transform:capitalize; line-height:10px"><b><?php echo $address; ?></b></h3>

</div>

<div class="col-lg-3" style="border:solid hidden; height:50px">
<p><a href="updateAddress.php" style="text-decoration:underline"><h4>Edit </h4></a></p>
</div>
</div>
<br />

<p style="text-align:center"><a href="logout.php" name="lout" style="color:black"   </a><h3 style="text-align:center"><b>LOG OUT</b></h3></p>

</div>
</div>


</div>



<div class="col-lg-1" style="border:solid hidden; height:1000px; background-color:black"></div>





</div>
</div>
</body>
</html>


