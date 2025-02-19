<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];
    
    // Replace this email address with your own
    $to = "amilakasun2000@gmail.com";  // Your email address
    
    // Email headers
    $headers = "From: $name <$email>\r\n";
    $headers .= "Reply-To: $email\r\n";
    
    // Send email
    if (mail($to, $subject, $message, $headers)) {
        echo "success";  // Sent successfully
    } else {
        echo "error";    // Sending failed
    }
} else {
    echo "error";  // Invalid request
}
?>
