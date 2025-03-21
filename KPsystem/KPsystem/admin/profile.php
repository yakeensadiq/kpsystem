<?php
/**
 * This template displays Profile
 * 
 * Template Name: Profile
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
    <title>Profile | KeenPerform</title>
    
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

.slide-in {
    animation: slide-in 1s forwards;
  }

  @keyframes slide-in {
    from {
      transform: translateX(100%);
    }
    to {
      transform: translateX(0%);
    }
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
                
                <div class="row" style="margin-top:100px;">
                    
                    
				    <div class="col-lg-8 col-md-8 col-sm-12 cols-xs-12 slide-up">
					
					<div class="col-lg-12" style="margin-top:50px;">
					    <?php
					    if($role){
					        ?>
					        <div class="col-lg-3">
					        <center><p style="font-size:16px;background:#2cabe3;border:#2cabe3;border-radius:10px;margin:10px;color:#ffffff;padding:10px;margin-bottom:"><i><?php echo $role; ?></i></p></center>
					    </div>
					    <div class="col-lg-3">
					        
					    </div>
					    <div class="col-lg-3">
					        
					    </div>
					    <div class="col-lg-3">
					        
					    </div>
					        <?php
					    }
					    ?>
					</div>
					
					<div class="col-lg-12" style="background:#ffffff;border-radius:10px;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);padding-top:20px;padding-bottom:20px;margin-bottom:20px;">
					    
					    <center><img src="/KPsystem/images/icon-user.png"></img></center>
					    <center><h3>My Profile</h3></center>
					    <hr>
					    
					    <iframe name="myframe" id="frame1" src="/KPsystem/functions/base/updateadmin.php"  style="display:none"></iframe>
					
					<form action="/KPsystem/functions/base/updateadmin.php" method="POST" target="myframe" onsubmit="if (!window.submitButtonClicked) return false;">
							
							
					<div class="col-lg-2 col-md-2 col-sm-12 col-xs-12" style="padding:10px;">
						<center><h4 style="color:#000000;">ID</h4></center>
						<center><h4 style="color:#000000;padding:5px;"><?php echo $user_id; ?></h4></center>
							
					</div>
					
					<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12" style="padding:10px;">
						<h4 style="color:#000000;">Username</h4>
						<input type="text" id="username" style="width:100%;padding:5px;color:#000000;" name="username" value="<?php echo $username; ?>" disabled>
							
					</div>
					
					<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12" style="padding:10px;">
						<h4 style="color:#000000;">Email</h4>
						<input type="text" id="email" style="width:100%;padding:5px;color:#000000;" name="email" value="<?php  echo $email; ?>">
							
					</div>
					
					<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12" style="padding:10px;">
					
						<center><input type="submit" id="update-details" value="Update" onclick="window.submitButtonClicked = true; myFunction();" style="background:#2cabe3;border:#2cabe3;border-radius:10px;padding:10px;color:#ffffff;margin-top:37px;"></center>
							
					</div>
					
					</form>
					
					<script>
                        function myFunction() {
                            if (confirm("Your profile has been updated successfully..") == true) {
                                    //text = "You pressed OK!";
                                } else {
                                    //text = "You canceled!";
                                }
                        //document.getElementById("demo").innerHTML = text;
                        }
                    </script>
					    
					    
					</div>
						
				    </div>
				    
				    <div class="col-lg-4 col-md-4 col-sm-12 cols-xs-12">
					
					<img src="/KPsystem/plugins/images/bot2.png" style="" class="slide-in"/>
						
				    </div>
                    
					
                </div>
                
                <div class="row">
                    
                    <div class="col-lg-8">
                        
                    </div>
                    
                    <div class="col-lg-4">
                        
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