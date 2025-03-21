<?php
/**
 * This template displays QA History Detailed
 * 
 * Template Name: QA History Detailed
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
 
 $cid = $_POST['cid'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include('web/head.php'); ?>
    <title>History | KeenPerform</title>
</head>
<style>

</style>
<body class="fix-header">
    <?php include('web/preloader.php'); ?>
<div id="wrapper">
        <?php include('web/nav-top.php'); ?>
        <?php include('web/nav-sidebar.php'); ?>
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row" style="margin-top:50px;margin-bottom:50px;">
          
          <div class="col-lg-3">
              
          </div>
          
<?php
						
$sql = "SELECT * FROM coach WHERE id='$cid'";
                        
$result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) :
                            
        $count = 0;
                            
        while($row = mysqli_fetch_assoc($result)) : $result;
                            
$ndate = $row["date"];
$nstatus = $row["status"];
$nweek = $row["week_number"];
$nqa_upload = $row["qa_upload"];
$nqa_notes = $row["qa_notes"];
$nqa_username = $row["qa_username"];
$nqadate = $row["qa_date"];
$ntl_notes = $row["tl_notes"];
$ntl_username = $row["tl_username"];
$ntldate = $row["tl_date"];
$ncon_notes = $row["con_notes"];
$ncon_username = $row["con_username"];
$ncondate = $row["con_date"];
$nsen_notes = $row["con_notes"];
$nsen_username = $row["con_username"];
$nsendate = $row["con_date"];
$audio_dest = "https://www.arketek.co.za/KPsystem/uploads/" . $nqa_upload;
								    
//here
?>

<div class="col-lg-6" style="background:#ffffff;border-radius:10px;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);padding-top:20px;padding-bottom:20px;margin-bottom:20px;margin-top:20px;">
	
	<div class="col-lg-12"style="">
        <center><h1>KeenCoach #<?php echo $cid; ?></h1></center>
	<div class="row">
		<div class="col-lg-12">
			<center><p>Date: <?php echo $ndate ?></p></center>
			<center><p>Week Number: <?php echo $nweek ?></p></center>
		</div>
	</div>
    </div>
	
	<div class="col-lg-12" style="">
	    
	    <center><img src="/KPsystem/images/icon-audio.png" width="80" height="auto" alt="Voice Note"></center>
	    
	    <div class="col-lg-4">
	        
	    </div>
	    
	    <div class="col-lg-2">
	        <button onclick="playAudio()" class="btn btn-info btn-block text-uppercase waves-effect waves-light" style="width:100px;background:#2cabe3;border:#2cabe3;border-radius:10px;margin-top:10px;">Play Audio</button>
	        <script>
      function playAudio() {
        var audio = new Audio("<?php echo $audio_dest; ?>");
        audio.play();
      }
    </script>
	    </div>
	    
	    <div class="col-lg-2">
	        <a href="<?php echo $audio_dest; ?>" download>
	        <center><button class="btn btn-info btn-block text-uppercase waves-effect waves-light" style="width:100px;background:#2cabe3;border:#2cabe3;border-radius:10px;margin-top:10px;">Download</button></center>
        </a>
	    </div>
	    
	    <div class="col-lg-4">
	        
	    </div>
        
        <div class="col-lg-12" style="margin-top:20px;">
            <center><h3>QA - <?php echo $nqa_username; ?></h3></center>
            
            <hr>
        <p><?php echo $nqa_notes ?></p> <b>-</b><p>Date: <?php echo $nqadate; ?></p>
            <hr>
        </div>
                           
    </div>
    
    <div class="col-lg-12" style="">
        
        <?php
        if($ntl_notes){
            ?>
            <div class="col-lg-12" style="margin-top:20px;">
            <center><h3>Team Leader - <?php echo $ntl_username; ?></h3></center>
            
            <hr>
        <p><?php echo $ntl_notes ?></p> <b>-</b> <p>Date: <?php echo $ntldate; ?></p>
    <hr>
    
    </div>
            <?php
        }
        ?>
        
    </div>
    
    <div class="col-lg-12" style="">
        
        <?php
        if($ncon_notes){
            ?>
            <div class="col-lg-12" style="margin-top:20px;">
            <center><h3>Consultant - <?php echo $ncon_username; ?></h3></center>
            
            <hr>
        <p><?php echo $ncon_notes ?></p> <b>-</b> <p>Date: <?php echo $ncondate; ?></p>
    <hr>
    
    </div>
            <?php
        }
        ?>
        
    
    
    </div>
    
    <div class="col-lg-12" style="">
        
        <?php
        if($nsen_notes){
            ?>
            <div class="col-lg-12" style="margin-top:20px;">
            <center><h3>Senior Manager - <?php echo $nsen_username; ?></h3></center>
            
            <hr>
        <p><?php echo $nsen_notes ?></p> <b>-</b> <p>Date: <?php echo $nsendate; ?></p>
    <hr>
    
    </div>
            <?php
        }
        ?>
        
    
    
    </div>
    
    
    
</div>

<div class="col-lg-3">
    
</div>

<?php
								
		$count++;
								
		endwhile;
							
                            
    else :
                                
        //if no data display something here 
                                
    endif;
                        
?>
            
    <div class="col-lg-3">
              
    </div>
                    
</div>
			
</div>
    <?php include('web/footer.php'); ?>
</div>
</div>
<?php include('web/footer-scripts.php'); ?>
</body>

</html>