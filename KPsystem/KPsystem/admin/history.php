<?php
/**
 * This template displays History
 * 
 * Template Name: History
 */
 if (!session_id()) {
    session_start();
}

include('web/database.php'); 
 
 $user_id = $_SESSION["id"];
 $username = $_SESSION['details'][$user_id]['username'];
 $email = $_SESSION['details'][$user_id]['email'];
 $role = $_SESSION['details'][$user_id]['role'];
 
 if($user_id === null || $role != "Admin"){
     header("Location: https://www.arketek.co.za/KPsystem/admin/login.php");
    exit();
 }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include('web/head.php'); ?>
    <title>Login History | Keen Perform</title>
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
                
                <div class="row" style="margin-top:30px;">
                    
                    <div class="col-md-12 col-lg-12 col-sm-12 slide-up">
                        
                        <?php
						
						 $sql = "SELECT * FROM login_history";
                        
                        $result = mysqli_query($conn, $sql);

                        if (mysqli_num_rows($result) > 0) :
                            
                            $count = 0;
                            
                            ?>
                        
						<div class="table table-hover manage-u-table" >
						    
						    <h2 style="color:white;">User Login History</h2>
						    
							<table id="all_users" class="table table-hover manage-u-table" style="border-radius:10px;">
								<thead>
									<tr>
										<th scope="col" style="color:#000000;">ID</th>
										<th scope="col" style="color:#000000;">User ID</th>
										<th scope="col" style="color:#000000;">Username</th>
										<th scope="col" style="color:#000000;">Email</th>
										<th scope="col" style="color:#000000;">Date</th>
									</tr>
								</thead>
								<tbody>
								    
								    <?php
                            
                        while($row = mysqli_fetch_assoc($result)) : $result;
                            
                            
								    ?>
								    
								<tr>
									<td scope="row" style="padding-top:20px;"><?php echo $row["id"]; ?></td>
									<td scope="row" style="padding-top:20px;"><?php echo $row["userid"]; ?></td>
									<td scope="row" style="padding-top:20px;"><?php echo $row["username"]; ?></td>
									<td scope="row" style="padding-top:20px;"><?php echo $row["email"]; ?></td>
									<td scope="row" style="padding-top:20px;"><?php echo $row["date"]; ?></td>
								</tr>
								
									<?php
								
								$count++;
								
								endwhile;
								
								?>
								
								</tbody>
							</table>
						</div>
					
					 <?php
                            
                            else :
                                
                                //if no data display something here like table above empty
                                
                            endif;
                        
						?>
						
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