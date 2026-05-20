<?php
// Configuration
$admin_email = "your_hospital_email@example.com"; // Replace with your email
$site_name = "Brar Eye Hospital";

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect and sanitize email
    $email = filter_var($_POST['email'] ?? '', FILTER_SANITIZE_EMAIL);
    
    // Validate email
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        // Redirect back with error
        header("Location: " . $_SERVER['HTTP_REFERER'] . "?newsletter_error=invalid_email");
        exit;
    }
    
    // Create email content
    $email_subject = "New Newsletter Subscription - $site_name";
    
    $email_body = "
    <html>
    <head>
        <title>New Newsletter Subscription</title>
    </head>
    <body>
        <h2>New Newsletter Subscription</h2>
        <p>A new user has subscribed to your newsletter:</p>
        <p><strong>Email:</strong> $email</p>
        <p>This is an automated message from your website $site_name.</p>
    </body>
    </html>
    ";
    
    // Set email headers
    $headers = "From: $site_name <noreply@" . $_SERVER['HTTP_HOST'] . ">\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=UTF-8\r\n";
    
    // Send email
    $mail_success = mail($admin_email, $email_subject, $email_body, $headers);
    
    // Also send confirmation to the subscriber
    $client_subject = "Newsletter Subscription Confirmation - $site_name";
    $client_body = "
    <html>
    <head>
        <title>Newsletter Subscription Confirmation</title>
        <style>
            body { font-family: Arial, sans-serif; line-height: 1.6; color: #333; }
            .container { max-width: 600px; margin: 0 auto; padding: 20px; }
            h2 { color: #03c0b4; border-bottom: 1px solid #ddd; padding-bottom: 10px; }
            .footer { margin-top: 30px; font-size: 0.9em; color: #777; }
        </style>
    </head>
    <body>
        <div class='container'>
            <h2>Newsletter Subscription Confirmation</h2>
            <p>Thank you for subscribing to the $site_name newsletter!</p>
            <p>You will now receive regular updates about eye care tips, new treatments, and special offers from our hospital.</p>
            <p>If you did not request this subscription, please disregard this email.</p>
            
            <div class='footer'>
                <p>Best Regards,<br>The $site_name Team</p>
            </div>
        </div>
    </body>
    </html>
    ";
    
    $client_headers = "From: $site_name <noreply@" . $_SERVER['HTTP_HOST'] . ">\r\n";
    $client_headers .= "MIME-Version: 1.0\r\n";
    $client_headers .= "Content-Type: text/html; charset=UTF-8\r\n";
    
    $client_mail_success = mail($email, $client_subject, $client_body, $client_headers);
    
    // Check mail success and redirect
    if ($mail_success) {
        // Redirect with success message
        header("Location: " . $_SERVER['HTTP_REFERER'] . "?newsletter_success=1");
        exit;
    } else {
        // Log the error
        error_log("Failed to send newsletter subscription email. Email: $email");
        header("Location: " . $_SERVER['HTTP_REFERER'] . "?newsletter_error=send_failed");
        exit;
    }
} else {
    // If not submitted via POST, redirect to the home page
    header("Location: index.php");
    exit;
}
?>