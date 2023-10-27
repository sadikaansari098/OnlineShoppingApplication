<?php
session_start();
$sesid=$_SESSION['user'];
$con=mysqli_connect("localhost","root","","onlineshopping");
$a=$_POST['opass'];
$b=$_POST['npass'];
$c=$_POST['cpass'];

$sel="select* from registration where email='$sesid'";
$r=mysqli_query($con,$sel);
$k=mysqli_fetch_array($r,MYSQLI_BOTH);
if($k['3']==$a)
{
	if($b==$c)
	{
	$up="update registration set
password='$a' where email ='$sesid'";
if(mysqli_query($con,$up))	

	{
		echo
		"<script>window.location.href='profile.php';alert('password change');</script>";
	}
	else
	{
		echo "password not change";
	}
	}
	else
	{
		echo"new and conf not match";
	}
}
else
{
	echo "old pass not match";
}



?>