<?php
session_start();

?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Home</title>

<link rel="stylesheet" href="Bootstrap/bootstrap-3.3.7-dist/bootstrap-3.3.7-dist/css/bootstrap.min.css" />
<script src="jq/jquery-1.10.2.js"></script>
<script src="jq/bootstrap.min.js"></script>
<script src="jq/jquery.min.js"></script>
<style>
li .dropdown-menu {
	background-color:black;
	color:white;
}
</style>

</head>

<body style="background-image:url(images/picture1.jpg); background-attachment:fixed">
<div class="container-fluid">
<div class="row">
<div class="col-lg-3" style="border:solid hidden; height:120px; background-image:url(images/menu_bg.png)">
<a href="Home.php"><img src="images/LOGO_fit.png" /></a>
</div>
<div class="col-lg-9" style="border:solid hidden  ; height:120px; background-image:url(images/menu_bg.png)">
<div class="row" style="padding-right:20px">

<div class="col-lg-12" style="border:solid hidden ; height:60px; line-height:70px; text-align:right">
<a href="https://www.facebook.com/"><img src="images/fb.png"/></a>&nbsp; &nbsp;
<a href="https://twitter.com/login"><img src="images/twitter.png" /></a>&nbsp; &nbsp;
<a href="https://plus.google.com/"><img src="images/gplus.png" /></a>&nbsp; &nbsp;
<a href="https://www.instagram.com/"><img src="images/insta.png" /></a>&nbsp; &nbsp;
<a href="https://web.whatsapp.com/"><img src="images/whatsapp.png" /></a>&nbsp; &nbsp;
<a href="https://in.yahoo.com/"><img src="images/yahoo.png" /></a>&nbsp; &nbsp;
<a href="https://www.youtube.com/"><img src="images/you.png" /></a>&nbsp; &nbsp;
<a href="https://in.pinterest.com/"><img src="images/pin.png" /></a>&nbsp; &nbsp;
<a href="https://www.snapchat.com/"><img src="images/snapchat.png" /></a>&nbsp; &nbsp;




</div>
<div class="col-lg-12" style="border:solid hidden; height:60px">

<ul class="list-inline"  style="font-size:24px; font-family:Arial, Helvetica, sans-serif; text-align:right; 
line-height:50px" >
<li class="active"> <a href="Home.php" style="color:black; text-decoration:none; color:black" > Home |</a></li>
<li id="a"> <a href="AboutUs.php" style="color:black; text-decoration:none; color:black"> About  |</a></li>
<li id="a"> <a href="trainers.php" style="color:black; text-decoration:none; color:black"> Trainers  |</a></li>


<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="classes.php" style="color:black; text-decoration:none">
Classes <span class="caret"></span></a> |
<ul class="dropdown-menu" role="menu">
<li><a href="yoga.php" style="color:#ffcd2c"><b>Power Yoga </b></a></li>
<li><a href="bhangra and pt.php" style="color:#ffcd2c"><b>Bhangra</b></a></li>
<li><a href="zumba.php" style="color:#ffcd2c"><b>Zumba</b></a></li>
<li><a href="aerobics.php" style="color:#ffcd2c"><b>Aerobics</b></a></li>
<li><a href="cardio.php" style="color:#ffcd2c"><b>Cardio</b></a></li>

<li><a href="classes.php" style="color:#ffcd2c"><b>Class Timetable</b></a></li>



</ul>


</li>

<li id="a"> <a href="nutrition.php" style="color:black; text-decoration:none; color:black"> Nutrition  |</a></li>


<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="pricing.html" style="color:black; text-decoration:none">Offers <span class="caret"></span></a> |
<ul class="dropdown-menu" role="menu">
<li><a href="membership.php" style="color:#ffcd2c"><b>Membership Offers </b></a></li>
<li><a href="corporate.php" style="color:#ffcd2c"><b>Corporate Offers</b></a></li>


</ul>


</li>

<li id="a"> <a href="Gallery.php" style="color:black; text-decoration:none; color:black"> Gallery |</a></li>
<li id="a"> <a href="ContactUs.php" style="color:black; text-decoration:none; color:black"> Contact </a></li>

</ul>
</div>
</div>
</div>

</div>

<div class="row"> 
<div class="col-lg-1" style="border:solid hidden; height:570px"> 
</div>
<div class="col-lg-10" style="border:solid hidden; height:570px; padding-top:40px; padding-left:0px; padding-right:0px"> 


<div class="col-lg-7" style="border:solid hidden; height:500px; padding:0px; background-color:white">
<img class="photo" src="images/1 (7).jpg" style="width:100%; height:100%"/>
<img class="photo" src="images/1 (8).jpg" style="width:100%; height:100%"/>
<img class="photo" src="images/1 (6).jpg" style="width:100%; height:100%"/>
<img class="photo" src="images/1 (4).jpg" style="width:100%; height:100%" />
<img class="photo" src="images/1 (1).png" style="width:100%; height:100%" />


</div>
<script>
var myIndex = 0;
pp();

function pp() {
    var i;
    var x = document.getElementsByClassName("photo");
    for (i = 0; i < x.length; i++) {
      x[i].style.display = "none";  
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}    
    x[myIndex-1].style.display = "block";  
    setTimeout(pp, 4000);    
}
</script>
<div class="col-lg-5" style="border:solid hidden; height:500px; background-color:black; text-align:center;
 font-family:Arial, Helvetica, sans-serif">

<p style="text-align:center; padding-top:30px">
<b style="font-size:40px"><h1 style="color:white; text-align:center; text-transform:uppercase">
Join <span style="color:#ffcd2c;">Our Team</span></h1></b>
</p>


<p style="color:white; padding:12px; font-size:20px; padding-top:50px"> Register with us to get the membership card from our fitness club and enjoy first 2 days trial free 
of cost and other exciting offers. Only registered candidates can avail our membership discounts(upto 30%). For more check our 
<a href="pricing.php" style="color:#ffcd2c">Offers</a> column. 
<p style="color:white; padding:12px; font-size:20px"> If not a member yet, click Register. </p>

<?php

if(empty($_SESSION['h'])) 
{ ?>
<p style="text-align:center; font-size:25px; color:white"><a href="login.php" style="color:#ffcd2c">
 LOGIN</a> &nbsp; | &nbsp; <a href="register.php" style="color:#ffcd2c"> REGISTER </a></p>
<?php } else { ?>
<p style="text-align:center; font-size:25px; color:white"><a href="loggout.php" style="color:#ffcd2c">
 LOG OUT</a> </p>
 
 
<?php } ?>




</div>

</div>
<div class="col-lg-1" style="border:solid hidden; height:570px"> </div>

</div>

<div class="row" style="background-color:#333; color:white">
<div class="col-lg-12" style="border:solid hidden; height:380px">
<h1 style="font-size:30px; text-align:center; text-transform:uppercase; padding-top:30px; font-family:'Times New Roman', Times, serif"><strong>We are building the future of fitness.  &nbsp; Come , <a style="color:#ffcd2c; text-decoration: none;" href="register.php">join us</a> ! </strong></h1>



                       <p style="padding:40px; font-size:18px; text-align:center; font-family:Arial, Helvetica, sans-serif">BODY TEMPLE is a level beyond. It's training without limits, fuelled by the power of transformation and the promise of infinite potential. It's your body made stronger, your choices made smarter, your life lived better. BT knows that productivity doesn't end with the workday, fitness pushes past the walls of the gym and wellness doesn't come in a bottle. BT aims high, asks for the moon and refuses to settle.</p>
                       <p style="padding-left:100px">
                      <a href="yoga.php" style="color:#ffcd2c; text-decoration:none">  
                      <img src="images/yoga.png" title="YOGA" /><b>YOGA </b> </a>
                        &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                       <a href="aerobics.php" style="color:#ffcd2c; text-decoration:none">
                       <img src="images/aerobics.png" title="AEROBICS" /> <b>AEROBICS</b></a>
                        &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                       <a href="zumba.php" style="color:#ffcd2c; text-decoration:none">
                       <img src="images/zumba.png" title="ZUMBA" /> <b>ZUMBA</b></a>
                        &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                       <a href="bhangra and pt.php" style="color:#ffcd2c; text-decoration:none">
                       <img src="images/bhangra.png" title="BHANGRA" /> <b>BHANGRA</b></a>
                        &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp;
                       <a href="personal training.php" style="color:#ffcd2c; text-decoration:none">
                       <img src="images/personal training.png" title="PERSONAL TRAINING"/> <b>PERSONAL TRAINING</b></a>
</p>
                       
     
     




</div>
</div>
<!-- Our facilities div starts -->
<div class="row" style="padding-top:30px">
<div class="col-lg-1" style="border:solid hidden; height:870px"></div>

<div class="col-lg-10" style="border:solid hidden; height:870px">
<p style="text-align:center">
<b style="font-size:50px"><h1 style="color:white; text-align:center; text-transform:uppercase">
Our <span style="color:#ffcd2c;">Facilities</span></h1></b>
</p>


                       <b> <p style="color:white; text-align:center; font-size:30px; padding-top:10px">
                       Take your workout to the next level. Go one-on-one in our dedicated studios, where the most talented teachers meet the best equipment.</p></b>



<div class="row">
<div class="col-lg-4" style="border:solid hidden; height:200px">
<div class="col-lg-12" style="border:solid hidden; padding:10px; height:200px; background-color:black; border-radius:15px">
<p><b> <h4 style="color:white; text-transform:uppercase; padding:10px;color:#ffcd2c">fitness consultation</h4></b> </p> 
<p><b> <h5 style="color:white"> Get a free physical fitness assessment and how a personalized fitness programme that is designed to help you achieve your fitness goal. our certified trainers will guide you through each step.</h5></b></p>

</div>

</div>
<div class="col-lg-4" style="border:solid hidden; height:200px">
<div class="col-lg-12" style="border:solid hidden; padding:10px; height:200px; background-color:black; border-radius:15px">
<p><b> <h4 style="color:white; text-transform:uppercase; padding:10px;color:#ffcd2c">cardio theatre</h4></b> </p> 
<p><b> <h5 style="color:white"> Sweat it out at our state of art cardio theatre. We have top of the line imported equipments that
comprises of treadmills, Recumbent bikes, upright bikes, cross and cardio rowing.</h5></b></p>


</div>

</div>
<div class="col-lg-4" style="border:solid hidden; height:200px">
<div class="col-lg-12" style="border:solid hidden; padding:10px; height:200px; background-color:black; border-radius:15px">
<p><b> <h4 style="color:white; text-transform:uppercase; padding:10px;color:#ffcd2c">group exercise</h4></b> </p> 
<p> <b><h5 style="color:white"> We offer Yoga, Aerobics, pilates, spinning and a host of other group classes to add ring to your regular workouts. </h5></b></p>
</div>

</div>
</div>

<!-- 3 boxes end here -->

<div class="row" style="padding-top:20px">
<div class="col-lg-4" style="border:solid hidden; height:200px">
<div class="col-lg-12" style="border:solid hidden; padding:10px; height:200px; background-color:black; border-radius:15px">
<p><b> <h4 style="color:white; text-transform:uppercase; padding:10px;color:#ffcd2c">spa</h4></b> </p> 
<p><b> <h5 style="color:white"> For a perfect start or finish to your workout, take some time outfor yourself in our revitalizing spa. Relax muscles and evaporate stress, as you soak stretch, breathe, float, luxuriate in our spa. </h5></b></p>
</div>

</div>
<div class="col-lg-4" style="border:solid hidden; height:200px">
<div class="col-lg-12" style="border:solid hidden; padding:10px; height:200px; background-color:black; border-radius:15px">
<p> <b><h4 style="color:white; text-transform:uppercase; padding:10px;color:#ffcd2c">lockers and changing room</h4></b> </p> 
<p><b> <h5 style="color:white"> Members are provided with spacious changing rooms with hygiene surrounds. The lockers secur your gear while you enjoy your workout. </h5></b></p>
</div>

</div>
<div class="col-lg-4" style="border:solid hidden; height:200px">
<div class="col-lg-12" style="border:solid hidden; padding:10px; height:200px; background-color:black; border-radius:15px">
<p><b> <h4 style="color:white; text-transform:uppercase; padding:10px;color:#ffcd2c">nutritionist</h4></b> </p> 
<p> <b><h5 style="color:white">Our Ntritionist will address your nutritional needs and shed light or how diet impacts your fitness and how properly can help you to maximize your potential. </h5></b></p>
</div>

</div>
</div>

<!-- 3 boxes end here -->
<div class="row" style="padding-top:20px">
<div class="col-lg-4" style="border:solid hidden; height:200px">
<div class="col-lg-12" style="border:solid hidden; padding:10px; height:200px; background-color:black; border-radius:15px">
<p><b> <h4 style="color:white; text-transform:uppercase; padding:10px;color:#ffcd2c">free weights</h4></b> </p> 
<p><b> <h5 style="color:white">We have a separate section with rubberized flooring with a range of weights to assthat extra power to
your workload. </h5></b></p>
</div>

</div>
<div class="col-lg-4" style="border:solid hidden; height:200px">
<div class="col-lg-12" style="border:solid hidden; padding:10px; height:200px; background-color:black; border-radius:15px">
<p><b> <h4 style="color:white; text-transform:uppercase; padding:10px;color:#ffcd2c">personal training</h4></b> </p> 
<p> <b><h5 style="color:white"> For those who need extra attention, achieve your fitness goals under the expert guidance of our certified traiers.</h5></b></p>
</div>

</div>
<div class="col-lg-4" style="border:solid hidden; height:200px">
<div class="col-lg-12" style="border:solid hidden; padding:10px; height:200px; background-color:black; border-radius:15px">
<p> <b><h4 style="color:white; text-transform:uppercase; padding:10px;color:#ffcd2c">health cafe</h4></b> </p> 
<p> <b><h5 style="color:white">Treat yourself to any of the healthy options on the menu after a workout. </h5></b></p>
</div>

</div>
</div>


</div>



<div class="col-lg-1" style="border:solid hidden; height:870px"></div>

</div>
<!-- Our partners div starts -->

<div class="row">
<div class="col-lg-12" style="border:solid hidden; height:200px">
<p style="text-align:center">
<b style="font-size:50px"><h1 style="color:white; text-align:center; text-transform:uppercase">Our <span style="color:#ffcd2c;">Partners</span></h1></b>
</p>
<p style="padding-left:150px">
<b><img src="images/p5.png" /> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 
<img src="images/p3.png" />&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
<img src="images/p4.png" /> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
<img src="images/p6.png" /> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
<img src="images/p1.png" /> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
<img src="images/p2.png" /> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
</b>

</p>

</div>
</div>

<!-- footer starts-->
<div class="row">
<div class="col-lg-12" style="border:solid hidden; height:100px; background-color:black; padding:20px">
<p style="text-align:center; color:white"> &copy; Copyright 2017 Body Temple Fitness Club. All Rights Reserved.</p>
<p style="text-align:center; color:white; padding:0px"> Designed by <b>Sukhpreet Kaur.</b> </p>


</div>
</div>
<!-- footer ends -->


</div>
</body>
</html>
