<?php
session_start();
$id1=$_SESSION['g'];


$c=mysqli_connect('localhost','root','','register');
$q="SELECT * FROM regtrainer WHERE id='$id1'";
$r=mysqli_query($c,$q);
$s=mysqli_fetch_array($r);

$name1=$s['username'];
$phone1=$s['phone_number'];
$address1=$s['address'];
$email1=$s['email'];
$gend1=$s['gender'];
$dob1=$s['date_of_birth'];
$doj1=$s['date_of_joining'];
$cour=$s['courses'];
$branch=$s['branch'];
$img1=$s['image'];
$cvrimg1=$s['coverimage'];


?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Trainer Profile</title>
<link href="../Bootstrap/bootstrap-3.3.7-dist/bootstrap-3.3.7-dist/css/bootstrap.css" rel="stylesheet" type="text/css" />
</head>

<body>
<div class="container-fluid">
<div class="row">
<div class="col-lg-1" style="border:solid hidden; height:1300px; background-color:black"></div>


<div class="col-lg-10" style="border:1px solid hidden ; height:1300px; padding-top:50px; background-color:#CCC">
<div class="col-lg-3" style="border:1px solid hidden; height: 300px">


<a href="../imaget.php" style="color:black">
<div class="row" style="border:1px solid hidden ; height:270px ">
<img src="../uploadt/<?php echo $img1; ?>" width="100%" height="100%"  />
</div>



<div class="row" style="border: 1px solid hidden  ; height:30px">

<p style="text-align:center; font-size:15px">
<b> Update Profile Picture</b>
</p>

</div>
</a>

</div>
<div class="col-lg-9" style="border:solid hidden; height: 300px">
<a href="../cvrimaget.php" style="color:black">
<div class="row" style="border: 1px solid hidden ; height:270px">
<img src="../cvruploadt/<?php echo $cvrimg1;  ?>" width="100%" height="100%" />
</div>

<div class="row" style="border: 1px solid hidden ; height:30px; padding-left:30px">
<p style="text-align:left">
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
<h3 style="text-align:left; text-transform:capitalize; line-height:10px"><b><?php echo $name1;  ?></b></h3>
</div>

<div class="col-lg-3" style="border:solid hidden; height:50px">
<p><a href="update_name.php" style="text-decoration:underline"><h4>Edit </h4></a></p>
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
<p><a href="change_email.php" style="text-decoration:underline"><h4>Edit </h4></a></p>
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
<p><a href="change_password.php" style="text-decoration:underline"><h4>Change Password </h4></a></p>

</div>

</div>

<br />

<div class="row" style="border:solid hidden; height:50px">
<div class="col-lg-3" style="border:solid hidden; height:50px">
<h3 style="padding-left:20px; line-height:5px"><b> PHONE NUMBER : </b></h3>
</div>
<div class="col-lg-6" style="border:solid  hidden; height:50px">
<h3 style="text-align:left; text-transform:capitalize; line-height:10px"><b><?php echo $phone1;  ?></b></h3>

</div>

<div class="col-lg-3" style="border:solid hidden; height:50px">
<p><a href="update_phone.php" style="text-decoration:underline"><h4>Update </h4></a></p>
</div>
</div>
<br />

<div class="row" style="border:solid hidden; height:50px">
<div class="col-lg-3" style="border:solid hidden; height:50px">
<h3 style="padding-left:20px; line-height:5px"><b> GENDER : </b></h3>
</div>
<div class="col-lg-6" style="border:solid hidden ; height:50px">
<h3 style="text-align:left; text-transform:capitalize; line-height:10px"><b><?php echo $gend1; ?></b></h3>

</div>
<div class="col-lg-3" style="border:solid hidden; height:50px">
<p><a href="update_gender.php" style="text-decoration:underline"><h4>Edit </h4></a></p>
</div>
</div>
<br />

<div class="row" style="border:solid hidden; height:50px">
<div class="col-lg-3" style="border:solid hidden; height:50px">
<h3 style="padding-left:20px; line-height:5px"><b> DATE OF BIRTH : </b></h3>
</div>
<div class="col-lg-6" style="border:solid hidden ; height:50px">
<h3 style="text-align:left; text-transform:capitalize; line-height:10px"><b><?php echo $dob1; ?></b></h3>

</div>

<div class="col-lg-3" style="border:solid hidden; height:50px">
<p><a href="update_dob.php" style="text-decoration:underline"><h4>Edit </h4></a></p>
</div>
</div>
<br />

<div class="row" style="border:solid hidden; height:50px">
<div class="col-lg-3" style="border:solid hidden; height:50px">
<h3 style="padding-left:20px; line-height:5px"><b> ADDRESS : </b></h3>
</div>
<div class="col-lg-6" style="border:solid hidden ; height:50px">
<h3 style="text-align:left; text-transform:capitalize; line-height:10px"><b><?php echo $address1; ?></b></h3>

</div>

<div class="col-lg-3" style="border:solid hidden; height:50px">
<p><a href="update_address.php" style="text-decoration:underline"><h4>Edit </h4></a></p>
</div>
</div>
<br />


<div class="row" style="border:solid hidden; height:50px">
<div class="col-lg-3" style="border:solid hidden ; height:50px">
<h3 style="padding-left:20px; line-height:5px"><b> JOINING DATE : </b></h3>
</div>
<div class="col-lg-6" style="border:solid hidden ; height:50px">
<h3 style="text-align:left; text-transform:capitalize; line-height:10px"><b><?php echo $doj1; ?></b></h3>

</div>

<div class="col-lg-3" style="border:solid hidden; height:50px">
<p><a href="update_doj.php" style="text-decoration:underline"><h4>Edit </h4></a></p>
</div>
</div>
<br />

<div class="row" style="border:solid hidden; height:50px">
<div class="col-lg-3" style="border:solid hidden; height:50px">
<h3 style="padding-left:20px; line-height:5px"><b> ENROLLED FOR: </b></h3>
</div>
<div class="col-lg-6" style="border:solid hidden ; height:50px">
<h3 style="text-align:left; text-transform:capitalize; line-height:10px"><b><?php echo $cour; ?></b></h3>

</div>

<div class="col-lg-3" style="border:solid hidden; height:50px">
<p><a href="courses.php" style="text-decoration:underline"><h4>Edit </h4></a></p>
</div>
</div>
<br />


<div class="row" style="border:solid hidden; height:50px">
<div class="col-lg-3" style="border:solid hidden; height:50px">
<h3 style="padding-left:20px; line-height:5px"><b> BRANCH : </b></h3>
</div>
<div class="col-lg-6" style="border:solid hidden ; height:50px">
<h3 style="text-align:left; text-transform:capitalize; line-height:10px"><b><?php echo $branch; ?></b></h3>

</div>

<div class="col-lg-3" style="border:solid hidden; height:50px">
<p><a href="branch.php" style="text-decoration:underline"><h4>Edit </h4></a></p>
</div>
</div>
<br />

<p style="text-align:center"><a href="log_out.php" name="lout"  style="color:black" </a><h3 style="text-align:center"><b>LOG OUT</b></h3></p>

</div>
</div>


</div>



<div class="col-lg-1" style="border:solid hidden; height:1300px; background-color:black"></div>





</div>

</div>
</body>
</html>