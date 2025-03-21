<?php
$dbservername = "localhost";
$dbusername = "thedomik2_kpuser";
$dbpassword = "hN3G#kdHJ982mnu8";
$dbname = "thedomik2_kp";

$conn = new mysqli($dbservername, $dbusername, $dbpassword, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];
    $role = 'QA';
    
    date_default_timezone_set("Africa/Johannesburg");
    $date = date("Y-m-d H:i:s");
    
    if($password === $confirm_password && $password != null && $username != null && $email != null){
        
        $sql = "INSERT INTO users (role, username, email, password, register_date, week_number)
            VALUES ('$role', '$username', '$email', '$password', '$date', '0')";

            if ($conn->query($sql) === TRUE) {
                
                echo "Success";
                
                ?>
                <script>
                    location.replace("/KPsystem/login.php");
                </script>
                <?php
                
            }
            else {
        echo "Error: " . $sql . "<br>" . $conn->error;
        ?>
                <script>
                    location.replace("/KPsystem/register.php");
                </script>
                <?php
            }
    }
    else{
        
    }

$conn->close();

?>