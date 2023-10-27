<html>
<head>
<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link href="css/bootstrap.min.css" rel="stylesheet" />
		<script src="js/jquery-3.3.1.slim.min.js"></script>
		<script src="js/popper.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>
		<style>
		.b
		{
			background:url('image/b23.jpg');
			background-repeat:no-repeat;
			background:cover;
			width:100%;;
			height:100vh;
			
		}
		.container
		{
			border:2px solid white;
			padding:50px 60px;
			margin-top:60px;
			background:url('image/b23.jpg');
-webkit-box-shadow: -4px 0px 19px 7px rgba(0,0,0,0.75);
-moz-box-shadow: -4px 0px 19px 7px rgba(0,0,0,0.75);
box-shadow: -4px 0px 19px 7px rgba(0,0,0,0.75);			
		}
		</style>
</head>
<body>
<div class="container-fluid b">
<div class="row">
<div class="col-sm-4"></div>
<div class="col-sm-4">
<!--form-->
<form class="container" action="changepasscode.php" method="post">
<img src="image/u2.png" height="80px" width="80px" style="margin-left:110px;">
<h3 class="text-center">user Change Password</h3 >
  <div class="form-group ">
    <label for="exampleInputEmail1" class="text-dark" ><b>&emsp;Old Password: </b></label>
    <input type="password" class="form-control" name="opass" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Insert Your Old Password" style="width:300px;">
    
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1" class="text-darke">&emsp;<b>New Password : </b></label>
    <input type="password" name="npass" class="form-control" id="exampleInputPassword1" placeholder="Insert Your New Password">
  </div>
 
 <div class="form-group">
    <label for="exampleInputPassword1" class="text-darke">&emsp;<b>Confirm Password : </b></label>
    <input type="password" name="cpass" class="form-control" id="exampleInputPassword1" placeholder="Insert Your Confirm Password">
  </div>
 
  <button type="submit" class="btn btn-success btn-block">Confirm</button>
</form>
</div>
<div class="col-sm-4"></div>
</div>

</div>
</body>

</html>