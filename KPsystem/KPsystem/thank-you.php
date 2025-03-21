<?php
/**
 * This template displays Thank You
 * 
 * Template Name: Thank You
 */
if (!session_id()) {
    session_start();
}
 $user_id = $_SESSION["id"];
 $username = $_SESSION['details'][$user_id]['username'];
 $email = $_SESSION['details'][$user_id]['email'];
 $role = $_SESSION['details'][$user_id]['role'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include('web/head.php'); ?>
    <title>Thank You | KeenPerform</title>
    
</head>
<style>
.parallax {
  /* The image used */
  background-image: url("https://www.arketek.co.za/KPsystem/images/kp-int.jpg");

  /* Set a specific height */
  min-height: 500px;

  /* Create the parallax scrolling effect */
  background-attachment: fixed;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}

</style>
<body class="fix-header">
    <?php include('web/preloader.php'); ?>
    <div id="wrapper">
       <?php include('web/nav-top.php'); ?>
       <?php include('web/nav-sidebar.php'); ?>
        <div id="page-wrapper">
            
            <div class="parallax">
                    
                </div>
            
            <div class="container-fluid">
                
                <div class="row">
                    
                    <div class="col-lg-4 col-md-4 col-sm-4 cols-xs-12">
					
						<div class="inner-row" style="">
						    
						</div>
					
					</div>
					
					<div class="col-lg-4 col-md-3 col-sm-3 cols-xs-12">
					
						<div class="inner-row" style="background:#ffffff;border-radius:10px;padding:20px;margin:-80px;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
						    
						    <center><h1>Thank you!</h1></center>
						    <br>
						    <center><p>Your message has been sent successfully, Keen Perform will get in touch with you shortly.</p></center>
						    
						</div>
					
					</div>
					
					<div class="col-lg-4 col-md-4 col-sm-4 cols-xs-12" >
					
						<div class="inner-row" style="">
						    
						</div>
					
					</div>
				
                    
                </div>
                
				<div class="row" style="margin-top:40px;margin-bottom:100px;">
				
				    <center><h2 style="color:#ffffff;"></h2></center>
				
				</div>
				
                <!-- ============================================================== -->
                <!-- Right sidebar -->
                <!-- ============================================================== -->
                <!-- .right-sidebar -->
                <div class="right-sidebar">
                    <div class="slimscrollright">
                        <div class="rpanel-title"> Select Theme <span><i class="ti-close right-side-toggle"></i></span> </div>
                        <div class="r-panel-body">
                            <ul id="themecolors" class="m-t-20">
                                <li><b>With light sidebar</b></li>
                                <li><a href="javascript:void(0)" theme="default" class="default-theme">1</a></li>
                                <li><a href="javascript:void(0)" theme="green" class="green-theme">2</a></li>
                                <li><a href="javascript:void(0)" theme="gray" class="yellow-theme">3</a></li>
                                <li><a href="javascript:void(0)" theme="blue" class="blue-theme">4</a></li>
                                <li><a href="javascript:void(0)" theme="purple" class="purple-theme">5</a></li>
                                <li><b>With dark sidebar</b></li>
                                <br/>
                                <li><a href="javascript:void(0)" theme="default-dark" class="default-dark-theme">7</a></li>
                                <li><a href="javascript:void(0)" theme="green-dark" class="green-dark-theme">8</a></li>
                                <li><a href="javascript:void(0)" theme="gray-dark" class="yellow-dark-theme">9</a></li>
                                <li><a href="javascript:void(0)" theme="blue-dark" class="blue-dark-theme working">10</a></li>
                                <li><a href="javascript:void(0)" theme="purple-dark" class="purple-dark-theme">11</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End Right sidebar -->
                <!-- ============================================================== -->
            </div>
            <?php include('web/footer.php'); ?>
        </div>
    </div>
    <?php include('web/footer-scripts.php'); ?>
</body>

</html>