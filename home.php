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
    <?php
    $user = $_SESSION['user_email'];
    $get_user = "select * from users where user_email='$user'";
    $run_user = mysqli_query($con, $get_user);
    $row = mysqli_fetch_array($run_user);

    $user_name = $row['user_name'];
    ?>
	<title><?php echo "$user_name"; ?></title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="style/home_style.css">
</head>
<style>
body{
    overflow-x: hidden;
}
#upload_image_button{
    position: absolute;
    top: 50.5%;
    right: 14%;
    min-width: 100px;
    min-width: 100px;
    border-radius: 4px;
    transform: translate(-50%, -50%);
}
#content{
    width: 70%;
}
#btn_post{
    min-width: 25%;
    min-width: 25%;
}
#insert_post{
    background-color: #ADD8E6; 
    border: 2px solid #333333; 
    padding: 40px 50px;
}
#posts{
    border: 5px solid #333333; 
    padding: 40px 50px;
    background-color: #ffffff;
    border-radius: 35px;
}
#posts-img{
    padding-top: 5px;
    padding-right: 10px;
    height: 50%;
    width: 100%;
}
#single_posts{
    border: 5px solid #333333; 
    padding: 40px 50px;
    border-radius: 35px;
    background-color: #ffffff;
}
</style>
<body style="background-color: #8C8CD7;">
<div class="row">
    <div id="insert_post" class="col-sm-12">
        <center>
        <form action="home.php?id=<?php echo $user_id; ?>" method="post" id="f" enctype="multipart/form-data">
        <textarea class="form-control" id="content" rows="4" name="content" placeholder="What's is in your mind?"></textarea><br>
        <label class="btn btn-warning" id="upload_image_button">Select Image
        <input type="file" name="upload_image" size="30">
        </label>
        <button id="btn_post" class="btn btn-success" name="sub" style="background-color: #32CD32">Post</button>
        </form>
        </center>
        <?php insertPost(); ?>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <center><h2><strong style="color: white">News Feed</strong></h2><br></center>
            <?php echo get_posts(); ?>
        </div>
    </div>    
</div>
</body>
</html>