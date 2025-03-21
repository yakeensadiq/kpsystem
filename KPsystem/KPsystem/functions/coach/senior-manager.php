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
$status = 'Complete';
$sen = $_POST['sen_notes'];
$cid = $_POST['cid'];
    
date_default_timezone_set("Africa/Johannesburg");
$date = date("Y-m-d h:i:sa");

$sql = "UPDATE coach SET status='$status', sen_notes='$sen', sen_userid='$user_id', sen_username='$username', sen_email='$email', sen_date='$date' WHERE id='$cid' ";
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
                /*
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
  $mess2 = $sen . ".. this digital coaching file #" . $cid . " has been marked as complete. History available on your dashboard.";
  $headers2 = "From: " . $email . "\r\n";
  mail($to2, $subject2, $mess2, $headers2);
}

if ($qa_email != null) {
  $to = $qa_email;
  $subject = "Digital coaching file #" . $cid . " Complete";
  $mess = $sen . ".. this digital coaching file #" . $cid . " has been marked as complete. History available on your dashboard.";
  $headers = "From: " . $email . "\r\n";
  mail($to, $subject, $mess, $headers);
}

if ($con_email != null) {
  $to3 = $con_email;
  $subject3 = "Digital coaching file #" . $cid . " Complete";
  $mess3 = $sen . ".. this digital coaching file #" . $cid . " has been marked as complete. History available on your dashboard.";
  $headers3 = "From: " . $email . "\r\n";
  mail($to3, $subject3, $mess3, $headers3);
}

if ($sen_email != null) {
  $to4 = $sen_email;
  $subject4 = "Digital coaching file #" . $cid . " Complete";
  $mess4 = $sen . ".. this digital coaching file #" . $cid . " has been marked as complete. History available on your dashboard.";
  $headers4 = "From: " . $email . "\r\n";
  mail($to4, $subject4, $mess4, $headers4);
}
                */
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
 
    
$conn->close();

?>