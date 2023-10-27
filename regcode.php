<?php
$con=mysqli_connect("localhost","root","","onlineshopping");

$a=$_POST['txt1'];
$b=$_POST['txt2'];
$c=$_POST['txt3'];
$d=$_POST['txt4'];
$e=$_POST['txt5'];

date_default_timezone_set("asia/kolkata");
$datetime=date("d/m/y")." ".("h:i:sa");

$ins="insert into registration(name,email,password,mobile,gender,date_time) values('$a','$b','$c','$d','$e','$datetime')";
if(mysqli_query($con,$ins))
{
	echo "data inserted";
}
else
{
	echo "data not inserted";
}
?>