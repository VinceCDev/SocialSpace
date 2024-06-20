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
	<title>View Your Posts</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="style/home_style.css">
</head>
<body style="background-color: #8C8CD7">
	<div class="row">
		<div class="col-sm=12">
			<center><h2 style="color: white;">Comments</h2></center><br>
			<?php echo "<style>#posts{border: 5px solid #333333; padding: 40px 50px;background-color: #ffffff;border-radius: 35px;}</style>"; single_post(); ?>
		</div>
	</div>
</body>
</html>