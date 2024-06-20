<!DOCTYPE html>
<html>
<head>
	<title>Social Space</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<style>
	body{
		overflow-x: hidden;
		background-color: #fafafa;
		background-image: url('images/download3.jpg'); /* Replace 'images/download2.jpg' with your image path */
      	background-size: cover;
      	background-position: center;
      	margin: 0;
      	padding: 0;
	}
	#centered1{
		position: absolute;
		font-size: 10vw;
		top: 30%;
		left: 20%;
		transform: translate(-50%. -50%);
		color: #000000;
	}
	#centered2{
		position: absolute;
		font-size: 10vw;
		top: 50%;
		left: 20%;
		transform: translate(-50%. -50%);
		color: #000000;
	}
	#centered3{
		position: absolute;
		font-size: 10vw;
		top: 70%;
		left: 20%;
		transform: translate(-50%. -50%);
		color: #000000;
	}
	#signup{
		width: 60%;
		border-radius: 30px;
		background-color: #400090;
		border-color: #400090;
	}
	#login{
		width: 60%;
		background-color: #fff;
		border: 1px solid #1da1f2;
		color: #400090;
		border-radius: 30px;
		border-color: #400090;
	}
	#login:hover{
		width: 60%;
		background-color: #fff;
		border: 1px solid #1da1f2;
		color: #7200da;
		border-radius: 30px
	}
	.well{
		background-color: #400090;
	}
	h1,
	h2,
	h3,
	h4{
	  color: #7200da;
	}
	footer {
      background-color: #400090;
      color: #fff;
      text-align: center;
      padding: 20px 0;
      position: absolute;
      bottom: 0;
      width: 100%;
      margin-right: -40px;
    }
</style>
<body>
	<div class="row" style="margin-right: -40px">
		<div class="col-sm-12">
			<div class="well">
				<center><h1 style="color: white;">Social Space</h1></center>
			</div>
		</div>
	</div>
	<div class ="row">
		<div class="col-sm-6" style="left: 0.5%">
		</div>
			<div id="centered1" class="centered"><h3 style="color: black; margin-left: -100px;"><span class="glyphicon glyphicon-search"></span>&nbsp&nbsp<strong>Follow what captivates you.</strong></h3></div>
			<div id="centered2" class="centered"><h3 style="color: black; margin-left: -100px;"><span class="glyphicon glyphicon-search"></span>&nbsp&nbsp<strong>Stay tuned to the discussions around you.</strong></h3></div>
			<div id="centered3" class="centered"><h3 style="color: black; margin-left: -100px;"><span class="glyphicon glyphicon-search"></span>&nbsp&nbsp<strong>Join the conversation.</strong></h3></div>
		<div class="col-sm-6" style="left:8%">
			<image src="images/images-r.png" class="img-rounded" title="Social Space" width="80px" height="80px" style="margin-left: 185px;">
			<h2><strong style="margin-left: 120px;">Stay updated in </strong></h2>
			<h2><strong style="margin-left: 120px;">the world today</strong></h2><br>
			<h4><strong style="margin-left: 162px;">Join Social Space</strong></h4><br>
			<form method="post" action="">
	        	<button id="signup" class="btn btn-info btn-lg" name="signup">Signup</button><br><br>
	        	<?php
	         		if (isset($_POST['signup'])) {
	            	echo "<script>window.open('signup.php','_self')</script>";
	          		}
	        	?>
	        	<button id="login" class="btn btn-info btn-lg" name="login">Login</button><br><br>
	        	<?php
	          	if (isset($_POST['login'])) {
	            	echo "<script>window.open('signin.php','_self')</script>";
	          		}
	        	?>
      		</form>
		</div>
	</div>
	<footer>
    <p>&copy; 2023 Social Space. All rights reserved.</p>
  	</footer>
</body> 
</html>