<?php
/**
 * This template displays Index
 * 
 * Template Name: Index
 */
if (!session_id()) {
    session_start();
}

 $user_id = $_SESSION["id"];
 $username = $_SESSION['details'][$user_id]['username'];
 $email = $_SESSION['details'][$user_id]['email'];
 $role = $_SESSION['details'][$user_id]['role'];
 
 if($user_id === null || $role != "Admin"){
     header("Location: https://www.arketek.co.za/KPsystem/admin/login");
    exit();
 }
 
include('web/database.php');
 
$query1 = "SELECT COUNT(*) FROM coach WHERE status='QA'";
$result1 = mysqli_query($conn, $query1);
$row1 = mysqli_fetch_row($result1);
$tot_qa = $row1[0];

$query2 = "SELECT COUNT(*) FROM coach WHERE status='TL'";
$result2 = mysqli_query($conn, $query2);
$row2 = mysqli_fetch_row($result2);
$tot_tl = $row2[0];

$query3 = "SELECT COUNT(*) FROM coach WHERE status='CON'";
$result3 = mysqli_query($conn, $query3);
$row3 = mysqli_fetch_row($result3);
$tot_con = $row3[0];

$query4 = "SELECT COUNT(*) FROM coach WHERE status='SEN'";
$result4 = mysqli_query($conn, $query4);
$row4 = mysqli_fetch_row($result4);
$tot_sen = $row4[0];

$query5 = "SELECT COUNT(*) FROM coach WHERE status='Complete'";
$result5 = mysqli_query($conn, $query5);
$row5 = mysqli_fetch_row($result5);
$tot_com = $row5[0];

$query6 = "SELECT SUM(actual_weekly_sales_target) AS total_value FROM grading_tool";
$result6 = mysqli_query($conn, $query6);
$row6 = mysqli_fetch_assoc($result6);
$tot_ws = $row6['total_value'];

$query7 = "SELECT AVG(actual_wrap_time) AS avg_wrap_time FROM grading_tool";
$result7 = mysqli_query($conn, $query7);
$row7 = mysqli_fetch_assoc($result7);
$tot_wt = $row7['avg_wrap_time'];

$query8 = "SELECT AVG(actual_connected_talk_time) AS avg_talk_time FROM grading_tool";
$result8 = mysqli_query($conn, $query8);
$row8 = mysqli_fetch_assoc($result8);
$tot_ctt = $row8['avg_talk_time'];

$query9 = "SELECT AVG(actual_calls) AS avg_calls FROM grading_tool";
$result9 = mysqli_query($conn, $query9);
$row9 = mysqli_fetch_assoc($result9);
$tot_ac = $row9['avg_calls'];

$query10 = "SELECT AVG(actual_call_length) AS avg_call_length FROM grading_tool";
$result10 = mysqli_query($conn, $query10);
$row10 = mysqli_fetch_assoc($result10);
$tot_acl = $row10['avg_call_length'];

$query11 = "SELECT AVG(actual_attendance) AS avg_attendance FROM grading_tool";
$result11 = mysqli_query($conn, $query11);
$row11 = mysqli_fetch_assoc($result11);
$tot_atten = $row11['avg_attendance'];

$sqlx1 = "SELECT id FROM users";
$resultx1 = mysqli_query($conn, $sqlx1);
$tot_users = mysqli_num_rows($resultx1);

 
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include('web/head.php'); ?>
    <title>Admin | Keen Perform</title>
    
</head>
<style>

</style>
<body class="fix-header">
        <?php include('web/preloader.php'); ?>
    <div id="wrapper">
        <?php include('web/nav-top.php'); ?>
        <?php include('web/nav-sidebar.php'); ?>
        <div id="page-wrapper">
            
            <div class="container-fluid">
                
                <div class="row" style="margin-top:10px;margin-bottom:10px;">
				    <center><h2 style="color:white;">General Statistics</h2></center>
				    <hr>
				    <div class="col-lg-2 col-sm-6 row-in-br">
                        <ul class="col-in">
                            <li><span class="circle circle-md bg-info"><i class="fa fa-users"></i></span></li>
                            <li class="col-last"><h4 class="counter text-right m-t-15" style="color:#ffffff;"><?php echo $tot_users; ?></h4></li>
                            <li class="col-middle"><h6 style="color:#ffffff;">Total Users</h6></li>
                        </ul>
                    </div>
                    <div class="col-lg-2 col-sm-6 row-in-br">
                        <ul class="col-in">
                            <li><span class="circle circle-md bg-success"><i class="ti-user"></i></span></li>
                            <li class="col-last"><h4 class="counter text-right m-t-15" style="color:#ffffff;"><?php echo $tot_qa; ?></h4></li>
                            <li class="col-middle"><h6 style="color:#ffffff;">QA</h6><p style="color:yellow;"><small>Files Pending</small></p></li>
                        </ul>
                    </div>
                    <div class="col-lg-2 col-sm-6 row-in-br">
                        <ul class="col-in">
                            <li><span class="circle circle-md bg-info"><i class="ti-user"></i></span></li>
                            <li class="col-last"><h4 class="counter text-right m-t-15" style="color:#ffffff;"><?php echo $tot_tl; ?></h4></li>
                            <li class="col-middle"><h6 style="color:#ffffff;">Team Leader</h6><p style="color:yellow;"><small>Files Pending</small></p></li>
                        </ul>
                    </div>
                    <div class="col-lg-2 col-sm-6 row-in-br">
                        <ul class="col-in">
                            <li><span class="circle circle-md bg-warning"><i class="ti-user"></i></span></li>
                            <li class="col-last"><h4 class="counter text-right m-t-15" style="color:#ffffff;"><?php echo $tot_con; ?></h4></li>
                            <li class="col-middle"><h6 style="color:#ffffff;">Consultant</h6><p style="color:yellow;"><small>Files Pending</small></p></li>
                        </ul>
                    </div>
                    <div class="col-lg-2 col-sm-6 row-in-br">
                        <ul class="col-in">
                            <li><span class="circle circle-md bg-danger"><i class="ti-user"></i></span></li>
                            <li class="col-last"><h4 class="counter text-right m-t-15" style="color:#ffffff;"><?php echo $tot_sen; ?></h4></li>
                            <li class="col-middle"><h6 style="color:#ffffff;">Senior Manager</h6><p style="color:yellow;"><small>Files Pending</small></p></li>
                        </ul>
                    </div>
				    <div class="col-lg-2 col-sm-6 row-in-br">
                        <ul class="col-in">
                            <li><span class="circle circle-md bg-success"><i class="fa fa-check"></i></span></li>
                            <li class="col-last"><h4 class="counter text-right m-t-15" style="color:#ffffff;"><?php echo $tot_com; ?></h4></li>
                            <li class="col-middle"><h5 style="color:#ffffff;">Complete</h5></li>
                        </ul>
                    </div>
				</div>
                <hr>
                <div class="row" style="margin-top:10px;margin-bottom:10px;">
				    <div class="col-lg-2 col-sm-6 row-in-br">
                        <ul class="col-in">
                            <li><span class="circle circle-md bg-info"><i class="fas fa-chart-line"></i></span></li>
                            <li class="col-last"><h4 class="counter text-right m-t-15" style="color:#ffffff;"><?php echo $tot_ws; ?></h4></li>
                            <li class="col-middle"><h6 style="color:#ffffff;">Weekly Sales</h6><p style="color:yellow;"><small>Total</small></p></li>
                        </ul>
                    </div>
                    <div class="col-lg-2 col-sm-6 row-in-br">
                        <ul class="col-in">
                            <li><span class="circle circle-md bg-success"><i class="fas fa-stopwatch"></i></span></li>
                            <li class="col-last"><h4 class="counter text-right m-t-15" style="color:#ffffff;"><?php echo $tot_wt; ?></h4></li>
                            <li class="col-middle"><h6 style="color:#ffffff;">Wrap Time</h6><p style="color:yellow;"><small>Average</small></p></li>
                        </ul>
                    </div>
                    <div class="col-lg-2 col-sm-6 row-in-br">
                        <ul class="col-in">
                            <li><span class="circle circle-md bg-info"><i class="fas fa-phone-volume"></i></span></li>
                            <li class="col-last"><h4 class="counter text-right m-t-15" style="color:#ffffff;"><?php echo $tot_ctt; ?></h4></li>
                            <li class="col-middle"><h6 style="color:#ffffff;">Talk Time</h6><p style="color:yellow;"><small>Average</small></p></li>
                        </ul>
                    </div>
                    <div class="col-lg-2 col-sm-6 row-in-br">
                        <ul class="col-in">
                            <li><span class="circle circle-md bg-warning"><i class="fas fa-phone"></i></span></li>
                            <li class="col-last"><h4 class="counter text-right m-t-15" style="color:#ffffff;"><?php echo $tot_ac; ?></h4></li>
                            <li class="col-middle"><h6 style="color:#ffffff;">Calls</h6><p style="color:yellow;"><small>Average</small></p></li>
                        </ul>
                    </div>
                    <div class="col-lg-2 col-sm-6 row-in-br">
                        <ul class="col-in">
                            <li><span class="circle circle-md bg-danger"><i class="fas fa-history"></i></span></li>
                            <li class="col-last"><h4 class="counter text-right m-t-15" style="color:#ffffff;"><?php echo $tot_acl; ?></h4></li>
                            <li class="col-middle"><h6 style="color:#ffffff;">Call Length</h6><p style="color:yellow;"><small>Average</small></p></li>
                        </ul>
                    </div>
				    <div class="col-lg-2 col-sm-6 row-in-br">
                        <ul class="col-in">
                            <li><span class="circle circle-md bg-success"><i class="fas fa-calendar-check"></i></span></li>
                            <li class="col-last"><h4 class="counter text-right m-t-15" style="color:#ffffff;"><?php echo $tot_atten; ?></h4></li>
                            <li class="col-middle"><h6 style="color:#ffffff;">Attendance</h6><p style="color:yellow;"><small>Average</small></p></li>
                        </ul>
                    </div>
				</div>
                <hr>
                <div class="row" style="margin:50px;">
                    
                    <div class="col-lg-3 col-md-3 col-sm-12 cols-xs-12">
					
						<div class="inner-row" style="background:#ffffff;border-radius:10px;padding:20px;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
						    
						    <center><img src="/KPsystem/images/coaches.jpg" style="width:100%;height:auto;" alt="Digital Coaching Files"></center>
						    
						    <center><h2>Digital Coaching Files</h2></center>
						    <br>
						    <center><a href="/KPsystem/admin/dcf" style="padding-right:20px;padding-left:20px;padding-top:10px;padding-bottom:10px;;background:#2cabe3;border:#2cabe3;border-radius:10px;color:white;">View Digital Coaching Files</a></center>
						    
					    </div>
				    </div>
				    
				    <div class="col-lg-3 col-md-3 col-sm-12 cols-xs-12">
					
						<div class="inner-row" style="background:#ffffff;border-radius:10px;padding:20px;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
						    
						    <center><img src="/KPsystem/images/kp-grading-tool.jpg" style="width:100%;height:auto;" alt="Grading Tool"></center>
						    <center><h2>Grading Tool Files</h2></center>
						    <br>
						    <center><a href="/KPsystem/admin/grading-tool" style="padding-right:20px;padding-left:20px;padding-top:10px;padding-bottom:10px;;background:#2cabe3;border:#2cabe3;border-radius:10px;color:white;">View Grading Tool Files</a></center>
						    
					    </div>
				    </div>
				    
				    <div class="col-lg-3 col-md-3 col-sm-12 cols-xs-12">
					
						<div class="inner-row" style="background:#ffffff;border-radius:10px;padding:20px;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
						    
						    <center><img src="/KPsystem/images/group.jpg" style="width:100%;height:auto;" alt="Users"></center>
						    <center><h2>Users</h2></center>
						    <br>
						    <center><a href="/KPsystem/admin/users" style="padding-right:20px;padding-left:20px;padding-top:10px;padding-bottom:10px;;background:#2cabe3;border:#2cabe3;border-radius:10px;color:white;">View Users</a></center>
						    
					    </div>
				    </div>
				    
				    <div class="col-lg-3 col-md-3 col-sm-12 cols-xs-12">
					
						<div class="inner-row" style="background:#ffffff;border-radius:10px;padding:20px;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
						    
						    <center><img src="/KPsystem/images/userhistory.jpg" style="width:100%;height:auto;" alt="Login History"></center>
						    <center><h2>Login History</h2></center>
						    <br>
						    <center><a href="/KPsystem/admin/history" style="padding-right:20px;padding-left:20px;padding-top:10px;padding-bottom:10px;;background:#2cabe3;border:#2cabe3;border-radius:10px;color:white;">View History</a></center>
						    
					    </div>
				    </div>
					
				</div>
                   
                </div>
                
            </div>
            <?php include('web/footer.php'); ?>
        </div>
    </div>
    <?php include('web/footer-scripts.php'); ?>
</body>

</html>