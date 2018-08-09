<!DOCTYPE html>
<html>
<head>
	<title>SignUp</title>
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
	.main-content{
		width: 50%;
		height: 40%;
		margin: 10px auto;
		background-color: #e6e6e6;
		padding: 40px 50px;
	}
	.header{
		border: 0px solid #000;
		margin-bottom: 5px;
	}
	.well{
		background-color: black;
	}
	#signup{
		width: 60%;
		border-radius: 30px;
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
			<div class="col-sm-12"></div>
			<div class="main-content">
				<div class="header">
					<h3 style="text-align: center;"><strong>Join LookOn</strong></h3><hr>
				</div>
				<div class="l-part">
					<form action="" method="post">
						<div class="input-group">
							<span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
							<input type="text" class="form-control" placeholder="First Name" name="first_name" required="required">
							
						</div><br>
						<div class="input-group">
							<span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
							<input type="text" class="form-control" placeholder="Last Name" name="last_name" required="required">
							
						</div><br>
						<div class="input-group">
							<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
							<input id="password" type="password" class="form-control" placeholder="Password" name="u_pass" required="required">
							
						</div><br>
						<div class="input-group">
							<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
							<input id="email" type="email" class="form-control" placeholder="Email" name="u_email" required="required">
							
						</div><br>
						<div class="input-group">
							<span class="input-group-addon"><i class="glyphicon glyphicon-chevron-down"></i></span>
							<select class="form-control" name="u_country" required="required">
								<option disabled>Select your country</option>
								<option>India</option>
								<option>USA</option>
								<option>China</option>
								<option>UK</option>
								<option>Australi</option>
								<option>Pakistan</option>
								<option>Japan</option>
								
							</select>
							
						</div><br>
						<div class="input-group">
							<span class="input-group-addon"><i class="glyphicon glyphicon-chevron-down"></i></span>
							<select class="form-control input-md" name="u_gender" required="required">
								<option disabled>Select your Gender</option>
								<option>Male</option>
								<option>Female</option>
								<option>Others</option>
								
							</select>
							
						</div><br>
							<div class="input-group">
							<span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
							<input type="date" class="form-control input-md" placeholder="Email" name="u_birthday" required="required">
							
						</div><br>
						<a style="text-orientation: none;float: right;color: #187FAB;" data-toggle="tooltip" title="Signin" href="signin.php">Already have an account?</a><br><br>
						<center><button id="signup" class="btn btn-info btn-lg" name="sign_up">SignUp</button></center>
						<?php
						include("insert_user.php");
						?>

						
					</form>

				</div>
			</div>
		</div>
	</div>
</body>
</html>
