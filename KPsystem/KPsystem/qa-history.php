<?php
/**
 * This template displays QA History
 * 
 * Template Name: QA History
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
    <title>History | KeenPerform</title>
    
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
        <div class="row slide-up">
            
            <?php
$rec_limit = 12; // number of rows to be displayed per page

$sql = "SELECT count(id) FROM coach WHERE qa_userid='$user_id' ORDER BY date DESC";
$retval = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($retval, MYSQLI_NUM);
$rec_count = $row[0];

$page = 0;
if (!empty($_GET{'page'})) {
    $page = $_GET{'page'} + 1;
    $offset = $rec_limit * $page ;
} else {
    $page = 0;
    $offset = 0;
}

$left_rec = $rec_count - ($page * $rec_limit);
$sql = "SELECT * FROM coach WHERE qa_userid='$user_id' LIMIT $offset, $rec_limit";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) :

$count = 0;
                            
                            ?>
                        
						<div class="table table-hover manage-u-table" >
						    
						    <h2 style="color:white;">My Digital Coaching Files - History</h2>
						    
							<table id="all_users" class="table table-hover manage-u-table" style="border-radius:10px;">
								<thead>
									<tr>
										<th scope="col" style="color:#000000;">ID</th>
										<th scope="col" style="color:#000000;">Status</th>
										<th scope="col" style="color:#000000;">Date</th>
										<th scope="col" style="color:#000000;">Week Number</th>
										<th scope="col" style="color:#000000;">QA</th>
										<th scope="col" style="color:#000000;">Team Leader</th>
										<th scope="col" style="color:#000000;">Consultant</th>
										<th scope="col" style="color:#000000;">Senior Manager</th>
										<th scope="col" style="color:#000000;">More</th>
									</tr>
								</thead>
								<tbody>
								    
								    <?php
                            
                        while($row = mysqli_fetch_assoc($result)) : $result;
                            
                            
								    ?>
								    
								<tr>
									<td scope="row" style="padding-top:20px;"><?php echo $row["id"]; ?></td>
									<td scope="row" style="padding-top:20px;"><?php 
									$stat = $row["status"];
									
									if($stat === "QA"){
									    echo "Pending - Team Leader";
									}
									else if($stat === "TL"){
									    echo "Pending - Consultant";
									}
									else if($stat === "CON"){
									    echo "Pending Completion";
									}
									else if($stat === "SEN"){
									    echo "Escalated";
									}
									else if($stat === "Complete"){
									    echo "Complete";
									}
									
									?></td>
									<td scope="row" style="padding-top:20px;"><?php echo $row["date"]; ?></td>
									<td scope="row" style="padding-top:20px;"><?php echo $row["week_number"]; ?></td>
									<td scope="row" style="padding-top:20px;"><?php echo $row["qa_username"]; ?></td>
									<td scope="row" style="padding-top:20px;"><?php echo $row["tl_username"]; ?></td>
									<td scope="row" style="padding-top:20px;"><?php echo $row["con_username"]; ?></td>
									<td scope="row" style="padding-top:20px;"><?php echo $row["sen_username"]; ?></td>
									<td scope="row">
									    
									    <form class="form-horizontal new-lg-form" id="dcfs" action="/KPsystem/qa-history-detailed" method="POST">
									        
									        <div class="form-group " style="display:none;">
                        <div class="col-xs-12">
                            <input type="text" id="cid" name="cid" value="<?php echo $row["id"]; ?>" hidden> </div>
                    </div>
									        
                    <button class="btn btn-info btn-block waves-effect waves-light" style="background:#2cabe3;border:#2cabe3;border-radius:10px;" type="submit">View Details</button>
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
						
						<div class="pagination">
    <?php
    if($rec_count >= 13){
        
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
                                
                                ?>
                                
                                <div class="col-lg-12" style="padding-top:50px;">
                                    <div class="col-lg-2">
                                        
                                    </div>
                                    <div class="col-lg-8" style="background:#ffffff;border-radius:10px;padding:20px;">
                                        <h3>No history available..</h3>
                                        <p>Visit the <a href="/KPsystem/qa-history">KeenCoach</a> and data will appear here..</p>
                                    </div>
                                    <div class="col-lg-2">
                                        
                                    </div>
                                </div>
                                
                                <?php
                                
                            endif;
                        
						?>
            			
        </div>
                
				<div class="row" style="margin-top:40px;margin-bottom:100px;">
				
				    <center><h2 style="color:#ffffff;"></h2></center>
				
				</div>
				
     </div>
    </div>
    <?php include('web/footer.php'); ?>
</div>
    </div>
    <?php include('web/footer-scripts.php'); ?>
</body>

</html>