<?php
include("C:/xampp/htdocs/SocialSpace/includes/connection.php");

	if(isset($_POST['sign_up'])){

		$first_name = htmlentities(mysqli_real_escape_string($con,$_POST['first_name']));
		$last_name = htmlentities(mysqli_real_escape_string($con,$_POST['last_name'])); 
		$pass = htmlentities(mysqli_real_escape_string($con,$_POST['u_pass']));
		$email = htmlentities(mysqli_real_escape_string($con,$_POST['u_email']));
		$country = htmlentities(mysqli_real_escape_string($con,$_POST['u_country'])); 
		$gender = htmlentities(mysqli_real_escape_string($con,$_POST['u_gender']));
		$birthday = htmlentities(mysqli_real_escape_string($con,$_POST['u_birthday']));
		$status = "verified";
		$posts = "no";
		$newgid = sprintf('%05d', rand(0, 999999));

		$username = strtolower($first_name . "_" . $last_name ."_". $newgid);
		$check_username_query = "select user_name from users where user_email='$email'";
		$run_username = mysqli_query($con,$check_username_query);

		if(strlen($pass) < 9 || !preg_match('/[A-Z]/', $pass) || !preg_match('/[a-z]/', $pass) || !preg_match('/[0-9]/', $pass) || !preg_match('/[^A-Za-z0-9]/', $pass)) {
		    echo"<script>alert('Password should be minimum 9 characters long and contain at least one uppercase letter, one lowercase letter, one number, and one special character!')</script>";
		    echo "<script>window.open('signup.php','_self')</script>";
		    exit();
		}

		$check_email = "select * from users where user_email='$email'";
		$run_email = mysqli_query($con, $check_email);

		$check = mysqli_num_rows($run_email);

		if($check == 1){
			echo "<script>alert('Email already exist, Please try again using another email')</script>";
			echo "<script>window.open('signup.php','_self')</script>";
			exit();
		}

		$rand = rand(1, 3);

			if($rand == 1)
				$profile_pic = "head_lion.jpg";
			else if($rand == 2)
				$profile_pic = "head_flower.jpg";
			else if($rand == 3)
				$profile_pic = "head_bird.png";

		$insert = "insert into users (f_name, l_name, user_name, describe_user, Relationship, user_pass, user_email, user_country, user_gender, user_birthday, user_image, user_cover, user_reg_date, user_status, posts, recovery_account)
		values ('$first_name', '$last_name', '$username', 'Hello Social Space. This is my default status!', '...', '$pass', '$email', '$country', '$gender', '$birthday', '$profile_pic', 'default_cover.jpg', NOW(), '$status', '$posts', 'I want to put a ding in the universe.')";
		$query = mysqli_query($con, $insert);
			

		if ($query) {
		    echo "<script>alert('Well Done $first_name, you are good to go.')</script>";
			echo "<script>window.open('signin.php', '_self')</script>";
		} else {
			echo "<script>alert('Registration failed, please try again!')</script>";
			echo "<script>window.open('signup.php', '_self')</script>";
		}
			
	}
?>