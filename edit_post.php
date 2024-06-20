
<!DOCTYPE html>
<?php
session_start();
include("includes/header.php");

if(!isset($_SESSION['user_email'])){
	header("location: index.php");
	exit(); // Add an exit to prevent further execution
}
?>
<html>
<head>
	<title>Edit Post</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="style/home_style.css">
</head>
<body style="background-color: #8C8CD7;">
	<div class="row">
	<div class="col-sm-3">
	</div>
	<div class="col-sm-6">
		<?php
			if(isset($_GET['post_id'])){
				$get_id = $_GET['post_id']; // Change variable name from $get_post to $get_id

				$get_post_query = "select * from posts where post_id='$get_id'";
				$run_post = mysqli_query($con, $get_post_query);
				$row = mysqli_fetch_array($run_post);

				$post_con = $row['post_content'];

			}
		?>
		<form action="" method="post" id="f">
			<center><h2 style="color: white;">Edit Your Post</h2></center><br>
			<textarea class="form-control" cols="83" rows="4" name="content"><?php echo $post_con;?></textarea><br>
			<input type="submit" name="update" value="Update Post" class="btn btn-info" style="background-color: #400090; border-color: #400090" />
		</form>

		<?php

		if (isset($_POST['update'])){
			$content = $_POST['content'];

			$update_post = "update posts set post_content='$content' where post_id='$get_id'";
			$run_update = mysqli_query($con, $update_post);

			if($run_update){
				echo "<script>alert('A Post has been Updated!')</script>";
				echo "<script>window.open('home.php', '_self')</script>";
			}
		}

		?>
	</div>
	<div class="col-sm-3">
	</div>
	</div>
</body>
</html>