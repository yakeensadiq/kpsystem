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
    date_default_timezone_set("Africa/Johannesburg");
    $date = date("Y-m-d h:i:sa");
    
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    $sql = "SELECT id, role, username, week_number FROM users WHERE email='$email' && password='$password'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
  
    while($row = mysqli_fetch_assoc($result)) {
        
        $user_id =  $row["id"];
        $username =  $row["username"];
        $role = $row["role"];
        $week_number = $row["week_number"];
        
        $_SESSION['id'] = $user_id;
        
        if (!isset($_SESSION['details'])) {
            $_SESSION['details'] = array();
        }
        
        $_SESSION['details'][$user_id] = array('username' => $username, 'email' => $email, 'role' => $role, 'week_number' => $week_number);
        
        
        $sql = "INSERT INTO login_history (userid, username, email, date)
            VALUES ('$user_id', '$username', '$email', '$date')";

            if ($conn->query($sql) === TRUE) {
                header("Location: https://www.arketek.co.za/KPsystem/dashboard");
                exit();
            }
            else {
                header("Location: https://www.arketek.co.za/KPsystem/dashboard");
                exit();
            }
        
        
        
        }
    }
    else {
        
       header("Location: https://www.arketek.co.za/KPsystem/login");
        exit();
        
    }
    
    

$conn->close();

?>