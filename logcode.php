<?php
$con=mysqli_connect("localhost","root","","onlineshopping");

$a=$_POST['txt1'];
$b=$_POST['txt2'];

$sel="select* from registration where email='$a'";
$r=mysqli_query($con,$sel);
$k=mysqli_fetch_array($r,MYSQLI_BOTH);

if($k['2']==$a)
{
	session_start();
	$_SESSION['user']=$a;
	echo "<script>window.location.href='profile.php';alert('loginSuccess');</script>";
}
else
{
	echo "email not match";
}

?>