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
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include('web/head.php'); ?>
    <title>Home | KeenPerform</title>
    
</head>
<style>
.parallax {
  /* The image used */
  background-image: url("https://www.arketek.co.za/KPsystem/images/kp-parallax.jpg");

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
                    <div class="col-lg-3">
                        
                    </div>
                    <div class="col-lg-3">
                        
                    </div>
                    <div class="col-lg-3">
                        
                    </div>
                    <div class="col-lg-3">
                        <button style="background:#2cabe3;border:#2cabe3;border-radius:10px;margin:10px;width:200px;padding:10px;"><a href="/KPsystem/login" style="color:#ffffff;"><i class="fa fa-lock" style="font-size:20px;color:#ffffff;padding-right:20px;"></i>Login</a></button>
                        <br>
                        <button style="background:#2cabe3;border:#2cabe3;border-radius:10px;margin:10px;width:200px;padding:10px;"><a href="/KPsystem/register" style="color:#ffffff;"><i class="fa fa-user-plus" style="font-size:20px;color:#ffffff;padding-right:20px;"></i>Register</a></button>
                        <br>
                        <button style="background:#2cabe3;border:#2cabe3;border-radius:10px;margin:10px;width:200px;padding:10px;"><a href="/KPsystem/support" style="color:#ffffff;"><i class="fa fa-headset" style="font-size:20px;color:#ffffff;padding-right:20px;"></i>Support</a></button>
                    </div>
                </div>
            
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-3">
                        
                    </div>
                    <div class="col-lg-6" style="background:#ffffff;border-radius:10px;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);margin-top:-50px;padding:30px;">
                        <center><h1>Introducing Our Interactive Coaching Platform</h1></center>
                        <h4>At KeenPerfom, we believe in providing our clients with the best support and guidance possible.That's why we've created an interactive coaching platform that allows you to connect with our team of experts in real-time.</h4>
                    </div>
                    <div class="col-lg-3">
                        
                    </div>
                </div>
                
                <div class="row" style="padding-top:50px;padding-bottom:50px;">
                    
                    <div class="col-lg-3">
                        <center><i class="fa fa-chalkboard-teacher" style="color:#ffffff;font-size: 36px;"></i></center>
                        <center><h3 style="color:#ffffff;">Upload Your Audio File and Notes</h3></center>
                        <p style="color:#ffffff;">When you interact with our coach, you'll have the opportunity to upload an audio file and some optional notes.
                        This information will be sent directly to our team leader who will review and respond to your request.</p>
                    </div>
                    
                    <div class="col-lg-3">
                        <center><i class="fa fa-user" style="color:#ffffff;font-size: 36px;"></i></center>
                        <center><h3 style="color:#ffffff;">Team Leader Response</h3></center>
                        <p style="color:#ffffff;">Once the team leader has reviewed your audio file and notes, they will respond with their guidance and support.
                        You'll be notified as soon as they have completed their review, and you can check back on your account to see their response.</p>
                    </div>
                    
                    <div class="col-lg-3">
                        <center><i class="fa fa-lightbulb" style="color:#ffffff;font-size: 36px;"></i></center>
                        <center><h3 style="color:#ffffff;">Consultant Notification</h3></center>
                        <p style="color:#ffffff;">When the team leader has completed their response, the consultant will be notified.
                        The consultant will then review the response and mark the interaction as complete or escalate it to the senior manager if necessary.</p>
                    </div>
                    
                    <div class="col-lg-3">
                        <center><i class="fa fa-hands-helping" style="color:#ffffff;font-size: 36px;"></i></center>
                        <center><h3 style="color:#ffffff;">Empower Your Success</h3></center>
                        <p style="color:#ffffff;">At KeenPerform, we're committed to providing you with the highest level of support and guidance.
                        With our interactive coaching platform, you can get the help you need, when you need it. Start your journey today and connect with our team of experts.</p>
                    </div>
                </div>
              
				
				<div class="row">
				    
                    
				</div>
				
                
            </div>
            <?php include('web/footer.php'); ?>
        </div>
        
    </div>
    <?php include('web/footer-scripts.php'); ?>
</body>

</html>