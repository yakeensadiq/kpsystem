<?php
/**
 * This template displays Documentation
 * 
 * Template Name: Documentation
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
    <title>Documentation | KeenPerform</title>
    
</head>
<style>
.parallax {
  /* The image used */
  background-image: url("https://www.arketek.co.za/KPsystem/images/kp-bg-profile.jpg");

  /* Set a specific height */
  min-height: 900px;
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
</style>
<body class="fix-header">
    <?php include('web/preloader.php'); ?>
    <div id="wrapper">
        <?php include('web/nav-top.php'); ?>
        <?php include('web/nav-sidebar.php'); ?>
        <div id="page-wrapper">
            
            <div class="parallax">
                    
            <div class="container-fluid">
                
                <div class="row" style="margin-top:110px;">
                    
                    <div class="col-lg-1 col-md-1 col-sm-12 cols-xs-12">
					
						<div class="inner-row" style="">
						    
						</div>
					
					</div>
					
					<div class="col-lg-10 col-md-10 col-sm-12 cols-xs-12 slide-up">
					
						<div class="inner-row" style="background:#ffffff;border-radius:10px;padding:20px;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
						    
						    <center><h3>Documentation</h3></center>
						    <hr>
						    <h4>Introduction:</h4>
						    <p>At KeenPerform, we are dedicated to ensuring our clients receive the best support and guidance available. That's why we have developed an innovative coaching platform that allows for real-time connections with our team of experts.
						    With this platform, you will have access to guidance and support at all times, empowering you to reach your full potential.</p>
						    <p>
						    <hr>
						    <h4>Upload Audio and Notes:</h4>
						    <p>Our coaching platform offers a unique feature where you can upload an audio file and any accompanying notes.
						    During your interaction with a coach, simply upload the audio file and notes, and they will be sent directly to our team leader for review.</p>
						    <hr>
						    <h4>Team Leader Feedback:</h4>
						    <p>Upon reviewing your audio file and notes, our team leader will provide feedback and guidance.
						    You will be promptly notified once the review is complete and can check back on your account to view the response. The team leader's feedback is crafted to assist you in reaching your goals.</p>
						    <hr>
						    <h4>Consultant Awareness:</h4>
						    <p>Once the team leader has responded, the consultant will be informed. The consultant will then review the response and either mark the interaction as complete or escalate it to a senior manager if necessary.
						    The consultant is responsible for ensuring that you receive the necessary support and guidance for success.</p>
						    <hr>
						    <h4>Empower Your Journey:</h4>
						    <p>At KeenPerform, we are committed to offering the highest level of support and guidance. With our interactive coaching platform, you can access the help you need whenever it's required.
						    Start your journey today and connect with our team of experts.</p>

						</div>
					
					</div>
					
					<div class="col-lg-1 col-md-1 col-sm-12 cols-xs-12" >
					
						<div class="inner-row" style="">
						    
						</div>
					
					</div>
				
                    
                </div>
                
				<div class="row" style="margin-top:40px;margin-bottom:100px;">
				
				    <center><h2 style="color:#ffffff;"></h2></center>
				
				</div>
				
            </div>
            
            </div>
            <?php include('web/footer.php'); ?>
        </div>
    </div>
    <?php include('web/footer-scripts.php'); ?>
</body>

</html>