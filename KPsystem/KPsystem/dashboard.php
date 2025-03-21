<?php
/**
 * This template displays Dashboard
 * 
 * Template Name: Dashboard
 */
if (!session_id()) {
    session_start();
}

include('web/database.php');
 
 $user_id = $_SESSION["id"];
 $username = $_SESSION['details'][$user_id]['username'];
 $email = $_SESSION['details'][$user_id]['email'];
 $role = $_SESSION['details'][$user_id]['role'];
 
 date_default_timezone_set("Africa/Johannesburg");
 $date = date("Y-m-d h:i:sa");
 
 if($user_id === null){
     header("Location: https://www.arketek.co.za/KPsystem/login");
    exit();
 }
 
 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php include('web/head.php'); ?>
    <title>Dashboard | KeenPerform</title>
</head>
<style>
.parallax {
  /* The image used */
  background-image: url("https://www.arketek.co.za/KPsystem/images/kp-welcome.jpg");

  /* Set a specific height */
  min-height: 500px;
  width:100%;
    
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
                    
                    <div class="col-lg-4">
                        
                    </div>
                    <div class="col-lg-4" style="margin-top:-50px;background:#ffffff;border-radius:10px;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);padding:20px;">
                        <center><h3>Welcome to your KeenPerform dashboard!</h3></center>
                    </div>
                    <div class="col-lg-4">
                        
                    </div>
                </div>
                
				<div class="col-lg-12 col-md-12 col-sm-12 cols-xs-12" style="padding-top:50px;">
					
					<?php
                    if($role === "QA"){
                        ?>
                        
                        <div class="col-lg-4">
					    <center><button type="button" style="width:400px;background:#2cabe3;border:#2cabe3;border-radius:10px;padding:10px;">
                        <a href="/KPsystem/qa" style="color:#ffffff;">KeenCoach</a>
                        </button></center>
                        <p style="color:#ffffff;padding:20px;margin-top:10px;">Our KeenCoach makes the whole process so simple - upload your audio file and some optional notes. That's it - your Team Leader will then respond to you. Once your digital coaching file has been marked as complete, you will be able to submit another. </p>
					</div>
					
					<div class="col-lg-4">
					    <center><button type="button" style="width:400px;background:#2cabe3;border:#2cabe3;border-radius:10px;padding:10px;">
                        <a href="/KPsystem/qa-history" style="color:#ffffff;">History</a>
                        </button></center>
                        <p style="color:#ffffff;padding:20px;margin-top:10px;">Complete digital coaching file history including current progress - new QA arrives at the Team Leaders, once a Team Leader has responded to you - our Consultant oversees the current digital coaching file and it is either marked as Complete or escalated to our Senior Manager.</p>
					</div>
                        
                        <?php
                    }
                    else if($role === "Team Leader"){
                        ?>
                        
                        <div class="col-lg-4">
					    <center><button type="button" style="width:400px;background:#2cabe3;border:#2cabe3;border-radius:10px;padding:10px;">
                        <a href="/KPsystem/team-leader" style="color:#ffffff;">Team Leader</a>
                        </button></center>
                        <p style="color:#ffffff;padding:20px;margin-top:10px;">New digital coaching files submitted by QA appear here. Select one to attend to - once you have submitted your response, the digital coaching file will be sent through to the consultants for review.</p>
					</div>
					
					<div class="col-lg-4">
					    <center><button type="button" style="width:400px;background:#2cabe3;border:#2cabe3;border-radius:10px;padding:10px;">
                        <a href="/KPsystem/team-leader-history" style="color:#ffffff;">History</a>
                        </button></center>
                        <p style="color:#ffffff;padding:20px;margin-top:10px;">Complete digital coaching file history including current progress of all the coaching files you have attended to as team leader.</p>
					</div>
                        
                        <?php
                    }
                    else if($role === "Consultant"){
                        ?>
                        <div class="col-lg-4">
					    <center><button type="button" style="width:400px;background:#2cabe3;border:#2cabe3;border-radius:10px;padding:10px;">
                        <a href="/KPsystem/consultant" style="color:#ffffff;">Consultant</a>
                        </button></center>
                        <p style="color:#ffffff;padding:20px;margin-top:10px;">New digital coaching files submitted by Team Leaders appear here. Select one to attend to - once you have submitted your response, the digital coaching file will be marked as complete or escalated to the senior manager.</p>
					</div>
					
					<div class="col-lg-4">
					    <center><button type="button" style="width:400px;background:#2cabe3;border:#2cabe3;border-radius:10px;padding:10px;">
                        <a href="/KPsystem/consultant-history" style="color:#ffffff;">History</a>
                        </button></center>
                        <p style="color:#ffffff;padding:20px;margin-top:10px;">Complete digital coaching file history including current progress of all the coaching files you have attended to as consultant.</p>
					</div>
                        <?php
                    }
                    else if($role === "Senior Manager"){
                        ?>
                        <div class="col-lg-4">
					    <center><button type="button" style="width:400px;background:#2cabe3;border:#2cabe3;border-radius:10px;padding:10px;">
                        <a href="/KPsystem/senior-manager" style="color:#ffffff;">Senior Manager</a>
                        </button></center>
                        <p style="color:#ffffff;padding:20px;margin-top:10px;">New digital coaching files submitted by Consultants appear here. Select one to attend to - once you have submitted your response, the digital coaching file will be marked as complete.</p>
					</div>
					
					<div class="col-lg-4">
					    <center><button type="button" style="width:400px;background:#2cabe3;border:#2cabe3;border-radius:10px;padding:10px;">
                        <a href="/KPsystem/senior-manager-history" style="color:#ffffff;">History</a>
                        </button></center>
                        <p style="color:#ffffff;padding:20px;margin-top:10px;">Complete digital coaching file history including current progress of all the coaching files you have attended to as senior manager.</p>
					</div>
                        <?php
                    }
                    ?>
					
					<div class="col-lg-4">
					    <center><button type="button" style="width:400px;background:#2cabe3;border:#2cabe3;border-radius:10px;padding:10px;">
                        <a href="/KPsystem/profile" style="color:#ffffff;">Profile</a>
                        </button></center>
                        <p style="color:#ffffff;padding:20px;margin-top:10px;">You can view and edit your profile information here - including your email address.</p>
					</div>
					
				    </div>
				
            </div>
            <?php include('web/footer.php'); ?>
        </div>
    </div>
    <?php include('web/footer-scripts.php'); ?>
</body>

</html>