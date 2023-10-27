<?php

$sesid=$_REQUEST['id'];

if($sesid==1)
{
	echo"<script>window.location.href='index.php';alert('logout successfully');</script>";
}else
{
	echo "logout failed";
	
}

?>