<?php
$con=mysqli_connect("localhost","root","","onlineshopping");
$a=$_POST['opass'];
$b=$_POST['npass'];
$c=$_POST['cpass'];

$sel="select * from adminlogin where id=1";
$r=mysqli_query($con,$sel);
$k=mysqli_fetch_array($r,MYSQLI_BOTH);
if($k['2']==$a)
{	
	$up="update adminlogin set password='$b' where id=1";
	if($b==$c)
	{
		echo "<script>window.location.href='../dashboard.php';alert('password changed successfully');</script>";
	}
else
{
	echo "new and conf pass not pass";

}
}
else
{
	echo "Old Passsword Not Match";

}
?>