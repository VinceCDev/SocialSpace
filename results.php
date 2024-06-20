<!DOCTYPE html>
<?php
session_start();
include("includes/header.php");

if(!isset($_SESSION['user_email'])){
	header("location: index.php");
}
?>
<html>
<head>
	<title>See Results</title>
	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
 	<link href='https://fonts.googleapis.com/css?family=Sofia' rel='stylesheet'>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="style/home_style.css">
</head>
<body style="background-color: #8C8CD7;">
<div class="row">
    <center><h2 style="color: white;">See your results here!</h2></center><br>
    <?php 
    	include("functions/functions.php");
    	results(); ?>
</div>   
</body>
</html>