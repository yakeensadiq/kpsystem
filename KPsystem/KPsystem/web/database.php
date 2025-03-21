<?php
$dbservername = "localhost";
$dbusername = "thedomik2_kpuser";
$dbpassword = "hN3G#kdHJ982mnu8";
$dbname = "thedomik2_kp";

$conn = new mysqli($dbservername, $dbusername, $dbpassword, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

