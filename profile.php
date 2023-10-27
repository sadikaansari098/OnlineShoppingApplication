<?php
session_start();
$sesid=$_SESSION['user'];
$con=mysqli_connect("localhost","root","","onlineshopping");

$sel="select * from registration where email='$sesid'";
$r=mysqli_query($con,$sel);
$k=mysqli_fetch_array($r,MYSQLI_BOTH);

?>
<html>
<head>
</head>
<body>
<a href="changepass.php">change password</a><br/><br/>
<a href="userlogout.php?id=1">Logout</a><br/><br/>
<h1>Welcome &emsp; <?php echo $k['2']; ?></h1>

</body>
</html>