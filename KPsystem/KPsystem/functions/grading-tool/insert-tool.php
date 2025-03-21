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

$user_id = $_SESSION['id'];
$username = $_SESSION['details'][$user_id]['username'];
$email = $_SESSION['details'][$user_id]['email'];
$week_number = $_SESSION['details'][$user_id]['week_number'];
$weekly_sales_target = $_POST['weekly_sales_target'];
$wrap_time = $_POST['wrap_time'];
$connected_talk_time = $_POST['connected_talk_time'];
$calls = $_POST['calls'];
$average_call_length = $_POST['call_length'];
$attendance = $_POST['attendance'];
    
date_default_timezone_set("Africa/Johannesburg");
$date = date("Y-m-d h:i:sa");
    
$stmt = $conn->prepare("INSERT INTO grading_tool (user_id, username, email, week_number, weekly_sales_target, wrap_time, connected_talk_time, calls, average_call_length, attendance, date) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
$stmt->bind_param("issssssssss", $user_id, $username, $email, $week_number, $weekly_sales_target, $wrap_time, $connected_talk_time, $calls, $average_call_length, $attendance, $date);
$stmt->execute();

if ($stmt->affected_rows > 0) {
    //echo "New record created successfully";
} else {
    //echo "Error: " . $stmt->error;
}
    
$conn->close();

?>
