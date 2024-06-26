<?php 
include("includes/connection.php");
include("functions/functions.php");  
?>
<nav class="navbar navbar-default" style="background-color: #400090; border-color: #400090;">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-target="#bs-example-navbar-collapse-1" data-toggle="collapse" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></a></li></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            </button>
            <a href="home.php" class="navbar-brand" style="color: #ffffff;">Social Space</a>
        </div>
        <div class="collapse navbar-collapse" data-target="#bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <?php
                    $user = $_SESSION['user_email'];
                    $get_user = "select * from users where user_email='$user'";
                    $run_user = mysqli_query($con, $get_user);
                    $row = mysqli_fetch_array($run_user);

                    $user_id = $row['user_id'];
                    $user_name = $row['user_name'];
                    $first_name = $row['f_name'];
                    $last_name = $row['l_name'];
                    $describe_user = $row['describe_user'];
                    $Relationship_status = $row['Relationship'];
                    $user_pass = $row['user_name'];
                    $user_email = $row['user_email'];
                    $user_country = $row['user_country'];
                    $user_gender = $row['user_gender'];
                    $user_birthday = $row['user_birthday'];
                    $user_image = $row['user_image'];
                    $user_cover = $row['user_cover'];
                    $recovery_account = $row['recovery_account'];
                    $register_date = $row['user_reg_date'];

                    $user_posts = "select * from posts where user_id = '$user_id'";
                    $run_posts = mysqli_query($con, $user_posts);
                    $posts = mysqli_num_rows($run_posts);
                ?>
                    
                <li><a href='profile.php?<?php echo "u_id=$user_id" ?>' style="color: #ffffff;"><?php echo "$first_name"; ?></a></li>
                <li><a href='home.php' style="color: #ffffff;">Home</a></li>
                <li><a href='members.php' style="color: #ffffff;">Find People</a></li>
                <li><a href='messages.php?u_id=new' style="color: #ffffff;">Messages</a></li>
                <?php
                    echo "

                    <li class='dropdown' style='background-color: #400090;'>
                        <a href='#' class='dropdown-toggle' data-toggle='dropdown' role='button' aria-haspopup='true' aria-expanded='false' style='background-color: #400090;'><span><i class='glyphicon glyphicon-chevron-down' style='color: #ffffff;'></i></span></a>
                        <ul class='dropdown-menu' style='background-color: #400090;'>
                            <li>
                                <a href='my_posts.php?u_id=$user_id' style='color: #ffffff;'>My Posts <span class='badge badge-secondary'>$posts</span></a>
                            </li>
                            <li>
                                <a href='edit_profile.php?u_id=$user_id' style='color: #ffffff;'>Edit Account</a>
                            </li>
                            <li role='separator' class='divider'></li>
                            <li>
                                <a href='logout.php' style='color: #ffffff;'>Logout</a>
                            </li>
                        </ul>
                    </li>
                    ";
                ?>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <form class="navbar-form navbar-left" method="get" action="results.php">
                        <div class="form-group">
                            <input type="text" class="form-control" name="user_query" placeholder="Search">
                        </div>
                        <button type="submit" class="btn btn-info" name="search" style="background-color: #E6E6FA; border-color: #E6E6FA; color: black">Search</button>
                    </form>
                </li>
            </ul>
        </div>
    </div>
</nav>