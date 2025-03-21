<?php

$dbservername = "localhost";
$dbusername = "thedomik2_kpuser";
$dbpassword = "hN3G#kdHJ982mnu8";
$dbname = "thedomik2_kp";

$conn = mysqli_connect($dbservername, $dbusername, $dbpassword, $dbname);

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$name = $_POST["name"];
$email = $_POST["email"];
$message = $_POST["message"];
$sendto = 'kpadmin@arketek.co.za';

date_default_timezone_set("Africa/Johannesburg");
$date = date("Y-m-d h:i:sa");

if($name != null && $email != null && $message != null){
    
    $sql = "INSERT INTO contact (name, email, message, date)
VALUES ('$name', '$email', '$message', '$date')";

if ($conn->query($sql) === TRUE) {
  
  $to = $sendto;
  $subject = "Enquiry from " . $name;
  $mess = $message;
  $headers = "From: " . $email . "\r\n" .
  "CC: " . $email;
  
  mail($to,$subject,$mess,$headers);
  
  
} else {
  //echo "Error";
}
    
}

mysqli_close($conn);

?>