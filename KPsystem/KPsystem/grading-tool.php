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
 
 date_default_timezone_set("Africa/Johannesburg");
 $date = date("Y-m-d h:i:sa");
 
 if($user_id === null){
     header("Location: https://www.arketek.co.za/KPsystem/login");
    exit();
 }
 
$sqlz = "SELECT week_number FROM users WHERE id='$user_id'";
$resultz = mysqli_query($conn, $sqlz);
$rowz = mysqli_fetch_assoc($resultz);
$wk = $rowz["week_number"];

$sqlzz = "SELECT weekly_sales_target, wrap_time, connected_talk_time, calls, average_call_length, attendance, actual_weekly_sales_target, actual_wrap_time, actual_connected_talk_time, actual_calls, actual_call_length, actual_attendance FROM grading_tool WHERE user_id='$user_id' && week_number='$wk' ";
$resultzz = mysqli_query($conn, $sqlzz);
$rowzz = mysqli_fetch_assoc($resultzz);
$ws_target = $rowzz["weekly_sales_target"];
$w_time = $rowzz["wrap_time"];
$ct_time = $rowzz["connected_talk_time"];
$cal = $rowzz["calls"];
$ac_length = $rowzz["average_call_length"];
$att = $rowzz["attendance"];
$aws_target = $rowzz["actual_weekly_sales_target"];
$aw_time = $rowzz["actual_wrap_time"];
$act_time = $rowzz["actual_connected_talk_time"];
$a_calls = $rowzz["actual_calls"];
$aac_length = $rowzz["actual_call_length"];
$a_att = $rowzz["actual_attendance"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php include('web/head.php'); ?>
    <title>Grading Tool | KeenPerform</title>
    <script>
    document.addEventListener("DOMContentLoaded", function() {
  // Get the button element
  var button = document.querySelector("#select-target");

  // Get all the interest-divs
  var actualDiv = document.querySelector(".grading-actual");

  // Get the interest-travel div
  var targetDiv = document.querySelector(".grading-target");

  // Add an event listener to the button
  button.addEventListener("click", function(event) {
    // Prevent the default behavior of the button inside a form
    event.preventDefault();

    actualDiv.style.display = "none";

    // Show the interest-travel div
    targetDiv.style.display = "block";
    
    button.style.background = "#354a82";
    var button2 = document.querySelector("#select-actual");
    button2.style.background = "#2cabe3";
  });
});
    </script>
    <script>
    document.addEventListener("DOMContentLoaded", function() {
  // Get the button element
  var button2 = document.querySelector("#select-actual");

  // Get all the interest-divs
  var targetDiv = document.querySelector(".grading-target");

  // Get the interest-travel div
  var actualDiv = document.querySelector(".grading-actual");

  // Add an event listener to the button
  button2.addEventListener("click", function(event) {
    // Prevent the default behavior of the button inside a form
    event.preventDefault();

    targetDiv.style.display = "none";

    // Show the interest-travel div
    actualDiv.style.display = "block";
    
    button2.style.background = "#354a82";
    var button = document.querySelector("#select-target");
    button.style.background = "#2cabe3";
  });
});
    </script>
</head>
<style>
.parallax {
  /* The image used */
  background-image: url("https://www.arketek.co.za/KPsystem/images/kp-welcome.jpg");

  /* Set a specific height */
  min-height: 500px;
  width:100%;
    
  /* Create the parallax scrolling effect */
  background-attachment: fixed;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}
form {
  display: flex;
  flex-wrap: wrap;
  justify-content: space-between;
}

label {
  width: 50%;
  margin-right: 10px;
  
}

input {
  width: 45%;
  margin-bottom: 10px;
  right:0px;
}

.button-container {
  width: 100%;
  text-align: right;
}

label i {
  margin-right: 10px;
  background-color: #2cabe3;
  color: white;
  border-radius: 50%;
  padding: 5px;
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
            <div class="container-fluid">
                <div class="row">
                
                <!--Options-->
                <div class="col-lg-12" style="padding-top:50px;">
                    <div class="col-lg-3">
                        
                    </div>
                    <div class="col-lg-3">
                        <div class="col-lg-6">
                            <div class="inner" style="margin:10px;">
                                <form>
                                    <button id="select-target" style="background:#354a82;border:#2cabe3;border-radius:30px;padding:5px;width:200px;">
                                        <center><h3 style="color:white;"><i class="fa fa-bullseye" style="color:white;margin-right:10px;font-size:20px;"></i>Target</h3></center>
                                    </button>
                                </form>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="inner" style="margin:10px;">
                                <form>
                                    <button id="select-actual" style="background:#2cabe3;border:#2cabe3;border-radius:30px;padding:5px;width:200px;">
                                        <center><h3 style="color:white;"><i class="fa fa-user" style="color:white;margin-right:10px;font-size:20px;"></i>Actual</h3></center>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        
                    </div>
                    <div class="col-lg-3">
                        
                    </div>
                </div>
                
                <!--Target-->
                <div class="col-lg-12 slide-up" style="padding-top:10px;" >
                    
                    <div class="grading-target" style="display:block;">
                        
                        <div class="col-lg-3">
                        
                        </div>
                    
                        <div class="col-lg-6" style="margin-top:10px;">
                            <div class="col-lg-12" style="margin:10px;background:#ffffff;padding:30px;border-radius:30px;">
    <center><h3>Grading Tool  |  Target</h3><small>Week Number: <?php echo $wk; ?></small></center>
    
    <hr>
    
    <?php
    if($rowzz > 0){
        ?>
        <center><p>Your weekly target has been submitted, you can view your weekly results in the Actual tab..</p></center>
        <?php
    }
    else{
        ?>
        <form id="grading-form">
      <label for="weekly_sales_target"><i class="fa fa-bullseye"></i> Weekly Sales Target:</label>
      <input type="text" id="weekly_sales_target" name="weekly_sales_target" placeholder="Eg: 12"><br>
      <label for="wrap_time"><i class="fa fa-clock-o"></i> Daily / Weekly Wrap time allowed (Hours):</label>
      <input type="text" id="wrap_time" name="wrap_time" placeholder="Eg: 12"><br>
      <label for="connected_talk_time"><i class="fa fa-phone"></i> Daily / Weekly Connected / Talk Time (Hours):</label>
      <input type="text" id="connected_talk_time" name="connected_talk_time" placeholder="Eg: 8"><br>
      <label for="calls"><i class="fa fa-phone-square"></i> Daily / Weekly Calls:</label>
      <input type="text" id="calls" name="calls" placeholder="Eg: 500"><br>
      <label for="call_length"><i class="fa fa-clock-o"></i> Average Call Length (< Mins):</label>
      <input type="text" id="call_length" name="call_length" placeholder="Eg: 5"><br>
      <label for="attendance"><i class="fa fa-users"></i> Attendance (%):</label>
      <input type="text" id="attendance" name="attendance" placeholder="Eg: 100"><br>
      <div class="button-container" style="margin-top:30px;">
        <input type="submit" value="Submit" style="background:#2cabe3;border:#2cabe3;color:white;width:200px;height:30px;border-radius:20px;margin-right:20px;">
      </div>
    </form>
        <?php
    }
    ?>
    
    
  </div>
                        </div>
                    
                        <div class="col-lg-3">
                        
                        </div>
                        
                    </div>
                </div>
                
                <!--Actual-->
                <div class="col-lg-12" style="padding-top:10px;">
                    
                    <div class="grading-actual" style="display:none;">
                        
                        <div class="col-lg-3">
                        
                        </div>
                    
                        <div class="col-lg-6" >
                            <div class="col-lg-12" style="margin:10px;background:#ffffff;padding:30px;border-radius:30px;">
      
                            <center><h3>Grading Tool  |  Actual</h3><small>Week Number: <?php echo $wk; ?></small></center>
               
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
      <td style="border: 1px solid black; padding: 10px;"><p><?php echo $ws_target; ?></p></td>
      <td style="border: 1px solid black; padding: 10px;"><p><?php echo $aws_target; ?></p></td>
    </tr>
    <tr>
      <td style="border: 1px solid black; padding: 10px;"><i class="fa fa-clock-o" style="background:#2cabe3;border:#2cabe3;border-radius:100%;color:white;padding:5px;"></i></td>
      <td style="border: 1px solid black; padding: 10px;"><b>Daily / Weekly Wrap time allowed:</b></td>
      <td style="border: 1px solid black; padding: 10px;"><p><?php echo $w_time; ?> Hours</p></td>
      <td style="border: 1px solid black; padding: 10px;"><p><?php echo $aw_time; ?> </p></td>
    </tr>
    <tr>
      <td style="border: 1px solid black; padding: 10px;"><i class="fa fa-phone" style="background:#2cabe3;border:#2cabe3;border-radius:100%;color:white;padding:5px;"></i></td>
      <td style="border: 1px solid black; padding: 10px;"><b>Daily / Weekly Connected / Talk Time:</b></td>
      <td style="border: 1px solid black; padding: 10px;"><p><?php echo $ct_time; ?> Hours</p></td>
      <td style="border: 1px solid black; padding: 10px;"><p><?php echo $act_time; ?> </p></td>
    </tr>
    <tr>
      <td style="border: 1px solid black; padding: 10px;"><i class="fa fa-phone-square" style="background:#2cabe3;border:#2cabe3;border-radius:100%;color:white;padding:5px;"></i></td>
      <td style="border: 1px solid black; padding: 10px;"><b>Daily / Weekly Calls:</b></td>
      <td style="border: 1px solid black; padding: 10px;"><p><?php echo $cal; ?> </p></td>
      <td style="border: 1px solid black; padding: 10px;"><p><?php echo $a_calls; ?></p></td>
    </tr>
    <tr>
      <td style="border: 1px solid black; padding: 10px;"><i class="fa fa-clock" style="background:#2cabe3;border:#2cabe3;border-radius:100%;color:white;padding:5px;"></i></td>
      <td style="border: 1px solid black; padding: 10px;"><b>Average Call Length:</b></td>
      <td style="border: 1px solid black; padding: 10px;"><p>< <?php echo $ac_length; ?> Mins</p></td>
      <td style="border: 1px solid black; padding: 10px;"><p>< <?php echo $aac_length; ?> Mins</p></td>
    </tr>
    <tr>
      <td style="border: 1px solid black; padding: 10px;"><i class="fa fa-bullseye" style="background:#2cabe3;border:#2cabe3;border-radius:100%;color:white;padding:5px;"></i></td>
      <td style="border: 1px solid black; padding: 10px;"><b>Attendance:</b></td>
      <td style="border: 1px solid black; padding: 10px;"><p><?php echo $att; ?>%</p></td>
      <td style="border: 1px solid black; padding: 10px;"><p><?php echo $a_att; ?>%</p></td>
    </tr>
  </tbody>
</table>
                
                
                            </div>
                        </div>
                    
                        <div class="col-lg-3">
                        
                        </div>
                        
                    </div>
                    
                </div>

                </div>
            </div>
            <?php include('web/footer.php'); ?>
        </div>
    </div>
     <?php include('web/footer-scripts.php'); ?>
     <script>
document.getElementById("grading-form").addEventListener("submit", function(event) {
  event.preventDefault(); // prevent default form submission behavior
  
  var formData = new FormData(this); // create new FormData object from form element
  
  var xhr = new XMLHttpRequest(); // create new XMLHttpRequest object
  
  xhr.onreadystatechange = function() {
    if (this.readyState === 4 && this.status === 200) { // if response is successful
      // execute your function here
      
Swal.fire({
  icon: 'success',
  title: 'Success!',
  text: 'Your weekly target has been submitted successfully.',
}).then(() => {
  window.location.replace('/KPsystem/grading-tool');
});
      
    }
  };
  
  xhr.open("POST", "/KPsystem/functions/grading-tool/insert-tool.php", true); // set up request
  xhr.send(formData); // send request with form data
});
</script>
</body>
</html>