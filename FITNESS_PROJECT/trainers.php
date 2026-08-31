<?php
session_start();




?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Trainers</title>
<link href="Bootstrap/bootstrap-3.3.7-dist/bootstrap-3.3.7-dist/css/bootstrap.css" rel="stylesheet" type="text/css" />
</head>

<body>
<div class="container-fluid">
<div class="row">
<div class="col-lg-3" style="border:solid hidden; height:120px; background-image:url(images/menu_bg.png)">
<a href="Home.php"><img src="images/LOGO_fit.png" /></a>
</div>
<div class="col-lg-9" style="border:solid hidden; height:120px; background-image:url(images/menu_bg.png)">
<p style="padding-right:20px"> <a id="sukh" href="Home.php" style="text-decoration:none; color:black; padding-right:30px">
<h2 style="text-align:right"> Home </h2></a></p>
<?php

if(empty($_SESSION['g'])) 
{ ?>
<p style="text-align:right; font-size:25px; color:black"><a href="trainers/logintrainer.php" style="color:black">
 TRAINER LOGIN</a> &nbsp; | &nbsp; <a href="trainers/regtrainer.php" style="color:black"> TRAINER REGISTER </a></p>
<?php } else { ?>
<p style="text-align:right; font-size:25px; color:black; padding-right:10px"><a href="trainers/trainerlogout.php" style="color:black">
 LOG OUT</a> </p>
 
 
<?php } ?>

</div>
</div>

<div class="row">
<div class="col-lg-12" style="border:solid hidden; height:350px; background-image:url(images/mem.jpg)">

<div class="row" style="border:solid hidden; height:300px"></div>
<div class="row" style="border:solid hidden; height:50px; background-color:black; 
opacity:0.5; text-align:center; color:white; font-size:30px; line-height:50px"> <b><i>OUR TRAINERS</i></b></div>
</div>
</div>

<div class="row" style="background-color:black">
<div class="col-lg-12" style="border:solid hidden; height:600px">
<table class="table table-bordered table-responsive" style="color:#ffcd2c; padding:20px; border-radius:20px">

 <thead>
      <tr style="color:#ffcd2c">
      <th>TRAINERS</th>
        <th>AEROBICS</th>
        <th>ZUMBA</th>
        <th>BHANGRA</th>
      <th>GYM & CARDIO</th>
      <th>YOGA</th>
      <th> EXERCISES</th>
      </tr>
    </thead>
    
    <tbody>
    <tr>
    <th> CHD SEC 22 </th>
    <td> MR. A</td>
    <td> MR. B</td>
    <td> MR. A</td>
    <td> MR. C</td>
    <td> MR. A</td>
    <td> MR. B</td>
    </tr>
    
    <tr>
    <th> CHD SEC 17 </th>
    <td> MR. D</td>
    <td> MR. D</td>
    <td> MR. F</td>
    <td> MR. E</td>
    <td> MR. F</td>
    <td> MR. E</td>
    </tr>
    
    <tr>
    <th> CHD SEC 63 </th>
    <td> MR. I</td>
    <td> MR. G</td>
    <td> MR. I</td>
    <td> MR. G</td>
    <td> MR. H</td>
    <td> MR. H</td>
    </tr>
    
    <tr>
    <th> CHD SEC 20 </th>
    <td> MR. L</td>
    <td> MR. J</td>
    <td> MR. L</td>
    <td> MR. K</td>
    <td> MR. J</td>
    <td> MR. L</td>
    </tr>
    
    <tr>
    <th> CHD SEC 34 </th>
    <td> MR. N</td>
    <td> MR. M</td>
    <td> MR. O</td>
    <td> MR. N</td>
    <td> MR. M</td>
    <td> MR. O</td>
    </tr>
    
    <tr>
    <th> MOHALI PHASE 10 </th>
    <td> MR. Q</td>
    <td> MR. P</td>
    <td> MR. Q</td>
    <td> MR. R</td>
    <td> MR. R</td>
    <td> MR. P</td>
    </tr>
    
    <tr>
    <th> MOHALI PHASE 7 </th>
    <td> MR. S</td>
    <td> MR. S</td>
    <td> MR. S</td>
    <td> MR. U</td>
    <td> MR. S</td>
    <td> MR. T</td>
    </tr>
    
    <tr>
    <th> HOSHIARPUR </th>
    <td> MR. V</td>
    <td> MR. W</td>
    <td> MR. X</td>
    <td> MR. V</td>
    <td> MR. X</td>
    <td> MR. W</td>
    </tr>
    
    <tr>
    <th> JALANDHAR </th>
    <td> MR. Y</td>
    <td> MR. Z</td>
    <td> MR. A</td>
    <td> MR. Z</td>
    <td> MR. Z</td>
    <td> MR. Y</td>
    </tr>
    
    <tr>
    <th> LUDHIANA </th>
    <td> MR. A</td>
    <td> MR. B</td>
    <td> MR. A</td>
    <td> MR. C</td>
    <td> MR. A</td>
    <td> MR. B</td>
    </tr>
    
    <tr>
    <th> AMRITSAR </th>
    <td> MR. D</td>
    <td> MR. E</td>
    <td> MR. F</td>
    <td> MR. E</td>
    <td> MR. D</td>
    <td> MR. F</td>
    </tr>
    
    <tr>
    <th> AMBALA </th>
    <td> MR. G</td>
    <td> MR. I</td>
    <td> MR. A</td>
    <td> MR. H</td>
    <td> MR. D</td>
    <td> MR. Y</td>
    </tr>

    </tbody>
    </table>
    </div>
</div>


<div class="row">
<div class="col-lg-12" style="border:solid hidden; height:100px; background-color:black; padding:20px">
<p style="text-align:center; color:white"> &copy; Copyright 2017 Body Temple Fitness Club. All Rights Reserved.</p>
<p style="text-align:center; color:white; padding:0px"> Designed by <b>Sukhpreet Kaur.</b> </p>


</div>
</div>
</div>
</body>
</html>
