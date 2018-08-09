<!DOCTYPE html>
<html>
<head>
	<title>LookOn login and signup</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width-device-width, intial-scale-1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.33.7/js/bootstrap.min.js"></script>
</head>
<style>
body{
	overflow-x: hidden;
}
#signup{
	width: 60%;
	border-radius: 30px;
}
#login{
	width: 60%;
	background-color: #fff;
	border: 1px solid #1da1f2;
	color: #1da1f2;
	border-radius: 30px;
}
#login:hover{
	width: 60%;
	background-color: #fff;
	color: #1da1f2;
	border: 2px solid #1da1f2;
	border-radius: 30px;
}
.well{
	background-color: black;
}
</style>
<body>
	<div class="row">
		<div class="col-sm-12">
			<div class="well">
				<center><h1 style="color: white;">LookOn</h1></center>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-6" style="left: 0.5%;">
				<img src="images\lookon.jpg" class="img-rounded" title="lookon" width="650px" height="540px">
			</div>
			<div class="col-sm-6" style="left: 8%;">
				<img src="images\mf.png" class="img-rounded" title="lookon" width="80px" height="80px">
				<h2><strong>Look into the world</strong></h2><br>
				<h4><strong>Join with us today</strong></h4>
				<form method="post" action="">
					<button id="signup" class="btn btn-info btn-lg" name="signup">SignUp</button><br><br>
					<?php
					    if(isset($_POST['signup'])){
					    	echo "<script>window.open('signup.php','_self')</script>";
					    }

					?>
					<button id="login" class="btn btn-info btn-lg" name="login">LogIn</button><br><br>
					<?php
					    if(isset($_POST['login'])){
					    	echo "<script>window.open('signin.php','_self')</script>";
					    }

					?>
					
				</form>
			
		</div>
	</div>
</body>
</html>
