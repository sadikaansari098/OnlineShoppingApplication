<?php

$con=mysqli_connect("localhost","root","","onlineshopping");
$delid=$_REQUEST['id'];
$del="delete from registration where id=$delid";
if(mysqli_query($con,$del))
{
	echo "<script>window.location.href='allregister.php';alert('data deleted');</script>";
}
else
{
	echo "data not deleted";
}
?>