<?php
/**
 * This template displays QA
 * 
 * Template Name: QA
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
    <title>QA | KeenPerform</title>
    
</head>
<style>
.parallax {
  /* The image used */
  background-image: url("https://www.arketek.co.za/KPsystem/images/kp-bg-qa.jpg");

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
        <div class="container-fluid" >
        
        <div class="col-lg-1 col-md-1 col-sm-12 cols-xs-12">
            </div>
        
        <div class="col-lg-5 col-md-5 col-sm-12 cols-xs-12">
					
		<?php
		//check user week number
		
		$sql = "SELECT week_number FROM users WHERE id='$user_id'";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
    
            while($row = mysqli_fetch_assoc($result)) {
                $wk = $row["week_number"];
               
                $sql2 = "SELECT COUNT(*) as total_rows FROM coach WHERE qa_userid='$user_id' AND status='Complete'";
                $result2 = mysqli_query($conn, $sql2);
                $row2 = mysqli_fetch_assoc($result2);
                $total_rows2 = $row2['total_rows'];

                //echo "Total rows: $total_rows2";
               
               if($wk > $total_rows2){
                   ?>
                   <div class="col-lg-12 slide-up" style="background:#ffffff;border-radius:10px;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);padding-top:20px;padding-bottom:20px;margin-bottom:20px;margin-top:60px;">
                        <center><img src="/KPsystem/images/hourglass.png" style="width:100px;height:auto;"></img></center>
                        <center><h3 style="padding-top:10px;">Pending Completion</h3></center>
                        <center><p style="margin-bottom:40px;">Your next digital coaching file will be made available once your current coaching file has been marked as complete.</p></center>
                        <div class="col-lg-2">
                            
                        </div>
                        <div class="col-lg-8">
                            <button class="btn btn-info btn-block text-uppercase waves-effect waves-light" style="background:#2cabe3;border:#2cabe3;border-radius:10px;" onclick="window.location.href='https://www.arketek.co.za/KPsystem/qa-history'">View Progress & History <i  class="fa fa-arrow-right fa-fw" style="padding-top:2px;float:right;"></i></button>
                        </div>
                        <div class="col-lg-2">
                            
                        </div>
                        
                   </div>
                   <?php
               }
               else if($wk <= $total_rows2){
                   
                   ?>
                   <div class="col-lg-12 slide-up" style="background:#ffffff;border-radius:10px;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);padding-top:20px;padding-bottom:20px;margin-bottom:20px;margin-top:100px;">
        
        <?php
if(isset($_POST['submit'])){
    
    // Get the file information
    $file = $_FILES['audio_file'];
    $file_name = $file['name'];
    $file_tmp = $file['tmp_name'];
    $file_size = $file['size'];
    $file_error = $file['error'];
    
    // Allow only MP3 files
    $file_ext = explode('.', $file_name);
    $file_ext = strtolower(end($file_ext));
    $allowed = array('mp3');
    
    $status = 'QA';
    $qa = $_POST['qa_notes'];
    //$week = '1';
    
    
    $sql2 = "SELECT week_number FROM users WHERE id='$user_id'";
    $result2 = mysqli_query($conn, $sql2);

    if (mysqli_num_rows($result2) > 0) {
    
        while($row2 = mysqli_fetch_assoc($result2)) {
            $mrow = $row2["week_number"];
            $mtotal = $mrow + 1;
            $week = $mtotal;
            
            // Check for errors
    if(in_array($file_ext, $allowed)){
        if($file_error === 0){
            if($file_size <= 2097152){
                // Generate a unique file name
                $file_name_new = uniqid('', true) . '.' . $file_ext;
                
                // Save the file to the folder
                $file_destination = 'uploads/' . $file_name_new;
                
                
                if(move_uploaded_file($file_tmp, $file_destination)){
                    // Save the file name to the database
                    
                    $sql = "INSERT INTO coach (date, week_number, status, qa_upload, qa_username, qa_email, qa_userid, qa_notes, qa_date)
            VALUES ('$date', '$week', '$status', '$file_name_new', '$username', '$email', '$user_id', '$qa', '$date')";

    if ($conn->query($sql) === TRUE) {
                
                $sql3 = "UPDATE users SET week_number='$week' WHERE id='$user_id' ";
    $result3 = mysqli_query($conn, $sql3);
    
    if ($conn->query($sql3) === TRUE) {
        
        ?>
        <script type="text/javascript">
        location.reload();
        </script>
        <?php
        
    } else {
    
}
                
    }
    else {
        
      
    }
                }
            }
        }
    }
            
        }
    } 
    else {
        //echo "0 results";
    }
    
    // Close the connection
    mysqli_close($conn);
}

?>

    <div class="col-lg-12" style="margin-top:30px;">
        
    <!---<iframe name="myframe" id="frame1" src="/keen-perform/functions/coach/qa.php" style="display:none"></iframe>--->
						    
    <form class="form-horizontal new-lg-form" action="" method="POST" enctype="multipart/form-data">
					
	<div class="col-lg-7">
        <center><h1>KeenCoach</h1></center>
        <center><p>Week Number: <?php
        $new_wk = $wk + 1;
        echo $new_wk;
        ?></p></center>
        <center><img src="/KPsystem/images/icon-audio.png" width="80" height="auto" alt="Voice Note"></center>
    </div>
    <div class="col-lg-5" style="padding-top:50px;">
        <b>Upload audio file (.mp3)</b>
        <input type="file"  name="audio_file" style="width:100%;background:#2cabe3;border:#2cabe3;color:#ffffff;">
        
    </div>
    <div class="col-lg-12" style="margin-top:50px;">
        
        <h3>QA Upload & Optional Notes</h3>
                    <div class="form-group ">
                        <div class="col-xs-12">
                            <textarea class="form-control" type="text" rows="4" cols="50" id="qa_notes" name="qa_notes" placeholder="" required></textarea> </div>
                    </div>
                    <div class="form-group m-t-20">
                        <div class="col-xs-4">
     <p>QA Username: <?php echo $username; ?></p>
     
     </div>
        <div class="col-xs-4">
                            
        </div>
        <div class="col-xs-4">
            <button class="btn btn-info btn-block text-uppercase waves-effect waves-light" style="background:#2cabe3;border:#2cabe3;border-radius:10px;" type="submit" id="submit" name="submit">Submit <i  class="fa fa-arrow-right fa-fw" style="padding-top:2px;float:right;"></i></button>
        </div>
     </div>
        
    </div>
					     
</form>
                

    </div>
        
        
    
    </div>
                   <?php
                   
               }
               
            }
        } 
        else {
             
             
             
        }
		
		?>
                         

				    
				    </div>
        
        <div class="col-lg-6 col-md-6 col-sm-12 cols-xs-12">
            
        </div>
        
     </div>
        
        
        </div>
        <div class="row" style="padding-top:10px;">
    <center><i><h3 style="color:#ffffff;">KeenCoach is easy to use - simply upload your audio file and some optional notes and a team leader will respond..</h3></i></center>
</div>
    
            <!-- /.container-fluid -->
            
</div>
<?php include('web/footer.php'); ?>
    </div>
    <?php include('web/footer-scripts.php'); ?>
</body>

</html>