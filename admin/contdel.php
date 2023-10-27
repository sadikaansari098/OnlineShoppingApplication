<?php

$con=mysqli_connect("localhost","root","","onlineshopping");
$delid=$_REQUEST['id'];
$del="delete from contact where id=$delid";
if(mysqli_query($con,$del))
{
	echo "<script>window.location.href='allcontact.php';alert('data deleted');</script>";
}
else
{
	echo "data not deleted";
}
?>