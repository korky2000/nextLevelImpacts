<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = "kroher@nextlevelimpacts.com";
    $subject = "Diagnostics Page Resume Submission";
    $firstName = $_POST["first-name"];
    $lastName = $_POST["last-name"];
    
    $message = "First Name: $firstName\n";
    $message .= "Last Name: $lastName\n";
    
    // File upload handling
    $file = $_FILES["resume"];
    $file_name = $file["name"];
    $file_tmp = $file["tmp_name"];
    
    if (move_uploaded_file($file_tmp, "uploads/" . $file_name)) {
        // Send email
        //replace with node.js eventually

        $headers = "From: webmaster@nextlevelimpact.com"; // Replace with a valid email address
        $headers .= "\r\nMIME-Version: 1.0";
        $headers .= "\r\nContent-Type: text/html; charset=ISO-8859-1";
        
        mail($to, $subject, $message, $headers);
        
        echo "File uploaded successfully. Email sent to $to.";
    } else {
        echo "Failed to upload file. Please try again.";
    }
}
?>
