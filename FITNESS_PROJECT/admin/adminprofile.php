<?php
session_start();
$name=$_SESSION['g'];
$psw=$_SESSION['w'];

?>

<html>
<head>
<title>
Admin Profile
</title>
<link href="../Bootstrap/bootstrap-3.3.7-dist/bootstrap-3.3.7-dist/css/bootstrap.css" rel="stylesheet" type="text/css">
</head>
<body>
<div class="container-fluid">
<div class="row" style="border:solid hidden; height:50px"> 
<div class="col-lg-3" style="border:solid hidden; height:50px">
<h3 style="padding-left:20px; line-height:5px"><b> Username : </b></h3>
</div>
<div class="col-lg-6" style="border:solid hidden ; height:50px">
<h3 style="text-align:left; text-transform:capitalize; line-height:10px"><b><?php echo $name ?></b></h3>

</div>
<div class="col-lg-3" style="border:solid hidden ; height:50px">
<h3 style="padding-left:20px; line-height:5px; text-align:right; padding-top:10px"><b> <a href="adminlogout.php" style="color:black">LOGOUT </a></b></h3>
</div>
</div>
 
<div class="row" style="border:solid hidden; height:50px"> 
<div class="col-lg-3" style="border:solid hidden; height:50px">
<h3 style="padding-left:20px; line-height:5px"><b> Password : </b></h3>
</div>
<div class="col-lg-9" style="border:solid hidden ; height:50px">
<h3 style="text-align:left; text-transform:capitalize; line-height:10px"><b><?php echo $psw ?></b></h3>

</div>

</div>
 



</div>


</body>
</html>




<?php


$c=mysqli_connect('localhost','root','','register');
$q="SELECT * FROM reg";
$r=mysqli_query($c,$q);
echo "<table border=5 style='margin:20px'>";
echo "<tr>";
echo "<th> ID </th>";
echo "<th> Username </th>";
echo "<th> Email </th>";
echo "<th> Alternate Email </th>";
echo "<th> Phone Number </th>";
echo "<th> Alternate Phone Number</th>";
echo "<th> Gender </th>";
echo "<th> Date Of Birth </th>";
echo "<th> Address </th>";
echo "<th> Alternate Address </th>";
echo "<th> Password </th>";
echo "<th> Image </th>";
echo "<th> Cover Image </th>";
echo "<th> Edit </th>";

echo "</tr>";

while($s=mysqli_fetch_array($r))
{

echo "<tr>";
echo "<td  width=300>".$s['id']."</td>";
echo "<td  width=300>".$s['username']."</td>";
echo "<td  width=300 >".$s['email']."</td>";
echo "<td  width=300 >".$s['alt_email']."</td>";
echo "<td  width=300 >".$s['phone_number']."</td>";
echo "<td  width=300 >".$s['alt_phone']."</td>";
echo "<td  width=300 >".$s['gender']."</td>";
echo "<td  width=300 >".$s['date_of_birth']."</td>";
echo "<td  width=300 >".$s['address']."</td>";
echo "<td  width=300 >".$s['alt_address']."</td>";
echo "<td  width=300 >".$s['password']."</td>";
echo "<td  width=300 >".$s['image']."</td>";
echo "<td  width=300 >".$s['coverimage']."</td>";
echo "<td  width=300 >" ."<a href='#'>"."Edit"."</a>". "</td>" ;
echo "</tr>";


}
echo "</table>";
?>





