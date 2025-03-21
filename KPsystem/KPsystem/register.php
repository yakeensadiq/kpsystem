<?php
/**
 * This template displays Register
 * 
 * Template Name: Register
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
    <title>Register | KeenPerform</title>
    
</head>
<style>
.parallax {
  /* The image used */
  background-image: url("https://www.arketek.co.za/KPsystem/images/bg-hero.jpg");

  /* Set a specific height */
  min-height: 500px;

  /* Create the parallax scrolling effect */
  background-attachment: fixed;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}
::placeholder {
   color:    #ffffff;
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
					
						<div class="inner-row" style="background:#ffffff;border-radius:10px;padding:20px;margin:-200px;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
						    
						    <center><h1>Registration</h1></center>
						    <br>
					
						    <form class="form-horizontal new-lg-form" action="functions/base/register.php" method="POST">

						        
                    <div class="form-group ">
                        <div class="col-xs-12">
                            <label>Username</label>
                            <input class="form-control" type="text" name="username" required="" placeholder="Enter your chosen username.."> </div>
                    </div>
                    <div class="form-group ">
                        <div class="col-xs-12">
                            <label>Email address</label>
                            <input class="form-control" type="text" name="email" required="" placeholder="Enter your email address.."> </div>
                    </div>
                    <div class="form-group ">
                        <div class="col-xs-12">
                            <label>Password</label>
                            <input class="form-control" type="password" name="password" required="" placeholder="Enter your chosen password.."> </div>
                    </div>
                    <div class="form-group">
                        <div class="col-xs-12">
                            <label>Confirm password</label>
                            <input class="form-control" type="password" name="confirm_password" required="" placeholder="Confirm the password you entered above.."> </div>
                    </div>
                    <div class="form-group text-center m-t-20">
                        <div class="col-xs-12">
                            <button class="btn btn-info btn-lg btn-block text-uppercase waves-effect waves-light" style="background:#2cabe3;border:#2cabe3;border-radius:10px;" type="submit" >Sign Up</button>
                        </div>
                    </div>
                    <div class="form-group m-b-0">
                        <div class="col-sm-12 text-center">
                            <p>Already have an account? <a href="/KPsystem/login" class="text-info m-l-5" ><b>Sign In</b></a></p>
                        </div>
                    </div>
                </form>
                
             
						    
						</div>
					
					</div>
					
					<div class="col-lg-4 col-md-4 col-sm-4 cols-xs-12" >
					
						<div class="inner-row" style="">
						    
						</div>
					
					</div>
				
                    
                </div>
                
				<div class="row" style="margin-top:40px;margin-bottom:100px;">
				
				    <center><h2 style="color:#ffffff;">Don't delay, register your account today.</h2></center>
				
				</div>
				
            </div>
            <?php include('web/footer.php'); ?>
        </div>
    </div>
    <?php include('web/footer-scripts.php'); ?>
</body>

</html>