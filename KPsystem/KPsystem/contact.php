<?php
/**
 * This template displays Contact
 * 
 * Template Name: Contact
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
    <title>Contact | KeenPerform</title>
    
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
                    
                    <div class="col-lg-4 col-md-4 col-sm-4 cols-xs-12 slide-up">
					
						<div class="inner-row" style="">
						    
						    <div class="col-lg-12" style="background:#ffffff;border-radius:10px;padding:20px;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
						        <center><h2>Need help or assistance?</h2></center>
						        <hr>
						        <div class="col-lg-6">
						            <center><i class="fa fa-envelope" style="font-size:30px;color:#2cabe3;padding-right:10px;"></i></center>
						            <center><p style="">Email: <a href="mailto:">info@</a></p></center>
						        </div>
						        <div class="col-lg-6">
						            <center><i class="fa fa-mobile" style="font-size:30px;color:#2cabe3;padding-right:10px;"></i></center>
						            <center><p style="">Call: <a href="tel:">+27</a></p></center>
						        </div>
						    </div>
						    
						</div>
					
					</div>
					
					<div class="col-lg-4 col-md-3 col-sm-3 cols-xs-12 slide-up">
					
						<div class="inner-row" style="background:#ffffff;border-radius:10px;padding:20px;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
						    
						    <center><h2>Get in touch with us</h2></center>
						    <br>
						    <iframe name="myframe" id="frame1" src="/KPsystem/functions/base/contactform.php" style="display:none"></iframe>
						    
						    <form class="form-horizontal new-lg-form" action="/KPsystem/functions/base/contactform.php" method="POST" target="myframe">
                    <div class="form-group ">
                        <div class="col-xs-12">
                            <label>Name</label>
                            <input class="form-control" type="text" id="name" name="name" required="" placeholder="Enter your name.." required> </div>
                    </div>
                    <div class="form-group ">
                        <div class="col-xs-12">
                            <label>Email address</label>
                            <input class="form-control" type="text" id="email" name="email" required="" placeholder="Enter your email address.." required> </div>
                    </div>
                    <div class="form-group ">
                        <div class="col-xs-12">
                            <label>Message</label>
                            <textarea class="form-control" name="message" id="message" rows="4" cols="50" required="" placeholder="How can we help you?" required></textarea> </div>
                    </div>
                    <div class="form-group text-center m-t-20">
                        <div class="col-xs-12">
                            <button class="btn btn-info btn-lg btn-block text-uppercase waves-effect waves-light" style="background:#2cabe3;border:#2cabe3;border-radius:10px;" type="submit" onclick="myFunction();">Submit</button>
                        </div>
                    </div>
                    <div class="form-group m-b-0">
                        <div class="col-sm-12 text-center">
                            <p>View our <a href="/KPsystem/documentation" class="text-info m-l-5" ><b>Documentation</b></a> and<a href="/KPsystem/faqs" class="text-info m-l-5" ><b>Frequently Asked Questions</b></a>.</p>
                        </div>
                    </div>
                </form>
                
                <script>
                        function myFunction() {
                            
                            if (confirm("Success!") == true) {
                                
                                location.replace("/KPsystem/thank-you.php");
                                
                            } else {
                               
                               location.replace("/KPsystem/thank-you.php");
                               
                            }
                        }
                    </script>
						    
						</div>
					
					</div>
					
					<div class="col-lg-4 col-md-4 col-sm-4 cols-xs-12 slide-up" >
					
						<center><img src="/KPsystem/plugins/images/bot.png" style="width:100%;height:auto;" alt="support" /></center>
					
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