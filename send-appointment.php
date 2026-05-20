<?php
// Configuration
$admin_email = "your_hospital_email@example.com"; // Replace with your email
$site_name = "Brar Eye Hospital";

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data and sanitize
    $fname = filter_var($_POST['fname'] ?? '', FILTER_SANITIZE_STRING);
    $lname = filter_var($_POST['lname'] ?? '', FILTER_SANITIZE_STRING);
    $email = filter_var($_POST['email'] ?? '', FILTER_SANITIZE_EMAIL);
    $phone = filter_var($_POST['phone'] ?? '', FILTER_SANITIZE_STRING);
    $subject = filter_var($_POST['subject'] ?? '', FILTER_SANITIZE_STRING);
    $appointment_date = filter_var($_POST['appointment_date'] ?? '', FILTER_SANITIZE_STRING);
    $time_slot = filter_var($_POST['time_slot'] ?? '', FILTER_SANITIZE_STRING);
    $message = filter_var($_POST['message'] ?? '', FILTER_SANITIZE_STRING);
    
    // Validate required fields
    if (empty($fname) || empty($lname) || empty($email) || empty($phone) || 
        empty($subject) || empty($appointment_date) || empty($time_slot)) {
        redirect_with_error("All fields are required");
    }
    
    // Validate email
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        redirect_with_error("Invalid email format");
    }
    
    // Create email content
    $email_subject = "New Appointment Request - $site_name";
    
    $email_body = "
    <html>
    <head>
        <title>New Appointment Request</title>
        <style>
            body { font-family: Arial, sans-serif; line-height: 1.6; color: #333; }
            .container { max-width: 600px; margin: 0 auto; padding: 20px; }
            h2 { color: #03c0b4; border-bottom: 1px solid #ddd; padding-bottom: 10px; }
            table { width: 100%; border-collapse: collapse; margin: 20px 0; }
            th { text-align: left; background-color: #f2f2f2; }
            th, td { padding: 12px; border: 1px solid #ddd; }
            .footer { margin-top: 30px; font-size: 0.9em; color: #777; }
        </style>
    </head>
    <body>
        <div class='container'>
            <h2>New Appointment Request</h2>
            <p>A new appointment has been requested through the website:</p>
            
            <table>
                <tr>
                    <th>Field</th>
                    <th>Information</th>
                </tr>
                <tr>
                    <td>Name</td>
                    <td>$fname $lname</td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td>$email</td>
                </tr>
                <tr>
                    <td>Phone</td>
                    <td>$phone</td>
                </tr>
                <tr>
                    <td>Service</td>
                    <td>$subject</td>
                </tr>
                <tr>
                    <td>Date</td>
                    <td>$appointment_date</td>
                </tr>
                <tr>
                    <td>Time</td>
                    <td>$time_slot</td>
                </tr>
                <tr>
                    <td>Message</td>
                    <td>$message</td>
                </tr>
            </table>
            
            <div class='footer'>
                <p>This is an automated message from your website $site_name.</p>
            </div>
        </div>
    </body>
    </html>
    ";
    
    // Set email headers
    $headers = "From: $site_name <noreply@" . $_SERVER['HTTP_HOST'] . ">\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=UTF-8\r\n";
    
    // Send email
    $mail_success = mail($admin_email, $email_subject, $email_body, $headers);
    
    // Also send confirmation to the client
    $client_subject = "Your Appointment Request - $site_name";
    $client_body = "
    <html>
    <head>
        <title>Appointment Request Confirmation</title>
        <style>
            body { font-family: Arial, sans-serif; line-height: 1.6; color: #333; }
            .container { max-width: 600px; margin: 0 auto; padding: 20px; }
            h2 { color: #03c0b4; border-bottom: 1px solid #ddd; padding-bottom: 10px; }
            p { margin-bottom: 15px; }
            .details { background-color: #f9f9f9; padding: 15px; border-left: 4px solid #03c0b4; margin: 20px 0; }
            .footer { margin-top: 30px; font-size: 0.9em; color: #777; border-top: 1px solid #ddd; padding-top: 15px; }
        </style>
    </head>
    <body>
        <div class='container'>
            <h2>Appointment Request Confirmation</h2>
            <p>Dear $fname,</p>
            <p>Thank you for requesting an appointment with $site_name. We have received your request and will contact you shortly to confirm your appointment time.</p>
            
            <div class='details'>
                <p><strong>Appointment Details:</strong></p>
                <p><strong>Date:</strong> $appointment_date</p>
                <p><strong>Time:</strong> $time_slot</p>
                <p><strong>Service:</strong> $subject</p>
            </div>
            
            <p>If you need to make any changes to your appointment request, please contact us at $admin_email or call our reception.</p>
            
            <p>We look forward to seeing you!</p>
            
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
        // Redirect to thank you page or back to the form with success message
        header("Location: appointment-thankyou.php");
        exit;
    } else {
        // Log the error
        error_log("Failed to send appointment email. Details: " . print_r($_POST, true));
        redirect_with_error("Failed to send appointment. Please try again or contact us directly.");
    }
} else {
    // If not submitted via POST, redirect to the form page
    header("Location: appointment.php");
    exit;
}

// Helper function to redirect with error
function redirect_with_error($error_message) {
    $_SESSION['appointment_error'] = $error_message;
    header("Location: appointment.php");
    exit;
}
?>