<?php
/**
 * This template displays Detailed DCF
 * 
 * Template Name: Detailed DCF
 */
 if (!session_id()) {
    session_start();
}

include('web/database.php');
 
 $cid = $_POST['cid'];
 
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
    <title>Digital Coaching File | Keen Perform</title>
</head>
<style>
.nav li.active a {
	background-color: #2cabe3;
	color: #ffffff;
}
</style>
<body class="fix-header">
    <?php include('web/preloader.php'); ?>
    
    <div id="wrapper">
        <?php include('web/nav-top.php'); ?>
        <?php include('web/nav-sidebar.php'); ?>
        <div id="page-wrapper">
            <div class="container-fluid">
                
                <div class="row" style="margin-top:50px;margin-bottom:50px;">
                    
                    <div class="col-md-3 col-lg-3 col-sm-12"></div>
                    
                    <div class="col-md-6 col-lg-6 col-sm-12">
                        
                        <?php
						
						 $sql = "SELECT * FROM coach WHERE id='$cid'";
                        
                        $result = mysqli_query($conn, $sql);

                        if (mysqli_num_rows($result) > 0) :
                            
                            $count = 0;
                            
                            ?>
                        
						<div class="table table-hover manage-u-table" >
						    
						    <center><h1 style="color:white;">Digital Coaching File: #<?php echo $cid?></h1></center>
						    
							<table id="all_users" class="table table-hover manage-u-table" style="border-radius:10px;">
								<thead>
									<tr>
										<th scope="col" style="color:#000000;">ID</th>
										<th scope="col" style="color:#000000;">Status</th>
										<th scope="col" style="color:#000000;">Week Number</th>
										<th scope="col" style="color:#000000;">Escalated</th>
										<th scope="col" style="color:#000000;">Date</th>
									</tr>
									
								</thead>
								<tbody>
								    
								    <?php
                            
                        while($row = mysqli_fetch_assoc($result)) : $result;
                            
                            
								    ?>
								    
								<tr>
									<td scope="row" style="padding-top:20px;"><?php echo $row["id"]; ?></td>
									
									<td scope="row" style="padding-top:20px;"><?php echo $row["status"]; ?></td>
									<td scope="row" style="padding-top:20px;"><?php echo $row["week_number"]; ?></td>
									<td scope="row" style="padding-top:20px;"><?php echo $row["escalated"]; ?></td>
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
                    
                    <div class="col-md-3 col-lg-3 col-sm-12"></div>
                    
                    <div class="col-md-12 col-lg-12 col-sm-12">
                        
                        <?php
						
						 $sql = "SELECT * FROM coach WHERE id='$cid'";
                        
                        $result = mysqli_query($conn, $sql);

                        if (mysqli_num_rows($result) > 0) :
                            
                            $count = 0;
                            
                            ?>
                        
						<div class="table table-hover manage-u-table" style="margin-top:30px;">
						    <h1 style="color:white;">QA</h1>
							<table id="all_users" class="table table-hover manage-u-table" style="border-radius:10px;">
								<thead>
									<tr>
										<th scope="col" style="color:#000000;">User ID</th>
										<th scope="col" style="color:#000000;">Username</th>
										<th scope="col" style="color:#000000;">Email</th>
										<th scope="col" style="color:#000000;">Upload</th>
										<th scope="col" style="color:#000000;">Notes</th>
										<th scope="col" style="color:#000000;">Date</th>
									</tr>
									
								</thead>
								<tbody>
								    
								    <?php
                            
                        while($row = mysqli_fetch_assoc($result)) : $result;
                            
                            
								    ?>
								    
								<tr>
									<td scope="row" style="padding-top:20px;"><?php echo $row["qa_userid"]; ?></td>
									<td scope="row" style="padding-top:20px;"><?php echo $row["qa_username"]; ?></td>
									<td scope="row" style="padding-top:20px;"><?php echo $row["qa_email"]; ?></td>
									<td scope="row" style="padding-top:20px;">
									<?php
									$audio_dest = "/KPsystem/uploads/" . $row["qa_upload"];
									?>
									    <button id="playButton" style="width:100px;background:#2cabe3;border:#2cabe3;border-radius:10px;padding:5px;color:white">Play Audio</button>
                                        <audio id="player" src="<?php echo $audio_dest; ?>"></audio>

                                        <script>
                                        const playButton = document.getElementById("playButton");
                                        const player = document.getElementById("player");

                                        playButton.addEventListener("click", function() {
                                        player.play();
                                        });
                                        </script>
									
									</td>
									<td scope="row" style="padding-top:20px;"><?php echo $row["qa_notes"]; ?></td>
									<td scope="row" style="padding-top:20px;"><?php echo $row["qa_date"]; ?></td>
									
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
                    
                    <div class="col-md-12 col-lg-12 col-sm-12">
                        
                        <?php
						
						 $sql = "SELECT * FROM coach WHERE id='$cid'";
                        
                        $result = mysqli_query($conn, $sql);

                        if (mysqli_num_rows($result) > 0) :
                            
                            $count = 0;
                            
                            ?>
                        
						<div class="table table-hover manage-u-table" style="margin-top:30px;">
						    <h1 style="color:white;">Team Leader</h1>
							<table id="all_users" class="table table-hover manage-u-table" style="border-radius:10px;">
								<thead>
									<tr>
										<th scope="col" style="color:#000000;">User ID</th>
										<th scope="col" style="color:#000000;">Username</th>
										<th scope="col" style="color:#000000;">Email</th>
										<th scope="col" style="color:#000000;">Notes</th>
										<th scope="col" style="color:#000000;">Date</th>
									</tr>
									
								</thead>
								<tbody>
								    
								    <?php
                            
                        while($row = mysqli_fetch_assoc($result)) : $result;
                            
                            
								    ?>
								    
								<tr>
									<td scope="row" style="padding-top:20px;"><?php echo $row["tl_userid"]; ?></td>
									<td scope="row" style="padding-top:20px;"><?php echo $row["tl_username"]; ?></td>
									<td scope="row" style="padding-top:20px;"><?php echo $row["tl_email"]; ?></td>
									<td scope="row" style="padding-top:20px;"><?php echo $row["tl_notes"]; ?></td>
									<td scope="row" style="padding-top:20px;"><?php echo $row["tl_date"]; ?></td>
									
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
                    
                    <div class="col-md-12 col-lg-12 col-sm-12">
                        
                        <?php
						
						 $sql = "SELECT * FROM coach WHERE id='$cid'";
                        
                        $result = mysqli_query($conn, $sql);

                        if (mysqli_num_rows($result) > 0) :
                            
                            $count = 0;
                            
                            ?>
                        
						<div class="table table-hover manage-u-table" style="margin-top:30px;">
						    <h1 style="color:white;">Consultant</h1>
							<table id="all_users" class="table table-hover manage-u-table" style="border-radius:10px;">
								<thead>
									<tr>
										<th scope="col" style="color:#000000;">User ID</th>
										<th scope="col" style="color:#000000;">Username</th>
										<th scope="col" style="color:#000000;">Email</th>
										<th scope="col" style="color:#000000;">Notes</th>
										<th scope="col" style="color:#000000;">Date</th>
									</tr>
									
								</thead>
								<tbody>
								    
								    <?php
                            
                        while($row = mysqli_fetch_assoc($result)) : $result;
                            
                            
								    ?>
								    
								<tr>
									<td scope="row" style="padding-top:20px;"><?php echo $row["con_userid"]; ?></td>
									<td scope="row" style="padding-top:20px;"><?php echo $row["con_username"]; ?></td>
									<td scope="row" style="padding-top:20px;"><?php echo $row["con_email"]; ?></td>
									<td scope="row" style="padding-top:20px;"><?php echo $row["con_notes"]; ?></td>
									<td scope="row" style="padding-top:20px;"><?php echo $row["con_date"]; ?></td>
									
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
                    
                    <div class="col-md-12 col-lg-12 col-sm-12">
                        
                        <?php
						
						 $sql = "SELECT * FROM coach WHERE id='$cid'";
                        
                        $result = mysqli_query($conn, $sql);

                        if (mysqli_num_rows($result) > 0) :
                            
                            $count = 0;
                            
                            ?>
                        
						<div class="table table-hover manage-u-table" style="margin-top:30px;">
						    <h1 style="color:white;">Senior Manager</h1>
							<table id="all_users" class="table table-hover manage-u-table" style="border-radius:10px;">
								<thead>
									<tr>
										<th scope="col" style="color:#000000;">User ID</th>
										<th scope="col" style="color:#000000;">Username</th>
										<th scope="col" style="color:#000000;">Email</th>
										<th scope="col" style="color:#000000;">Notes</th>
										<th scope="col" style="color:#000000;">Date</th>
									</tr>
									
								</thead>
								<tbody>
								    
								    <?php
                            
                        while($row = mysqli_fetch_assoc($result)) : $result;
                            
                            
								    ?>
								    
								<tr>
									<td scope="row" style="padding-top:20px;"><?php echo $row["sen_userid"]; ?></td>
									<td scope="row" style="padding-top:20px;"><?php echo $row["sen_username"]; ?></td>
									<td scope="row" style="padding-top:20px;"><?php echo $row["sen_email"]; ?></td>
									<td scope="row" style="padding-top:20px;"><?php echo $row["sen_notes"]; ?></td>
									<td scope="row" style="padding-top:20px;"><?php echo $row["sen_date"]; ?></td>
									
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
            <?php include('web/footer.php'); ?>
        </div>
        
    </div>
    <?php include('web/footer-scripts.php'); ?>
</body>

</html>