<?php

$dbservername = "localhost";
$dbusername = "thedomik2_kpuser";
$dbpassword = "hN3G#kdHJ982mnu8";
$dbname = "thedomik2_kp";

$conn = new mysqli($dbservername, $dbusername, $dbpassword, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$cidz = $_POST['cidz'];
$kpi1 = $_POST['actual_weekly_sales_target'];
$kpi2 = $_POST['actual_wrap_time'];
$kpi3 = $_POST['actual_connected_talk_time'];
$kpi4 = $_POST['actual_calls'];
$kpi5 = $_POST['actual_call_length'];
$kpi6 = $_POST['actual_attendance'];
    
$sql = "UPDATE grading_tool SET actual_weekly_sales_target='$kpi1', actual_wrap_time='$kpi2', actual_connected_talk_time='$kpi3', actual_calls='$kpi4', actual_call_length='$kpi5', actual_attendance='$kpi6' WHERE id='$cidz'";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        //echo "Grading Tool updated successfully.";
        header("Location: /KPsystem/admin/grading-tool");
        exit;
        
    } else {
        //echo "Error updating Grading Tool: " . mysqli_error($conn);
        header("Location: /KPsystem/admin/grading-tool");
        exit;
    }

?>
