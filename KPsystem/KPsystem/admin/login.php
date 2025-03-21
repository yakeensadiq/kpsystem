<?php
/**
 * This template displays Login
 * 
 * Template Name: Login
 */

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include('web/head.php'); ?>
    <title>Login | Keen Perform</title>
    
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
        <?php include('web/nav-logged-out.php'); ?>
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
						    
						    <center><h1>Login to Admin</h1></center>
						    <br>
						     <form class="form-horizontal new-lg-form" id="loginform" action="/KPsystem/functions/base/admin.php" method="POST">
                    
                    <div class="form-group ">
                        <div class="col-xs-12">
                            <label>Email address</label>
                            <input class="form-control" type="text" id="email" name="email" required="" placeholder="Enter your email address.."> </div>
                    </div>
                    <div class="form-group ">
                        <div class="col-xs-12">
                            <label>Password</label>
                            <input class="form-control" type="password" id="password" name="password" required="" placeholder="Enter your chosen password.."> </div>
                    </div>
                    <div class="form-group text-center m-t-20">
                        <div class="col-xs-12">
                            <button class="btn btn-info btn-lg btn-block text-uppercase waves-effect waves-light" style="background:#2cabe3;border:#2cabe3;border-radius:10px;" type="submit" onclick="">Sign In</button>
                        </div>
                    </div>
                </form>
                
                <script>
                        function myFunction() {
                            
                           // if (confirm("Your registration has been successfull.. do you want to sign in?") == true) {
                                
                                //location.replace("/keen-perform/login.php");
                                
                           // } else {
                           //    
                            //}
                        }
                    </script>
						    
						</div>
					
					</div>
					
					<div class="col-lg-4 col-md-4 col-sm-4 cols-xs-12" >
					
						<div class="inner-row" style="">
						    
						</div>
					
					</div>
				
                    
                </div>
                
				<div class="row" style="margin-top:40px;margin-bottom:100px;">
				
				    <center><h2 style="color:#ffffff;">Admins Only</h2></center>
				
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