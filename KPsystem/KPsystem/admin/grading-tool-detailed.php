<?php
/**
 * This template displays Grading Tool Detailed
 * 
 * Template Name: Grading Tool Detailed
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
 
 $cid = $_POST['cid'];
 
 if (isset($_POST['cid'])) {
    $cid = $_POST['cid'];
    // Use $cid variable as needed
    ?>
    <!DOCTYPE html>
<html lang="en">

<head>
    <?php include('web/head.php'); ?>
    <title>Grading Tool Files | Keen Perform</title>
</head>
<style>
.parallax {
  background-image: url("https://www.arketek.co.za/KPsystem/images/kp-bg-profile.jpg");
  min-height: 100vh;
  width:100%;
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
  
    
thead th i {
  width: 30px;
  height: 30px;
  line-height: 30px;
  display: block;
  margin: 0 auto;
  margin-bottom: 5px;
}

th {
  vertical-align: top;
}

tbody tr:nth-child(even) {
  background-color: #f2f2f2;
}

td:nth-child(2) {
  background-color: #ffffff; 
}

td:nth-child(3) {
  background-color: #ccff99; 
}

td:nth-child(4) {
  background-color: #99ccff;
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

input{
    width:45%;
    height:35px;
    color:black;
}
</style>
<body class="fix-header">
    <?php include('web/preloader.php'); ?>
    <div id="wrapper">
        <?php include('web/nav-top.php'); ?>
        <?php include('web/nav-sidebar.php'); ?>
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    
                    <div class="col-md-12 col-lg-12 col-sm-12 slide-up">
                        
                        <?php
						
						    $sql = "SELECT * FROM grading_tool WHERE id='$cid'";
                            $result = mysqli_query($conn, $sql);

                            if (mysqli_num_rows($result) > 0) {
                            $row = mysqli_fetch_assoc($result);
                            
                            ?>
                            
                            <div class="col-lg-12" style="padding-top:10px;">
                    
                                <div class="grading-actual">
                        
                        <div class="col-lg-1">
                        
                        </div>
                    
                        <div class="col-lg-10" >
                            <div class="col-lg-12" style="margin:10px;background:#ffffff;padding:30px;border-radius:30px;">
      
                            <center><h3>Grading Tool</h3><small>Week Number: <?php echo $row['week_number']; ?></small></center>
                            <div class="col-lg-12" style="margin-bottom:30px;">
                                <hr>
                                <div class="col-lg-3">
                                    <div class="col-lg-4">
                                        <p>User ID:</p>
                                    </div>
                                    <div class="col-lg-8">
                                        <b><?php echo $row['user_id']; ?></b>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="col-lg-3">
                                        <p>Username:</p>
                                    </div>
                                    <div class="col-lg-9">
                                        <b><?php echo $row['username']; ?></b>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="col-lg-3">
                                        <p>Email:</p>
                                    </div>
                                    <div class="col-lg-9">
                                        <b><?php echo $row['email']; ?></b>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="col-lg-3">
                                        <p>Date:</p>
                                    </div>
                                    <div class="col-lg-9">
                                        <b><?php echo $row['date']; ?></b>
                                    </div>
                                </div>
                                <hr>
                            </div>
                            
                            
               <form id="update" name="update" action="functions/grading-tool.php" method="POST">
               
                            <table style="border-collapse: collapse; width: 100%;margin-top:30px;">
    <thead>
    <tr>
      <th style="padding: 10px;"></th>
      <th style="border: 1px solid black; padding: 10px;"><b>KPI</b></th>
      <th style="border: 1px solid black; padding: 10px;"><b>Target</b></th>
      <th style="border: 1px solid black; padding: 10px;"><b>Actual</b></th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td style="border: 1px solid black; padding: 10px;"><i class="fa fa-bullseye" style="background:#2cabe3;border:#2cabe3;border-radius:100%;color:white;padding:5px;"></i></td>
      <td style="border: 1px solid black; padding: 10px;"><b>Weekly Sales Target:</b></td>
      <td style="border: 1px solid black; padding: 10px;"><p><?php echo $row['weekly_sales_target']; ?></p></td>
      <td style="border: 1px solid black; padding: 10px;"><p><input type="text" id="actual_weekly_sales_target" name="actual_weekly_sales_target" value="<?php echo $row['actual_weekly_sales_target']; ?>"></p></td>
    </tr>
    <tr>
      <td style="border: 1px solid black; padding: 10px;"><i class="fa fa-clock-o" style="background:#2cabe3;border:#2cabe3;border-radius:100%;color:white;padding:5px;"></i></td>
      <td style="border: 1px solid black; padding: 10px;"><b>Daily / Weekly Wrap time allowed:</b></td>
      <td style="border: 1px solid black; padding: 10px;"><p><?php echo $row['wrap_time']; ?> Hours</p></td>
      <td style="border: 1px solid black; padding: 10px;"><p style="color:white;"><input type="time" id="actual_wrap_time" name="actual_wrap_time" value="<?php echo $row['actual_wrap_time']; ?>" step="1"> hh:mm:ss</p></td>
    </tr>
    <tr>
      <td style="border: 1px solid black; padding: 10px;"><i class="fa fa-phone" style="background:#2cabe3;border:#2cabe3;border-radius:100%;color:white;padding:5px;"></i></td>
      <td style="border: 1px solid black; padding: 10px;"><b>Daily / Weekly Connected / Talk Time:</b></td>
      <td style="border: 1px solid black; padding: 10px;"><p><?php echo $row['connected_talk_time']; ?> Hours</p></td>
      <td style="border: 1px solid black; padding: 10px;"><p style="color:white;"><input type="time" id="actual_connected_talk_time" name="actual_connected_talk_time" value="<?php echo $row['actual_connected_talk_time']; ?>" step="1"> hh:mm:ss</p></td>
    </tr>
    <tr>
      <td style="border: 1px solid black; padding: 10px;"><i class="fa fa-phone-square" style="background:#2cabe3;border:#2cabe3;border-radius:100%;color:white;padding:5px;"></i></td>
      <td style="border: 1px solid black; padding: 10px;"><b>Daily / Weekly Calls:</b></td>
      <td style="border: 1px solid black; padding: 10px;"><p><?php echo $row['calls']; ?> </p></td>
      <td style="border: 1px solid black; padding: 10px;"><p><input type="text" id="actual_calls" name="actual_calls" value="<?php echo $row['actual_calls']; ?>"></p></td>
    </tr>
    <tr>
      <td style="border: 1px solid black; padding: 10px;"><i class="fa fa-clock" style="background:#2cabe3;border:#2cabe3;border-radius:100%;color:white;padding:5px;"></i></td>
      <td style="border: 1px solid black; padding: 10px;"><b>Average Call Length:</b></td>
      <td style="border: 1px solid black; padding: 10px;"><p>< <?php echo $row['average_call_length']; ?> Mins</p></td>
      <td style="border: 1px solid black; padding: 10px;"><p style="color:white;"><input type="time" id="actual_call_length" name="actual_call_length" value="<?php echo $row['actual_call_length']; ?>" step="1"> hh:mm:ss</p></td>
    </tr>
    <tr>
      <td style="border: 1px solid black; padding: 10px;"><i class="fa fa-bullseye" style="background:#2cabe3;border:#2cabe3;border-radius:100%;color:white;padding:5px;"></i></td>
      <td style="border: 1px solid black; padding: 10px;"><b>Attendance:</b></td>
      <td style="border: 1px solid black; padding: 10px;"><p><?php echo $row['attendance']; ?>%</p></td>
      <td style="border: 1px solid black; padding: 10px;"><p style="color:white;"><input type="text" id="actual_attendance" name="actual_attendance" value="<?php echo $row['actual_attendance']; ?>"> %</p></td>
    </tr>
    <tr>
        <td style="background:#ffffff;"></td>
        <td style="background:#ffffff;"></td>
        <td style="background:#ffffff;"><input type="text" id="cidz" name="cidz" value="<?php echo $row['id']; ?>" hidden></td>
        <td style="background:#ffffff;"><center><button type="submit" id="update" name="update" style="background:#2cabe3;border:#2cabe3;border-radius:20px;color:white;margin-top:20px;padding:5px;width:100px;height:40px;">Update</button></center></td>
    </tr>
  </tbody>
</table>
             
             </form>   
                
                            </div>
                        </div>
                    
                        <div class="col-lg-1">
                        
                        </div>
                        
                    </div>
                    
                            </div>
                            <?php
					        }
					        else {
                                echo "No data found.";
                            }
						    ?>
						
                    </div>
                </div>
            </div>
            <?php include('web/footer.php'); ?>
        </div>
    </div>
    <?php include('web/footer-scripts.php'); ?>
</body>

</html>
    <?php
}

?>
