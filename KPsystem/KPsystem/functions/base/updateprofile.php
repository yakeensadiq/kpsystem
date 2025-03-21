<?php

if(!$_POST) {
exit();
}

$dbservername = "localhost";
$dbusername = "thedomik2_kpuser";
$dbpassword = "hN3G#kdHJ982mnu8";
$dbname = "thedomik2_kp";

$conn = new mysqli($dbservername, $dbusername, $dbpassword, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

    $email = $_POST['email'];
    
    date_default_timezone_set("Africa/Johannesburg");
    $date = date("Y-m-d h:i:sa");
    
    session_start();
    $user_id = $_SESSION['id'];
    $username = $_SESSION['details'][$user_id]['username'];
    
    $sql = "UPDATE users SET email='$email', last_login='$date' WHERE id='$user_id' ";
    
    $result = mysqli_query($conn, $sql);

    if ($conn->query($sql) === TRUE) {
        
        session_start();
        $_SESSION['details'][$user_id] = array('username' => $username, 'email' => $email);
        
        
    }
    else {
        
    }

$conn->close();

?>