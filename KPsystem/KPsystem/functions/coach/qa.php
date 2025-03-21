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
$status = 'QA';
$qa = $_POST['qa_notes'];
    
date_default_timezone_set("Africa/Johannesburg");
$date = date("Y-m-d h:i:sa");
    
$week = '1';

    
if(!$qa){
        
}
else{
        
$sql = "INSERT INTO coach (date, week_number, status, qa_username, qa_email, qa_userid, qa_notes, qa_date)
            VALUES ('$date', '$week', '$status', '$username', '$email', '$user_id', '$qa', '$date')";

if ($conn->query($sql) === TRUE) {
              
  /*
  // Retrieve all the team leaders from the table
$sql2 = "SELECT email FROM users WHERE role='Team Leader'";
$result2 = mysqli_query($conn, $sql2);

// Loop through the results and send an email to each team leader
while ($row2 = mysqli_fetch_array($result2)) {
    $to = $row2['email'];
    $subject = "New digital coaching file from " . $username;
    $mess = $qa . " .. Audio file available on dashboard.";
    $headers = "From: " . $email . "\r\n";
    
    mail($to, $subject, $mess, $headers);
}
      */          
}
else {
        
      
    }
  
        
}
    
$conn->close();

?>