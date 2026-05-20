<?php
/**
 * Enhanced Email Sending System with Spam Protection
 * Handles all form submissions with comprehensive spam filtering
 */

// Include spam filter and email validator
require_once 'spam-filter.php';
require_once 'email-validator.php';

// Initialize classes
$spamFilter = new SpamFilter();
$emailValidator = new EmailValidator();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get client IP for rate limiting
    $clientIP = $_SERVER['REMOTE_ADDR'] ?? 'unknown';
    
    // Check rate limiting first
    if (!$spamFilter->checkRateLimit($clientIP)) {
        http_response_code(429);
        echo "<script>
            alert('Too many requests. Please wait before submitting again.');
            history.back();
        </script>";
        exit;
    }
    
    // Get all submitted form data
    $form_data = $_POST;
    
    // Basic CSRF protection (you should implement proper CSRF tokens)
    if (empty($form_data) || count($form_data) > 20) {
        http_response_code(400);
        echo "<script>
            alert('Invalid form submission.');
            history.back();
        </script>";
        exit;
    }
    
    // Set recipient email
    $to = "brareyehospitals@gmail.com";
    
    // Determine form type and process accordingly
    if (isset($form_data['username']) && isset($form_data['message'])) {
        // Contact form processing
        $name = $spamFilter->sanitizeInput($form_data['username']);
        $email = $spamFilter->sanitizeInput($form_data['email']);
        $phone = isset($form_data['phone']) ? $spamFilter->sanitizeInput($form_data['phone']) : '';
        $subject = isset($form_data['subject']) ? $spamFilter->sanitizeInput($form_data['subject']) : 'Contact Form';
        $message = $spamFilter->sanitizeInput($form_data['message']);
        
        // Validate email
        $emailValidation = $emailValidator->validateEmail($email);
        if (!$emailValidation['valid']) {
            $suggestion = $emailValidator->suggestCorrection($email);
            $errorMsg = 'Invalid email address';
            if ($suggestion) {
                $errorMsg .= ". Did you mean: $suggestion?";
            }
            echo "<script>
                alert('$errorMsg');
                history.back();
            </script>";
            exit;
        }
        
        // Check for spam in message and subject
        if ($spamFilter->isSpam($message . ' ' . $subject, $email, $name)) {
            $spamFilter->logSpamAttempt($form_data, 'Contact form spam detected');
            echo "<script>
                alert('Your message appears to be spam and cannot be processed.');
                history.back();
            </script>";
            exit;
        }
        
        // Prepare email content
        $email_subject = "Website Contact: $subject";
        $email_body = "Contact Form Submission:\n\n";
        $email_body .= "Name: $name\n";
        $email_body .= "Email: $email\n";
        $email_body .= "Phone: $phone\n";
        $email_body .= "Subject: $subject\n";
        $email_body .= "Message:\n$message\n";
        
        $redirect_page = 'contact-brar-eye-hospital-bathinda.php?success=1';
        
    } else if (isset($form_data['form_type']) && $form_data['form_type'] == 'newsletter') {
        // Newsletter form processing
        $email = $spamFilter->sanitizeInput($form_data['email']);
        
        // Validate email
        $emailValidation = $emailValidator->validateEmail($email);
        if (!$emailValidation['valid']) {
            echo "<script>
                alert('Please enter a valid email address.');
                history.back();
            </script>";
            exit;
        }
        
        $email_subject = "Newsletter Subscription";
        $email_body = "New Newsletter Subscription:\n\n";
        $email_body .= "Email: $email\n";
        
        $redirect_page = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] . '?success=1' : 'index.php?success=1';
        
    } else if (isset($form_data['appointment_name'])) {
        // Appointment form processing
        $name = $spamFilter->sanitizeInput($form_data['appointment_name']);
        $email = isset($form_data['appointment_email']) ? $spamFilter->sanitizeInput($form_data['appointment_email']) : '';
        $phone = isset($form_data['appointment_phone']) ? $spamFilter->sanitizeInput($form_data['appointment_phone']) : '';
        $service = isset($form_data['appointment_service']) ? $spamFilter->sanitizeInput($form_data['appointment_service']) : '';
        $date = isset($form_data['appointment_date']) ? $spamFilter->sanitizeInput($form_data['appointment_date']) : '';
        $time = isset($form_data['appointment_time']) ? $spamFilter->sanitizeInput($form_data['appointment_time']) : '';
        $message = isset($form_data['message']) ? $spamFilter->sanitizeInput($form_data['message']) : '';
        
        // Validate email if provided
        if (!empty($email)) {
            $emailValidation = $emailValidator->validateEmail($email);
            if (!$emailValidation['valid']) {
                echo "<script>
                    alert('Please enter a valid email address.');
                    history.back();
                </script>";
                exit;
            }
        }
        
        // Check for spam
        if ($spamFilter->isSpam($message . ' ' . $service, $email, $name)) {
            $spamFilter->logSpamAttempt($form_data, 'Appointment form spam detected');
            echo "<script>
                alert('Your appointment request appears to be spam and cannot be processed.');
                history.back();
            </script>";
            exit;
        }
        
        $email_subject = "New Appointment Request";
        $email_body = "Appointment Form Submission:\n\n";
        $email_body .= "Name: $name\n";
        $email_body .= "Email: $email\n";
        $email_body .= "Phone: $phone\n";
        $email_body .= "Service: $service\n";
        $email_body .= "Date: $date\n";
        $email_body .= "Time: $time\n";
        $email_body .= "Message:\n$message\n";
        
        $redirect_page = 'appointment.php?success=1';
        
    } else {
        // Unknown form type - be cautious
        $spamFilter->logSpamAttempt($form_data, 'Unknown form type submitted');
        echo "<script>
            alert('Invalid form submission.');
            history.back();
        </script>";
        exit;
    }
    
    // Add timestamp and IP to email body
    $timestamp_info = "Submission Time: " . date('Y-m-d H:i:s') . "\n";
    $timestamp_info .= "IP Address: $clientIP\n";
    $timestamp_info .= "User Agent: " . ($_SERVER['HTTP_USER_AGENT'] ?? 'Unknown') . "\n\n";
    $email_body = $timestamp_info . $email_body;
    
    // Enhanced email headers for better delivery
    $headers = "MIME-Version: 1.0\r\n";
    $headers .= "Content-type: text/plain; charset=UTF-8\r\n";
    $headers .= "From: Brar Eye Hospital <noreply@" . $_SERVER['HTTP_HOST'] . ">\r\n";
    
    if (isset($email) && !empty($email)) {
        $headers .= "Reply-To: $email\r\n";
    }
    
    $headers .= "X-Mailer: PHP/" . phpversion() . "\r\n";
    $headers .= "X-Priority: 1\r\n";
    $headers .= "Return-Path: noreply@" . $_SERVER['HTTP_HOST'] . "\r\n";
    
    // Try to send email with error handling
    $mail_sent = false;
    try {
        $mail_sent = mail($to, $email_subject, $email_body, $headers);
    } catch (Exception $e) {
        error_log("Mail sending failed: " . $e->getMessage());
    }
    
    // Save to backup file with enhanced logging
    $backup_file = 'form_submissions_' . date('Y-m') . '.txt';
    $backup_content = "===========================================\n";
    $backup_content .= "DATE: " . date('Y-m-d H:i:s') . "\n";
    $backup_content .= "IP: $clientIP\n";
    $backup_content .= "EMAIL_SENT: " . ($mail_sent ? "YES" : "NO") . "\n";
    $backup_content .= "SUBJECT: $email_subject\n";
    $backup_content .= $email_body . "\n";
    $backup_content .= "===========================================\n\n";
    
    @file_put_contents($backup_file, $backup_content, FILE_APPEND | LOCK_EX);
    
    // Create admin page if it doesn't exist
    if (!file_exists('view_forms.php')) {
        $admin_page = '<?php
// Secure admin page to view form submissions
session_start();

$password = getenv('ADMIN_PASSWORD') ?: 'brarhospital2024';

if (isset($_POST["password"]) && $_POST["password"] == $password) {
    $_SESSION["admin_login"] = true;
}

if (isset($_GET["logout"])) {
    unset($_SESSION["admin_login"]);
    header("Location: view_forms.php");
    exit;
}

if (!isset($_SESSION["admin_login"])) {
    echo "<!DOCTYPE html><html><head><title>Admin Login</title></head><body>";
    echo "<h1>Admin Login</h1>";
    echo "<form method=\'post\'>";
    echo "Password: <input type=\'password\' name=\'password\' required>";
    echo "<input type=\'submit\' value=\'Login\'>";
    echo "</form></body></html>";
    exit;
}

echo "<!DOCTYPE html><html><head><title>Form Submissions</title></head><body>";
echo "<h1>Form Submissions</h1>";
echo "<p><a href=\'view_forms.php?logout=1\'>Logout</a></p>";

// Show monthly files
$monthly_files = glob("form_submissions_*.txt");
rsort($monthly_files);

if (count($monthly_files) > 0) {
    echo "<h2>Monthly Submissions</h2>";
    foreach ($monthly_files as $file) {
        echo "<h3>" . basename($file) . "</h3>";
        echo "<div style=\'background:#f8f8f8;padding:10px;margin:10px;border:1px solid #ddd;max-height:400px;overflow-y:scroll;\'>";
        echo "<pre>" . htmlspecialchars(file_get_contents($file)) . "</pre>";
        echo "</div>";
    }
}

// Show spam log
if (file_exists("spam_log.txt")) {
    echo "<h2>Spam Attempts</h2>";
    echo "<div style=\'background:#ffe6e6;padding:10px;margin:10px;border:1px solid #ff9999;max-height:300px;overflow-y:scroll;\'>";
    echo "<pre>" . htmlspecialchars(file_get_contents("spam_log.txt")) . "</pre>";
    echo "</div>";
}

echo "</body></html>";
?>';
        
        @file_put_contents('view_forms.php', $admin_page);
    }
    
    // Success response
    if ($mail_sent) {
        echo "<script>
            alert('Thank you for your submission. We will contact you shortly!');
            window.location.href = '$redirect_page';
        </script>";
    } else {
        echo "<script>
            alert('Your message has been received and saved. We will contact you shortly!');
            window.location.href = '$redirect_page';
        </script>";
    }
    exit;
    
} else {
    // Direct access without POST - redirect to home
    header('Location: index.php');
    exit;
}
?>
