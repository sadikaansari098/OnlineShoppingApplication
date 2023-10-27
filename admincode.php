<?php
$con=mysqli_connect("localhost","root","","onlineshopping");

$a=$_POST['txt1'];
$b=$_POST['txt2'];

$sel="select* from registration where email='$a'";
$r=mysqli_query($con,$sel);
$k=mysqli_fetch_array($r,MYSQLI_BOTH);

if($k['1']==$a)
{
if($jk['2']==$b)
{
echo "login success";	
}
else
{
	echo "password wrong";
}
}
else
{
echo "email wrong";	
} 
?>