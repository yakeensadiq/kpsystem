<?php
/**
 * This template displays Grading Tool
 * 
 * Template Name: Grading Tool
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
    <title>Grading Tool Files | Keen Perform</title>
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
 
tbody tr:nth-child(even) {
  background-color: #f2f2f2;
}

td:nth-child(2) {
  background-color: #ffffff; 
}

td:nth-child(3) {
  background-color: #ffffff; 
}

td:nth-child(4) {
  background-color: #ffffff;
}

td:nth-child(5) {
  background-color: #ffffff; 
}

td:nth-child(6) {
  background-color: #ffffff; 
}

td:nth-child(7) {
  background-color: #ffcc66; 
}

td:nth-child(8) {
  background-color: #ffcc66; 
}

td:nth-child(9) {
  background-color: #99ccff;
}

td:nth-child(10) {
  background-color: #99ccff; 
}

td:nth-child(11) {
  background-color: #ccff99; 
}

td:nth-child(12) {
  background-color: #ccff99; 
}

td:nth-child(13) {
  background-color: #ffcc66; 
}

td:nth-child(14) {
  background-color: #ffcc66; 
}

td:nth-child(15) {
  background-color: #99ccff;
}

td:nth-child(16) {
  background-color: #99ccff; 
}

td:nth-child(17) {
  background-color: #ccff99; 
}

td:nth-child(18) {
  background-color: #ccff99; 
}

td:nth-child(19) {
  background-color: #ffffff; 
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
						
						 $sql = "SELECT * FROM grading_tool ORDER BY date DESC";
                        
                        $result = mysqli_query($conn, $sql);

                        if (mysqli_num_rows($result) > 0) :
                            
                            $count = 0;
                            
                            ?>
                        
						<div class="table table-hover manage-u-table" >
						    
						    <h2 style="color:white;">Grading Tool Files</h2>
						    
							<table id="all_users" class="table table-hover manage-u-table" style="border-radius:10px;">
								<thead>
									<tr>
										<th scope="col" style="text-align: center;border: 1px solid black;background:#354a82;color:white;vertical-align: top;">ID</th>
										<th scope="col" style="text-align: center;border: 1px solid black;background:#354a82;color:white;vertical-align: top;">Date</th>
										<th scope="col" style="text-align: center;border: 1px solid black;background:#354a82;color:white;vertical-align: top;">User ID</th>
										<th scope="col" style="text-align: center;border: 1px solid black;background:#354a82;color:white;vertical-align: top;">Username</th>
										<th scope="col" style="text-align: center;border: 1px solid black;background:#354a82;color:white;vertical-align: top;">Email</th>
										<th scope="col" style="text-align: center;border: 1px solid black;background:#354a82;color:white;vertical-align: top;">Week Number</th>
										<th scope="col" style="text-align: center;border: 1px solid black;background:#354a82;color:white;vertical-align: top;">Weekly Sales Target</th>
										<th scope="col" style="text-align: center;border: 1px solid black;background:#354a82;color:white;vertical-align: top;">Actual Weekly Sales Target</th>
										<th scope="col" style="text-align: center;border: 1px solid black;background:#354a82;color:white;vertical-align: top;">Wrap Time</th>
										<th scope="col" style="text-align: center;border: 1px solid black;background:#354a82;color:white;vertical-align: top;">Actual Wrap Time</th>
										<th scope="col" style="text-align: center;border: 1px solid black;background:#354a82;color:white;vertical-align: top;">Connected Talk Time</th>
										<th scope="col" style="text-align: center;border: 1px solid black;background:#354a82;color:white;vertical-align: top;">Actual Connected Talk Time</th>
										<th scope="col" style="text-align: center;border: 1px solid black;background:#354a82;color:white;vertical-align: top;">Calls</th>
										<th scope="col" style="text-align: center;border: 1px solid black;background:#354a82;color:white;vertical-align: top;">Actual Calls</th>
										<th scope="col" style="text-align: center;border: 1px solid black;background:#354a82;color:white;vertical-align: top;">Average Call Length</th>
										<th scope="col" style="text-align: center;border: 1px solid black;background:#354a82;color:white;vertical-align: top;">Actual Call Length</th>
										<th scope="col" style="text-align: center;border: 1px solid black;background:#354a82;color:white;vertical-align: top;">Attendance</th>
										<th scope="col" style="text-align: center;border: 1px solid black;background:#354a82;color:white;vertical-align: top;">Actual Attendance</th>
										<th scope="col" style="text-align: center;border: 1px solid black;background:#354a82;color:white;vertical-align: top;">Options</th>
									</tr>
								</thead>
								<tbody>
								    
								    <?php
                            
                        while($row = mysqli_fetch_assoc($result)) : $result;
                            
                            
								    ?>
								    
								<tr>
									<td scope="row" style="border: 1px solid black;"><p style="color:black;"><?php echo $row["id"]; ?></p></td>
									<td scope="row" style="border: 1px solid black;"><p style="color:black;"><?php echo $row["date"]; ?></p></td>
									<td scope="row" style="border: 1px solid black;"><p style="color:black;"><?php echo $row["user_id"]; ?></p></td>
									<td scope="row" style="border: 1px solid black;"><p style="color:black;"><?php echo $row["username"]; ?></p></td>
									<td scope="row" style="border: 1px solid black;"><p style="color:black;"><?php echo $row["email"]; ?></p></td>
									<td scope="row" style="border: 1px solid black;"><p style="color:black;"><?php echo $row["week_number"]; ?></p></td>
									<td scope="row" style="border: 1px solid black;"><p style="color:black;"><?php echo $row["weekly_sales_target"]; ?></p></td>
									<td scope="row" style="border: 1px solid black;"><p style="color:black;"><?php echo $row["actual_weekly_sales_target"]; ?></p></td>
									<td scope="row" style="border: 1px solid black;"><p style="color:black;"><?php echo $row["wrap_time"]; ?></p></td>
									<td scope="row" style="border: 1px solid black;"><p style="color:black;"><?php echo $row["actual_wrap_time"]; ?></p></td>
									<td scope="row" style="border: 1px solid black;"><p style="color:black;"><?php echo $row["connected_talk_time"]; ?></p></td>
									<td scope="row" style="border: 1px solid black;"><p style="color:black;"><?php echo $row["actual_connected_talk_time"]; ?></p></td>
									<td scope="row" style="border: 1px solid black;"><p style="color:black;"><?php echo $row["calls"]; ?></p></td>
									<td scope="row" style="border: 1px solid black;"><p style="color:black;"><?php echo $row["actual_calls"]; ?></p></td>
									<td scope="row" style="border: 1px solid black;"><p style="color:black;"><?php echo $row["average_call_length"]; ?></p></td>
									<td scope="row" style="border: 1px solid black;"><p style="color:black;"><?php echo $row["actual_call_length"]; ?></p></td>
									<td scope="row" style="border: 1px solid black;"><p style="color:black;"><?php echo $row["attendance"]; ?></p></td>
									<td scope="row" style="border: 1px solid black;"><p style="color:black;"><?php echo $row["actual_attendance"]; ?></p></td>
									<td scope="row" style="border: 1px solid black;">
									    <form class="form-horizontal new-lg-form" id="edit-grading-file" action="/keen-perform/admin/grading-tool-detailed" method="POST">
									        
									        <div class="form-group " style="display:none;">
                                                <div class="col-xs-12">
                                                    <input type="text" id="cid" name="cid" value="<?php echo $row["id"]; ?>" hidden> </div>
                                                </div>
									        
                                                <button class="btn btn-info btn-block waves-effect waves-light" style="background:#2cabe3;border:#2cabe3;border-radius:10px;" type="submit">Edit</button>
                                         </form>
									</td>
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