<html>
<head>

</head>
<body>
<center>
<table border="1">
<h1 style="text-align:center;">Show Database</h1>
<tr>
<th>Id</th>
<th>Name</th>
<th>Email</th>
<th>Password</th>
<th>Mobile</th>
<th>Gender</th>

<th>Date_time</th>
</tr>
<?php
$con=mysqli_connect("localhost","root","","onlineshopping");
$sel="select * from registration";
$r=mysqli_query($con,$sel);
while($k=mysqli_fetch_array($r,MYSQLI_BOTH))
{
?>
<tr>
<td><?php echo $k['0']?></td>
<td><?php echo $k['1']?></td>
<td><?php echo $k['2']?></td>
<td><?php echo $k['3']?></td>
<td><?php echo $k['4']?></td>
<td><?php echo $k['5']?></td>
<td><?php echo $k['6']?></td>

<td>
<a href="regdel.php?id=<?php echo $k['0'];?>">DELETE</a>
</td>
</tr>
<?php
}
?>
</table>
</center>
</body>
</html>