<?php
/**
 * This template displays Grading Tool History
 * 
 * Template Name: Grading Tool History
 */
if(!isset($_SERVER['PHP_SELF'])){
   $_SERVER['PHP_SELF'] = basename(__FILE__);
}

 
if (!session_id()) {
    session_start();
}

include('web/database.php');
 
 $user_id = $_SESSION["id"];
 $username = $_SESSION['details'][$user_id]['username'];
 $email = $_SESSION['details'][$user_id]['email'];
 $role = $_SESSION['details'][$user_id]['role'];
 
 if($user_id === null){
     header("Location: https://www.arketek.co.za/KPsystem/login");
    exit();
 }
 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php include('web/head.php'); ?>
    <title>Grading Tool History | KeenPerform</title>
</head>
<style>
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
}

tbody tr:nth-child(even) {
  background-color: #f2f2f2;
}

td:nth-child(2) {
  background-color: #ffcc66; 
}

td:nth-child(3) {
  background-color: #ffcc66; 
}

td:nth-child(4) {
  background-color: #99ccff;
}

td:nth-child(5) {
  background-color: #99ccff; 
}

td:nth-child(6) {
  background-color: #ccff99; 
}

td:nth-child(7) {
  background-color: #ccff99; 
}

td:nth-child(8) {
  background-color: #ffcc66; 
}

td:nth-child(9) {
  background-color: #ffcc66;
}

td:nth-child(10) {
  background-color: #99ccff; 
}

td:nth-child(11) {
  background-color: #99ccff; 
}

td:nth-child(12) {
  background-color: #ccff99; 
}

td:nth-child(13) {
  background-color: #ccff99; 
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
                
                <!--Current-->
                <div class="col-lg-12" style="padding-top:10px;">
                    
                    <div class="row slide-up">
            
        <?php
        
$rec_limit = 11; // number of rows to be displayed per page

$sql = "SELECT count(id) FROM grading_tool WHERE user_id='$user_id' ";
$retval = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($retval, MYSQLI_NUM);
$rec_count = $row[0];

$page = 0;
if (isset($_GET{'page'})) {
    $page = $_GET{'page'} + 1;
    $offset = $rec_limit * $page ;
} else {
    $page = 0;
    $offset = 0;
}

$left_rec = $rec_count - ($page * $rec_limit);
$sql = "SELECT * FROM grading_tool WHERE user_id='$user_id' ORDER BY date DESC LIMIT $offset, $rec_limit";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) :

$count = 0;
                            
        ?>
                        
						<div class="table table-hover manage-u-table" >
						    
						    <h2 style="color:white;">Grading Tool - History</h2>
						    
							<table id="grading-history-table" class="table table-hover manage-u-table" style="border-radius:20px;">
								<thead>
  <tr>
    <th scope="col" style="text-align: center;border: 1px solid black;background:#354a82;color:white;"><center><i class="fa fa-calendar" style="color: #ffffff; background-color: #2cabe3; padding: 5px; border-radius: 100%; display: block;margin-bottom:10px;"></i></center> Week Number</th>
    <th scope="col" style="text-align: center;border: 1px solid black;background:#354a82;color:white;"><center><i class="fa fa-bullseye" style="color: #ffffff; background-color: #2cabe3; padding: 5px; border-radius: 100%; display: block;margin-bottom:10px;"></i></center> Weekly Sales Target</th>
    <th scope="col" style="text-align: center;border: 1px solid black;background:#354a82;color:white;"><center><i class="fa fa-line-chart" style="color: #ffffff; background-color: #2cabe3; padding: 5px; border-radius: 100%; display: block;margin-bottom:10px;"></i></center> Actual Weekly Sales Target</th>
    <th scope="col" style="text-align: center;border: 1px solid black;background:#354a82;color:white;"><center><i class="fa fa-clock-o" style="color: #ffffff; background-color: #2cabe3; padding: 5px; border-radius: 100%; display: block;margin-bottom:10px;"></i></center> Wrap Time</th>
    <th scope="col" style="text-align: center;border: 1px solid black;background:#354a82;color:white;"><center><i class="fa fa-hourglass" style="color: #ffffff; background-color: #2cabe3; padding: 5px; border-radius: 100%; display: block;margin-bottom:10px;"></i></center> Actual Wrap Time</th>
    <th scope="col" style="text-align: center;border: 1px solid black;background:#354a82;color:white;"><center><i class="fa fa-phone" style="color: #ffffff; background-color: #2cabe3; padding: 5px; border-radius: 100%; display: block;margin-bottom:10px;"></i></center> Connected Talk Time</th>
    <th scope="col" style="text-align: center;border: 1px solid black;background:#354a82;color:white;"><center><i class="fa fa-clock-o" style="color: #ffffff; background-color: #2cabe3; padding: 5px; border-radius: 100%; display: block;margin-bottom:10px;"></i></center> Actual Connected Talk Time</th>
    <th scope="col" style="text-align: center;border: 1px solid black;background:#354a82;color:white;"><center><i class="fa fa-phone-square" style="color: #ffffff; background-color: #2cabe3; padding: 5px; border-radius: 100%; display: block;margin-bottom:10px;"></i></center> Calls</th>
    <th scope="col" style="text-align: center;border: 1px solid black;background:#354a82;color:white;"><center><i class="fa fa-check-square" style="color: #ffffff; background-color: #2cabe3; padding: 5px; border-radius: 100%; display: block;margin-bottom:10px;"></i></center> Actual Calls</th>
    <th scope="col" style="text-align: center;border: 1px solid black;background:#354a82;color:white;"><center><i class="fa fa-clock-o" style="color: #ffffff; background-color: #2cabe3; padding: 5px; border-radius: 100%; display: block;margin-bottom:10px;"></i></center> Average Call Length</th>
    <th scope="col" style="text-align: center;border: 1px solid black;background:#354a82;color:white;"><center><i class="fa fa-clock-o" style="color: #ffffff; background-color: #2cabe3; padding: 5px; border-radius: 100%; display: block;margin-bottom:10px;"></i></center> Actual Call Length</th>
    <th scope="col" style="text-align: center;border: 1px solid black;background:#354a82;color:white;"><center><i class="fa fa-calendar-check-o" style="color: #ffffff; background-color: #2cabe3; padding: 5px; border-radius: 100%; display: block;margin-bottom:10px;"></i></center> Attendance</th>
    <th scope="col" style="text-align: center;border: 1px solid black;background:#354a82;color:white;"><center><i class="fa fa-check-square-o" style="color: #ffffff; background-color: #2cabe3; padding: 5px; border-radius: 100%; display: block;margin-bottom:10px;"></i></center> Actual Attendance</th>
  </tr>
                                </thead>
								<tbody>
								    
								    <?php
                            
                        while($row = mysqli_fetch_assoc($result)) : $result;
                            
                            
								    ?>
								    
								<tr>
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
								</tr>
								
									<?php
								
								$count++;
								
								endwhile;
								
								?>
								
								</tbody>
							</table>
						</div>
						
						<div class="pagination">
    <?php
    if($rec_count >= 12){
        
        if ($left_rec <= $rec_limit && $page > 0) {
        $last = $page - 2;
        echo "<a href = \"$_PHP_SELF?page=$last\"><button class='btn btn-secondary' style='background-color: #2cabe3; color: #fff;margin:10px;'>Previous</button></a>";
    } else if ($page == 0) {
        echo "<a href = \"$_PHP_SELF?page=$page\"><button class='btn btn-secondary' style='background-color: #2cabe3; color: #fff;margin:10px;'>Next</button></a>";
    } else if ($left_rec > $rec_limit) {
        $last = $page - 2;
        echo "<a href = \"$_PHP_SELF?page=$last\"><button class='btn btn-secondary' style='background-color: #2cabe3; color: #fff;margin:10px;'>Previous</button></a> ";
        echo "<a href = \"$_PHP_SELF?page=$page\"><button class='btn btn-secondary' style='background-color: #2cabe3; color: #fff;margin:10px;'>Next</button></a>";
    }
        
    }
    ?>
</div>
					
					 <?php
                            
                            else :
                                
                                //if no data display something here like table above empty
                                ?>
                                <div class="col-lg-3">
                                    
                                </div>
                                <div class="col-lg-6" style="background:#ffffff;padding:20px;margin-top:50px;border-radius:10px;">
                                    <center><h3>No grading tool files..</h3></center>
                                </div>
                                <div class="col-lg-3">
                                    
                                </div>
                                <?php
                                
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