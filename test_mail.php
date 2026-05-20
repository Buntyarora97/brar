<?php
$to = "brareyehospitals@gmail.com";
$subject = "Test Mail";
$message = "This is a test.";
$headers = "From: noreply@example.com";

if (function_exists('mail')) {
    if (@mail($to, $subject, $message, $headers)) {
        echo "PHP says: Mail accepted for delivery (Function returned TRUE).";
        echo "\nBUT on Replit/Localhost, this usually doesn't leave the server without SMTP.";
    } else {
        echo "PHP says: Mail function failed (Returned FALSE).";
    }
} else {
    echo "Mail function is not enabled on this server.";
}
?>