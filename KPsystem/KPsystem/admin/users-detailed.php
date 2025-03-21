<?php
/**
 * This template displays Users Detailed
 * 
 * Template Name: Users Detailed
 */
  if (!session_id()) {
    session_start();
}

include('web/database.php');

 $user_id = $_SESSION["id"];
 $username = $_SESSION['details'][$user_id]['username'];
 $email = $_SESSION['details'][$user_id]['email'];
 $role = $_SESSION['details'][$user_id]['role'];
 
 if($user_id === null || $role != "Admin"){
     header("Location: https://www.arketek.co.za/KPsystem/admin/login");
    exit();
 }
 
 $uid = $_POST['uid'];
 
$query6 = "SELECT SUM(actual_weekly_sales_target) AS total_value FROM grading_tool WHERE user_id='$uid'";
$result6 = mysqli_query($conn, $query6);
$row6 = mysqli_fetch_assoc($result6);
$tot_ws = $row6['total_value'];

$query7 = "SELECT AVG(actual_wrap_time) AS avg_wrap_time FROM grading_tool WHERE user_id='$uid'";
$result7 = mysqli_query($conn, $query7);
$row7 = mysqli_fetch_assoc($result7);
$tot_wt = $row7['avg_wrap_time'];

$query8 = "SELECT AVG(actual_connected_talk_time) AS avg_talk_time FROM grading_tool WHERE user_id='$uid'";
$result8 = mysqli_query($conn, $query8);
$row8 = mysqli_fetch_assoc($result8);
$tot_ctt = $row8['avg_talk_time'];

$query9 = "SELECT AVG(actual_calls) AS avg_calls FROM grading_tool WHERE user_id='$uid'";
$result9 = mysqli_query($conn, $query9);
$row9 = mysqli_fetch_assoc($result9);
$tot_ac = $row9['avg_calls'];

$query10 = "SELECT AVG(actual_call_length) AS avg_call_length FROM grading_tool WHERE user_id='$uid'";
$result10 = mysqli_query($conn, $query10);
$row10 = mysqli_fetch_assoc($result10);
$tot_acl = $row10['avg_call_length'];

$query11 = "SELECT AVG(actual_attendance) AS avg_attendance FROM grading_tool WHERE user_id='$uid'";
$result11 = mysqli_query($conn, $query11);
$row11 = mysqli_fetch_assoc($result11);
$tot_atten = $row11['avg_attendance'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include('web/head.php'); ?>
    <title>Users | Keen Perform</title>
</head>
<style>
.parallax {
  /* The image used */
  background-image: url("https://www.arketek.co.za/KPsystem/images/kp-bg-profile.jpg");

  /* Set a specific height */
  min-height: 100vh;
  width:100%;
    
  /* Create the parallax scrolling effect */
  background-attachment: fixed;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  
}

.slide-up {
    animation: slide-up 1s forwards;
  }

  @keyframes slide-up {
    from {
      transform: translateY(100%);
    }
    to {
      transform: translateY(0%);
    }
  }
  .user-icon {
  position: relative;
  text-align: center;
  
}

.user-icon i {
  display: inline-block;
  width: 50px;
  height: 50px;
  line-height: 50px;
  border-radius: 50%;
  background-color: #2cabe3;
  color: #ffffff;
  font-size: 24px;
}
</style>
<body class="fix-header">
    <?php include('web/preloader.php'); ?>
    <div id="wrapper">
        <?php include('web/nav-top.php'); ?>
        <?php include('web/nav-sidebar.php'); ?>
        <div id="page-wrapper">
            <div class="parallax">
                <div class="container-fluid">
                <div class="row" style="margin-top:30px;">
                    
                    <?php
                    $sql = "SELECT * FROM users WHERE id='$uid'";
                    $result = mysqli_query($conn, $sql);

                    while ($row = mysqli_fetch_assoc($result)) {
    
                    $x_id = $row['id'];
                    $x_role = $row['role'];
                    $x_username = $row['username'];
                    $x_email = $row['email'];
                    $x_week_number = $row['week_number'];
                    $x_last_login = $row['last_login'];
                    $x_register_date = $row['register_date'];
                    
                    ?>
                    <div class="col-md-12 col-lg-12 col-sm-12 slide-up">
                        <div class="col-lg-4">
                            <div class="user-icon">
                                <i class="fa fa-user"></i><h3 style="color:white;padding-left:10px;">User Information</h3>
                            </div>
                            <div class="col-lg-12" style="margin:10px;background:#ffffff;border:#ffffff;border-radius:20px;padding:20px;">
            <div class="row">
                <div class="col-lg-6">
                    <div class="col-4">
                    <p>User ID:</p>
                </div>
                <div class="col-8">
                    <b><?php echo $x_id; ?></b>
                </div>
                </div>
                <div class="col-lg-6">
                    <div class="col-4">
                    <p>Role:</p>
                </div>
                <div class="col-8">
                    <b><?php echo $x_role; ?></b>
                </div>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-lg-6">
                    <div class="col-4">
                    <p>Username:</p>
                </div>
                <div class="col-8">
                    <b><?php echo $x_username; ?></b>
                </div>
                </div>
                <div class="col-lg-6">
                    <div class="col-4">
                    <p>Email:</p>
                </div>
                <div class="col-8">
                    <b><?php echo $x_email; ?></b>
                </div>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-lg-6">
                    <div class="col-4">
                    <p>Last Login:</p>
                </div>
                <div class="col-8">
                    <b><?php echo $x_last_login; ?></b>
                </div>
                </div>
                <div class="col-lg-6">
                    <div class="col-4">
                    <p>Register Date:</p>
                </div>
                <div class="col-8">
                    <b><?php echo $x_register_date; ?></b>
                </div>
                </div>
            </div>
        </div>
                        </div>
                        
                        <?php
                        if($x_role === "QA"){
                            ?>
                            <div class="col-lg-8">
                            <div class="user-icon">
                                <i class="fa fa-bullseye"></i><h3 style="color:white;padding-left:10px;">QA Statistics</h3>
                            </div>
                            
                            <div class="col-lg-12" style="margin:10px;background:#ffffff;border:#ffffff;border-radius:20px;padding-left:20px;padding-rightt:20px;padding-bottom:20px;padding-top:40px;">
                                
                                <div class="row" style="margin-top:10px;margin-bottom:10px;">
                                    
				    <div class="col-lg-2 col-sm-6 row-in-br">
                        <ul class="col-in">
                            <li><center><span class="circle circle-md bg-info"><i class="fas fa-chart-line"></i></span></center></li>
                            <li class="col-last"><h4 class="counter text-right m-t-15"><?php echo $tot_ws; ?></h4><small><p style="color:#ffc36d;">Total</p></small></li>
                            <hr>
                            <li class="col-lg-12"><center><h5>Weekly Sales</h5></center></li>
                        </ul>
                    </div>
                    <div class="col-lg-2 col-sm-6 row-in-br">
                        <ul class="col-in">
                            <li><center><span class="circle circle-md bg-success"><i class="fas fa-stopwatch"></i></span></center></li>
                            <li class="col-last"><h4 class="counter text-right m-t-15"><?php echo $tot_wt; ?></h4><small><p style="color:#ffc36d;">Average</p></small></li>
                            <hr>
                            <li class="col-lg-12"><center><h5>Wrap Time</h5></center></li>
                        </ul>
                    </div>
                    <div class="col-lg-2 col-sm-6 row-in-br">
                        <ul class="col-in">
                            <li><center><span class="circle circle-md bg-info"><i class="fas fa-phone-volume"></i></span></center></li>
                            <li class="col-last"><h4 class="counter text-right m-t-15"><?php echo $tot_ctt; ?></h4><small><p style="color:#ffc36d;">Average</p></small></li>
                            <hr>
                            <li class="col-lg-12"><center><h5>Talk Time</h5></center></li>
                        </ul>
                    </div>
                    <div class="col-lg-2 col-sm-6 row-in-br">
                        <ul class="col-in">
                            <li><center><span class="circle circle-md bg-warning"><i class="fas fa-phone"></i></span></center></li>
                            <li class="col-last"><h4 class="counter text-right m-t-15" ><?php echo $tot_ac; ?></h4><small><p style="color:#ffc36d;">Average</p></small></li>
                            <hr>
                            <li class="col-lg-12"><center><h5>Calls</h5></center></li>
                        </ul>
                    </div>
                    <div class="col-lg-2 col-sm-6 row-in-br">
                        <ul class="col-in">
                            <li><center><span class="circle circle-md bg-danger"><i class="fas fa-history"></i></span></center></li>
                            <li class="col-last"><h4 class="counter text-right m-t-15"><?php echo $tot_acl; ?></h4><small><p style="color:#ffc36d;">Average</p></small></li>
                            <hr>
                            <li class="col-lg-12"><center><h5>Call Length</h5></center></li>
                        </ul>
                    </div>
				    <div class="col-lg-2 col-sm-6 row-in-br">
                        <ul class="col-in">
                            <li><center><span class="circle circle-md bg-success"><i class="fas fa-calendar-check"></i></span></center></li>
                            <li class="col-last"><h4 class="counter text-right m-t-15"><?php echo $tot_atten; ?></h4><small><p style="color:#ffc36d;">Average</p></small></li>
                            <hr>
                            <li class="col-lg-12"><center><h5>Attendance</h5></center></li>
                        </ul>
                    </div>
                    
				</div>
                            </div>
                        </div>
                            <?php
                        }
                        ?>
                        
                        
                        
                        
                    </div>

                    <div class="col-lg-12">
                        
                        
                    </div>
                    
                    <div class="col-lg-12">
                        
                    </div>
                    <?php
                    }
                    ?>
            </div>
            </div>
            <?php include('web/footer.php'); ?>
        </div>
    </div>
    <?php include('web/footer-scripts.php'); ?>
    
</body>

</html>