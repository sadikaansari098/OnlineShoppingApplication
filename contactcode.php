<?php
$con=mysqli_connect("localhost","root","","onlineshopping");

$a=$_POST['txt1'];
$b=$_POST['txt2'];
$c=$_POST['txt3'];

date_default_timezone_set("asia/kolkata");
$datetime=date("d/m/y")." ".("h:i:sa");

$ins="insert into contact(name,email,message,date_time) values('$a','$b','$c'
,'$datetime')";
if(mysqli_query($con,$ins))
{
	echo "data inserted";
}
else
{
	echo "data not inserted";
}



?>