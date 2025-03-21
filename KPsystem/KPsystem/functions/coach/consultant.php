<?php
if (!session_id()) {
    session_start();
}

$dbservername = "localhost";
$dbusername = "thedomik2_kpuser";
$dbpassword = "hN3G#kdHJ982mnu8";
$dbname = "thedomik2_kp";

$conn = new mysqli($dbservername, $dbusername, $dbpassword, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$user_id = $_SESSION["id"];
$username = $_SESSION['details'][$user_id]['username'];
$email = $_SESSION['details'][$user_id]['email'];
$status = 'SEN';
$status_complete = 'Complete';
$con = $_POST['con_notes'];
$cid = $_POST['cid'];
$escalate = $_POST['escalate'];
    
date_default_timezone_set("Africa/Johannesburg");
$date = date("Y-m-d h:i:sa");

if($escalate === "escalate"){
    
    $sql = "UPDATE coach SET status='$status', con_notes='$con', con_userid='$user_id', con_username='$username', con_email='$email', con_date='$date' WHERE id='$cid' ";
    $result = mysqli_query($conn, $sql);

if ($conn->query($sql) === TRUE) {
  //echo "Update successfull";
  /*
    // Retrieve all the senior managers from the table
$sql2 = "SELECT email FROM users WHERE role='Senior Manager'";
$result2 = mysqli_query($conn, $sql2);

// Loop through the results and send an email to each senior manager
while ($row2 = mysqli_fetch_array($result2)) {
    $to = $row2['email'];
    $subject = "New digital coaching file from " . $username;
    $mess = $tl . " .. Audio and full digital coaching file available on dashboard.";
    $headers = "From: " . $email . "\r\n";
    
    mail($to, $subject, $mess, $headers);
    
    
    
}
  
  */
} else {
  
}
/*
    $sql3 = "SELECT tl_email FROM coach WHERE id='$cid'";
    $result3 = mysqli_query($conn, $sql3);

    if (mysqli_num_rows($result3) > 0) {
        $row3 = mysqli_fetch_assoc($result3);
        $tl_email = $row3['tl_email'];
        
         $sql4 = "SELECT qa_email FROM coach WHERE id='$cid'";
    $result4 = mysqli_query($conn, $sql4);

    if (mysqli_num_rows($result4) > 0) {
        $row4 = mysqli_fetch_assoc($result4);
        $qa_email = $row4['qa_email'];
        
        
        $to2 = $tl_email;
        $subject2 = "New response on your digital coaching file from " . $username;
        $mess2 = $con . ".. Audio file and full digital coaching file available on your dashboard.";
        $headers2 = "From: " . $email . "\r\n" . "CC: " . $qa_email;
    
        mail($to2, $subject2, $mess2, $headers2);
        
        
    }
    else {
        
    }
        
        
        
    }
    else {
        
    }
    
    */
  
} 
else{
    
    $sql = "UPDATE coach SET status='$status_complete', con_notes='$con', con_userid='$user_id', con_username='$username', con_email='$email', con_date='$date' WHERE id='$cid' ";
$result = mysqli_query($conn, $sql);

if ($conn->query($sql) === TRUE) {
  //echo "Update successfull";
  
    $sql2 = "SELECT qa_userid FROM coach WHERE id='$cid'";
    $result2 = mysqli_query($conn, $sql2);

    if (mysqli_num_rows($result2) > 0) {
  
    while($row2 = mysqli_fetch_assoc($result2)) {
        
        $uid =  $row["qa_userid"];
        
        $sql4 = "SELECT week_number FROM users WHERE id='$uid'";
        $result4 = mysqli_query($conn, $sql4);

        if (mysqli_num_rows($result2) > 0) {
  
        while($row4 = mysqli_fetch_assoc($result4)) {
        
            $wk =  $row["week_number"];
            $new_wk = $wk + 1;
        
            $sql3 = "UPDATE users SET week_number='$new_wk' WHERE id='$uid' ";
            $result3 = mysqli_query($conn, $sql3);

            if ($conn->query($sql3) === TRUE) {
                //echo "Update successfull";
                
                $query5 = "SELECT qa_email, tl_email, con_email, sen_email FROM coach WHERE id='$cid'";
$result5 = mysqli_query($conn, $query5);
$row5 = mysqli_fetch_assoc($result5);

$qa_email = $row5['qa_email'];
$tl_email = $row5['tl_email'];
$con_email = $row5['con_email'];
$sen_email = $row5['sen_email'];

// Check if any of the email values are not null, and send an email
if ($tl_email != null) {
  $to2 = $tl_email;
  $subject2 = "Digital coaching file #" . $cid . " Complete";
  $mess2 = $con . ".. this digital coaching file #" . $cid . " has been marked as complete. History available on your dashboard.";
  $headers2 = "From: " . $email . "\r\n";
  mail($to2, $subject2, $mess2, $headers2);
}

if ($qa_email != null) {
  $to = $qa_email;
  $subject = "Digital coaching file #" . $cid . " Complete";
  $mess = $con . ".. this digital coaching file #" . $cid . " has been marked as complete. History available on your dashboard.";
  $headers = "From: " . $email . "\r\n";
  mail($to, $subject, $mess, $headers);
}

if ($con_email != null) {
  $to3 = $con_email;
  $subject3 = "Digital coaching file #" . $cid . " Complete";
  $mess3 = $con . ".. this digital coaching file #" . $cid . " has been marked as complete. History available on your dashboard.";
  $headers3 = "From: " . $email . "\r\n";
  mail($to3, $subject3, $mess3, $headers3);
}

if ($sen_email != null) {
  $to4 = $sen_email;
  $subject4 = "Digital coaching file #" . $cid . " Complete";
  $mess4 = $con . ".. this digital coaching file #" . $cid . " has been marked as complete. History available on your dashboard.";
  $headers4 = "From: " . $email . "\r\n";
  mail($to4, $subject4, $mess4, $headers4);
}
                
            } else {
                //echo "Error";
            }
        
        }
    }
    else {
        
       
    }
        
        }
    }
    else {
        
       
    }
    
    
    
  
} else {
  //echo "Error";
}
    
}


    
$conn->close();

?>