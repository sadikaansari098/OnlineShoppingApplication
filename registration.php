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
.c
	{
	animation-name:a;
		animation-duration:3s;
		animation-iteration-count:infinite;	
	}
	@keyframes a
	{
		0%{background:linear-gradient(pink,maroon);}
		0%{background:linear-gradient(maroon,pink);}
		75%{background:linear-gradient(pink,maroon);}
		100%{background:linear-gradient(maroon,pink);}
	}
	ul li
	{
		font-size:15px;
		height:50px;
		width:150px;
		line-height:50px;
list-style-type:none;
		text-decoration:none;
		
	}
	ul li a:hover	
	{
		
		text-decoration:none;
		border-radius:30px 30px 30px 30px;
		background:#cc4d4b;
	font-size:25px;
	font-weight:bold;
	}
	.t
	{
		animation-duration:3s;
		animation-name:aa;
		animation-iteration-count:infinite;
	}
	@keyframes aa
	{
	0%{color:purple;}
	25%{color:#6f1e35;}
	50%{color:#f85336;}
	75%{color:green;}
	100%{color:maroon;}
	}
	.b
	{
		background-image:url('image/b3.jpg');
		width:100%;
		background:cover;
	}
	.bb
	{
		background-image:url('image/b4.jpg');
		width:100%;
		//height:100%;
		background-repeat:no-repeat;
		background:cover;
	}
	.a
	{
		
		animation-name:ab;
		animation-duration:4s;
		animation-iteration-count:infinite;
	}
	@keyframes ab
	{
		0%{color:green;}
		25%{color:orange;}
		50%{color:yellow;}
		75%{color:pink;}
		100%{color:black;}
	}
	.m:hover
	{
		color:#ffc107;
		width:60px;
		size:5px;
	}
</style>
</head>
<body>
<div class="container-fluid">
<!--header-->
<div class="row p-3" style="background:#cc4d4b;">
<div class="col-sm-6">
<font size="4px"><i class="fa  fa-envelope "></i>&nbsp;mexmon@gmail.com &emsp;&emsp; <i class="fa fa-phone"></i>&nbsp;+918429042925</font>
</div>
<div class="col-sm-3"></div>
<div class="col-sm-3">

<a href="https://accounts.google.com/signin/v2/sl/pwd?passive=1209600&continue=https%3A%2F%2Faccounts.google.com%2FManageAccount&followup=https%3A%2F%2Faccounts.google.com%2FManageAccount&flowName=GlifWebSignIn&flowEntry=ServiceLogin" target="_blank">
<button class="btn btn-warning c m"><i class="fa fa-google-plus-square"></i></button></a>

<a href="">
<button class="btn btn-warning c m"><i class="fa fa-internet-explorer " ></i></button></a>

<a href="https://accounts.google.com/ServiceLogin?service=chromiumsync#identifier" target="_blank">
<button class="btn btn-warning c m"><i class="fa fa-chrome"></i></button></a>

<a href="https://www.facebook.com/campaign/landing.php?campaign_id=1653993517&extra_1=s%7Cc%7C318504236042%7Ce%7Cfacebook%27%7C&placement=&creative=318504236042&keyword=facebook%27&partner_id=googlesem&extra_2=campaignid%3D1653993517%26adgroupid%3D63066387003%26matchtype%3De%26network%3Dg%26source%3Dnotmobile%26search_or_content%3Ds%26device%3Dc%26devicemodel%3D%26adposition%3D1t1%26target%3D%26targetid%3Dkwd-362360550869%26loc_physical_ms%3D1007824%26loc_interest_ms%3D%26feeditemid%3D%26param1%3D%26param2%3D&gclid=Cj0KCQjwhJrqBRDZARIsALhp1WTgbMB5q9dwHhxIMsb2K50vHGwWN3zfqBpTXPbTGGYsM0DVGR8piv4aAgj0EALw_wcB" target="_blank">
<button class="btn btn-warning c m"><i class="fa  fa-facebook-square"></i></button>
</a>

<a href="https://twitter.com/login" target="_blank	">
<button class="btn btn-warning c m"><i class="fa fa-twitter-square"></i></button>
</a>
</div>
</div>
<!--menu-->
<div class="row">
<div class="col-sm-2"style="background:#edb865;" >
<ul id="a">
<li><a href="http://localhost/onlineShopping/" style="color:green; font-size:25px;">Home</a></li></br>
<li><a href="http://localhost/onlineShopping/aboutus.php" style="color:green; font-size:25px;">About</a></li></br>
<li><a href="http://localhost/onlineShopping/contactus.php" style="color:green; font-size:25px;">Contact</a></li></br>
<li><a href="http://localhost/onlineShopping/gallery.php" style="color:green; font-size:25px;" style="color:green; font-size:25px;">Gallery</a></li></br>
<li><a href="http://localhost/onlineShopping/signin.php" style="color:green; font-size:25px;" style="color:green; font-size:25px;">SingIn</a></li></br>
<li><a href="http://localhost/onlineShopping/registration.php" style="color:green; font-size:25px;" style="color:green; font-size:25px;">Ragistration</a></li></br>
</ul>
</div>
<div class="col-sm-10 b">

<h1 class="text-center t p-3" style="background:#c99be3;"><b>Registration</b></h1>
<br/><br/><br/>
<div class="card text-center bb">
 
  <div class="card-body bg-secondry">
  
    <h5 class="card-title"><font size="5px" color="maroon"><b><u>Registration Form</u></font></h5><br/><br/>
	<font size="4" color="brown">
	<form action="regcode.php" method="post">
	
    <label>Name :</label> <input type="text" placeholder="name" name="txt1"/>&emsp;&emsp;&emsp;&emsp;
	<label>Email :</label> <input type="email" placeholder="email" name="txt2"/>
	 <br/><br/>
	<label>Password :</label> <input type="password" placeholder="Password" name="txt3"/> &emsp;&emsp;&emsp;
	<label>Mobile :</label>&nbsp;&nbsp;&nbsp;<input type="number" placeholder="Number" name="txt4"/>
	  <br/><br/>
	  <label> Gender :</label>&emsp;&nbsp; <input type="radio" value="male" name="txt5"/>Male&emsp;&emsp;<input type="radio" value="female"name="txt5"/>Female&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
	 <label>City : </label><input type="text" placeholder="city" name="txt6"/><br/><br/>
    <button class="btn btn-success" style="width:200px;">Registered</button>
	<br/><br/><br/><br/></font></b>
	</form>
	<p class= "h"><a href="http://localhost/onlineShopping/signin.php"><font size="4" color="black"><b><u>If you are already Registered</u></font></b>
	<br/><br/>
	</a></p>
	<br/><br/><br/>
  </div>
</div>
<br/><br/><br/><br/>
</div>
</div>
<!--footer-->
<div class="row ">
<div class="col-sm-12 bg-dark text-white text-center p-3" >

<a href="https://www.facebook.com/campaign/landing.php?campaign_id=1653993517&extra_1=s%7Cc%7C318504236042%7Ce%7Cfacebook%27%7C&placement=&creative=318504236042&keyword=facebook%27&partner_id=googlesem&extra_2=campaignid%3D1653993517%26adgroupid%3D63066387003%26matchtype%3De%26network%3Dg%26source%3Dnotmobile%26search_or_content%3Ds%26device%3Dc%26devicemodel%3D%26adposition%3D1t1%26target%3D%26targetid%3Dkwd-362360550869%26loc_physical_ms%3D1007824%26loc_interest_ms%3D%26feeditemid%3D%26param1%3D%26param2%3D&gclid=Cj0KCQjwhJrqBRDZARIsALhp1WTgbMB5q9dwHhxIMsb2K50vHGwWN3zfqBpTXPbTGGYsM0DVGR8piv4aAgj0EALw_wcB" target="_blank">
<i class="fa a fa-facebook fa-2x" style="margin-top:20px;"></i>&emsp;&emsp;
</a>

<a href="https://twitter.com/login" target="_blank	">
<i class="fa a fa-twitter fa-2x" style="margin-top:20px;"></i>&emsp;&emsp;
</a>

<a href="https://www.instagram.com/accounts/login/">
<i class="fa a fa-instagram fa-2x" style="margin-top:20px;"></i></br>
</a>
Call US- +919696253390 Email US - mexmon@gmail.com  (from 10 am to 10pm monday to saturday)  We are closed on sunday& Bank holiday.

</div>
</div>
</div>
</body>
</html>