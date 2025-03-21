<?php
$dbzservername = "localhost";
$dbzusername = "thedomik2_kpuser";
$dbzpassword = "hN3G#kdHJ982mnu8";
$dbzname = "thedomik2_kp";
    
// Create connection
$conn = mysqli_connect($dbzservername, $dbzusername, $dbzpassword, $dbzname);
    
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
    
    // Get the file information
    $file = $_FILES['audio_file'];
    $file_name = $file['name'];
    $file_tmp = $file['tmp_name'];
    $file_size = $file['size'];
    $file_error = $file['error'];
    
    // Allow only MP3 files
    $file_ext = explode('.', $file_name);
    $file_ext = strtolower(end($file_ext));
    $allowed = array('mp3');
    
    $status = 'QA';
    $qa = $_POST['qa_notes'];
    $week = '1';
    
    // Check for errors
    if(in_array($file_ext, $allowed)){
        if($file_error === 0){
            if($file_size <= 2097152){
                // Generate a unique file name
                $file_name_new = uniqid('', true) . '.' . $file_ext;
                
                // Save the file to the folder
                $file_destination = '/keen-perform/uploads/' . $file_name_new;
                if(move_uploaded_file($file_tmp, $file_destination)){
                    // Save the file name to the database
                    $sql = "INSERT INTO coach (date, week_number, status, qa_upload, qa_username, qa_email, qa_userid, qa_notes, qa_date) VALUES ('$date', '$week', '$status', '$file_name_new', '$username', '$email', '$user_id', '$qa', '$date')";
                    if (mysqli_query($conn, $sql)) {
                        echo "File uploaded and saved to the database successfully.";
                    } else {
                        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                    }
                }
            }
        }
    }
    
    // Close the connection
    mysqli_close($conn);

?>