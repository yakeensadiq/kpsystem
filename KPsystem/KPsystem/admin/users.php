<?php
/**
 * This template displays Users
 * 
 * Template Name: Users
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
     header("Location: https://www.arketek.co.za/KPsystem/admin/login");
    exit();
 }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include('web/head.php'); ?>
    <title>Users | Keen Perform</title>
   
</head>
<style>
.parallax {
  /* The image used */
  background-image: url("https://www.arketek.co.za/KPsystem/images/kp-bg-profile.jpg");

  /* Set a specific height */
  min-height: 100vh;
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
						
						$sql = "SELECT * FROM users ORDER BY username ASC";
                        
                        $result = mysqli_query($conn, $sql);

                        if (mysqli_num_rows($result) > 0) :
                            
                            $count = 0;
                            
                            ?>
                        
						<div class="table table-hover manage-u-table" >
						    
						    <h2 style="color:white;">All Users</h2>
						    
							<table id="all_users" class="table table-hover manage-u-table" style="border-radius:10px;">
								<thead>
									<tr>
										<th scope="col" style="color:#000000;">ID</th>
										<th scope="col" style="color:#000000;">Role</th>
										<th scope="col" style="color:#000000;">Username</th>
										<th scope="col" style="color:#000000;">Email</th>
										<th scope="col" style="color:#000000;">Last Login</th>
										<th scope="col" style="color:#000000;">Register Date</th>
										<th scope="col" style="color:#000000;">Options</th>
									</tr>
								</thead>
								<tbody>
								    
								    <?php
                            
                        while($row = mysqli_fetch_assoc($result)) :
  $user_id = $row['id'];
  ?>
  <tr>
    <td scope="row"><?php echo $row["id"]; ?></td>
    <td scope="row">
      <form method="post">
        <input type="hidden" name="user_id" value="<?php echo $user_id; ?>">
        <select name="role" id="role">
  <option value="QA" <?php if($row["role"] == "QA") echo "selected"; ?>>QA</option>
  <option value="Team Leader" <?php if($row["role"] == "Team Leader") echo "selected"; ?>>Team Leader</option>
  <option value="Consultant" <?php if($row["role"] == "Consultant") echo "selected"; ?>>Consultant</option>
  <option value="Senior Manager" <?php if($row["role"] == "Senior Manager") echo "selected"; ?>>Senior Manager</option>
</select>
        <input type="submit" name="submit" value="Change Role" style="background:#2cabe3;border:#2cabe3;border-radius:10px;color:white;">
      </form>
    </td>
    <td scope="row"><?php echo $row["username"]; ?></td>
    <td scope="row"><?php echo $row["email"]; ?></td>
    <td scope="row"><?php echo $row["last_login"]; ?></td>
    <td scope="row"><?php echo $row["register_date"]; ?></td>
    <td scope="row">
        <form action="users-detailed.php" method="post">
        <input type="hidden" name="uid" value="<?php echo $row["id"];; ?>">
            <input type="submit" name="viewuser" value="View" style="background:#2cabe3;border:#2cabe3;border-radius:10px;color:white;">
      </form>
    </td>
  </tr>
<?php endwhile; ?>
								
								</tbody>
								<?php
								if(isset($_POST['submit'])) {
  $role = mysqli_real_escape_string($conn, $_POST['role']);
  $user_id = mysqli_real_escape_string($conn, $_POST['user_id']);
  
  $update_sql = "UPDATE users SET role='$role' WHERE id='$user_id'";
  
  if (mysqli_query($conn, $update_sql)) {
   // echo "Record updated successfully";
   echo "<script>window.location.href=window.location.href;</script>";
  } else {
    //echo "Error updating record: " . mysqli_error($conn);
  }
}
								?>
								
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