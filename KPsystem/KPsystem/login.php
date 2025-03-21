<?php
/**
 * This template displays Login
 * 
 * Template Name: Login
 */

if (!session_id()) {
    session_start();
}

include('web/database.php');

$login_response = "";

if (isset($_POST['submit'])) {
		    
			date_default_timezone_set("Africa/Johannesburg");
    $date = date("Y-m-d h:i:sa");
    
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    $sql = "SELECT id, role, username, week_number FROM users WHERE email='$email' && password='$password'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
  
    while($row = mysqli_fetch_assoc($result)) {
        
        $user_id =  $row["id"];
        $username =  $row["username"];
        $role = $row["role"];
        $week_number = $row["week_number"];
        
        $_SESSION['id'] = $user_id;
        
        if (!isset($_SESSION['details'])) {
            $_SESSION['details'] = array();
        }
        
        $_SESSION['details'][$user_id] = array('username' => $username, 'email' => $email, 'role' => $role, 'week_number' => $week_number);
        
        
        $sql = "INSERT INTO login_history (userid, username, email, date)
            VALUES ('$user_id', '$username', '$email', '$date')";

            if ($conn->query($sql) === TRUE) {
                header('Location: /KPsystem/dashboard.php');
                exit();
            }
            else {
                header('Location: /KPsystem/dashboard.php');
                exit();
            }
        
        
        
        }
    }
    else {
        $login_response = "Incorrect login credentials..";
    }
    
		}

?>	
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include('web/head.php'); ?>
    <title>Login | KeenPerform</title>
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
						    
						    <center><h1>Login to your account</h1></center>
						    <br>
					    
						   
<form class="form-horizontal new-lg-form" id="login-form" method="POST">

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
            <div id="message" style="margin-bottom:10px;"><center><p><?php echo $login_response; ?></p></center></div>
                <button class="btn btn-info btn-lg btn-block text-uppercase waves-effect waves-light" style="background:#2cabe3;border:#2cabe3;border-radius:10px;" type="submit" name="submit">Sign In</button>
            </div>
    </div>
    
   
    
    <div class="form-group m-b-0">
        <div class="col-sm-12 text-center">
            <p>Don't have an account? <a href="/KPsystem/register" class="text-info m-l-5" ><b>Sign Up</b></a></p>
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
				
				    <center><h2 style="color:#ffffff;">Welcome back, it's nice to see you again.</h2></center>
				
				</div>
				
            </div>
            <?php include('web/footer.php'); ?>
        </div>
        
    </div>
    <?php include('web/footer-scripts.php'); ?>
</body>

</html>

<?php
?>