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

    $email = $_POST['email'];
    $password = $_POST['password'];
    
    $sql = "SELECT id, role, username FROM admins WHERE email='$email' && password='$password'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
  
    while($row = mysqli_fetch_assoc($result)) {
        
        $user_id =  $row["id"];
        $username =  $row["username"];
        $role =  $row["role"];
        
            if($role === "Admin"){
        
            $_SESSION['id'] = $user_id;
        
            if (!isset($_SESSION['details'])) {
            $_SESSION['details'] = array();
            }
        
            $_SESSION['details'][$user_id] = array('username' => $username, 'email' => $email , 'role' => $role);
        
            header("Location: https://www.arketek.co.za/KPsystem/admin/");
            exit();
        
            }
            else {
        
                header("Location: https://www.arketek.co.za/KPsystem/admin/login");
                exit();
        
    }
        }
        
        
    }
    else {
        
       header("Location: https://www.arketek.co.za/KPsystem/admin/login");
        exit();
        
    }
    
    

$conn->close();

?>