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
$status = 'TL';
$tl = $_POST['tl_notes'];
$cid = $_POST['cid'];
    
date_default_timezone_set("Africa/Johannesburg");
$date = date("Y-m-d h:i:sa");
    
//$week = '1';
  
$sql = "UPDATE coach SET status='$status', tl_notes='$tl', tl_userid='$user_id', tl_username='$username', tl_email='$email', tl_date='$date' WHERE id='$cid' ";
$result = mysqli_query($conn, $sql);

if ($conn->query($sql) === TRUE) {
  /*
  // Retrieve all the consultants from the table
$sql2 = "SELECT email FROM users WHERE role='Consultant'";
$result2 = mysqli_query($conn, $sql2);

// Loop through the results and send an email to each team leader
while ($row2 = mysqli_fetch_array($result2)) {
    $to = $row2['email'];
    $subject = "New digital coaching file from " . $username;
    $mess = $tl . " .. Audio file available on dashboard.";
    $headers = "From: " . $email . "\r\n";
    
    mail($to, $subject, $mess, $headers);
    
    
    
}
  */
  
} else {
  
}
/*
$sql3 = "SELECT qa_email FROM coach WHERE id='$cid'";
    $result3 = mysqli_query($conn, $sql3);

    if (mysqli_num_rows($result3) > 0) {
        $row3 = mysqli_fetch_assoc($result3);
        $qa_email = $row3['qa_email'];
        
        $to2 = $qa_email;
        $subject2 = "New response on your digital coaching file from " . $username;
        $mess2 = $tl;
        $headers2 = "From: " . $email . "\r\n";
    
        mail($to2, $subject2, $mess2, $headers2);
    }
    else {
        
    }
    */
$conn->close();

?>