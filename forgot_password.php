<!DOCTYPE html>

<html>
<head>
	
	<title>Forgotten Password</title>
	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
 	<link href='https://fonts.googleapis.com/css?family=Sofia' rel='stylesheet'>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<style>
	body{
		overflow-x: hidden;
	}
	.main-content{
    width: 50%;
    height: 40%;
    padding: 40px 50px;
    margin: 10px auto;
    background-color: #fff;
    border: 2px solid #e6e6e6;
	}
	.header{
		border: 0px solid #000;
		margin-bottom: 5px;
	}
	.well{
		background-color: #400090;
	}
	#signup{
		width: 60%;
		border-radius: 30px;
		background-color: #400090;
		border-color: #400090;
	}
</style>
<body style="background-color: #8C8CD7;">
<div class="row">
	<div class='col-sm-12'>
		<div class='well'>
			<center><h1 style="color: white;"><Strong>Pasword Recovery</Strong></h1></center>
		</div>		
	</div>	
</div>
<div class="row">
	<div class='col-sm-12'>
		<div class='main-content'>
			<div class='header'>
				<h3 style="text-align: center ;"><strong>Forgot Password</strong></h3><hr>
			</div>
			<div class='l_pass'>
				<form action="" method="post">
					<div class='input-group'>
						<span class="input-group-addon"><i class='glyphicon-user'></i></span>
						<input id="email" type="email" class="form-control" name="email" placeholder="Enter your Email" required>
					</div><br>
					<hr>
					<pre class="text">Enter Your Bestfriend Name Down Below?</pre>
					<div class="input-group">
						<span class="input-group-addon"><i class='glyphicon-pencil'></i></span>
						<input type="text" id="msg" class="form-control" placeholder="Someone" name="recovery_account" required>
					</div><br>
					<a style="text-decoration: none; float: right ; color: #400090 ;" data-toggle="tooltip" title="Signin" href="signin.php">Back to Signin?</a><br><br>
					<center><button id="signup" class="btn btn-info btn-lg" name="submit">Submit</button></center>
				</form>
			</div>
		</div>
	</div>	
</div>   
</body>
</html>
<?php
session_start();
include("includes/connection.php");
include("functions/functions.php");
     if(isset($_POST['submit'])){
     	$email = htmlentities(mysqli_real_escape_string($con, $_POST['email']));
     	$recovery_account = htmlentities(mysqli_real_escape_string($con,$_POST['recovery_account']));
     	$select_user = "select * from users where user_email = '$email' AND recovery_account='$recovery_account' ";

     	$query = mysqli_query($con,$select_user);
     	$check_user = mysqli_num_rows($query);
     	if($check_user == 1){
     		$_SESSION['user_email'] = $email;
     		echo "<script>window.open('change_password.php', '_self')</script>";
     	} 
     	else{
     		echo "<script>alert('Your email or Bestfriend name is incorrect')</script>";;
     	}
     }
?>