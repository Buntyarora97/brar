<?php
/**
 * Simple Contact Form Handler with Advanced Spam Protection
 * Brar Eye Hospital - brareyehospitals@gmail.com
 */

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // Get form data
    $name = trim($_POST['username'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $phone = trim($_POST['phone'] ?? '');
    $subject = trim($_POST['subject'] ?? 'Contact Form');
    $message = trim($_POST['message'] ?? '');
    
    // Basic validation
    if (empty($name) || empty($email) || empty($message)) {
        echo "<script>
            alert('कृपया सभी आवश्यक फील्ड भरें।');
            history.back();
        </script>";
        exit;
    }
    
    // Email validation
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "<script>
            alert('कृपया सही email address डालें।');
            history.back();
        </script>";
        exit;
    }
    
    // Advanced Spam Detection
    $spam_keywords = [
        // English spam words
        'loan', 'free money', 'winner', 'prize', 'offer', 'click here', 
        'buy now', 'urgent', 'limited time', 'guarantee', 'risk free',
        'make money', 'earn money', 'work from home', 'no experience',
        'viagra', 'casino', 'gambling', 'bitcoin', 'cryptocurrency',
        'seo services', 'website ranking', 'backlinks', 'followers',
        'dating', 'singles', 'hookup', 'webcam', 'adult',
        
        // Hindi/Punjabi spam words
        'paise kamao', 'jaldi paisa', 'free paisa', 'loot', 'offer',
        'guaranteed income', 'easy money', 'instant money'
    ];
    
    // Check for spam in message and subject
    $content_to_check = strtolower($name . ' ' . $subject . ' ' . $message);
    $is_spam = false;
    
    foreach ($spam_keywords as $keyword) {
        if (strpos($content_to_check, strtolower($keyword)) !== false) {
            $is_spam = true;
            break;
        }
    }
    
    // Additional spam checks
    if (!$is_spam) {
        // Check for excessive caps
        if (preg_match('/[A-Z]{10,}/', $message)) {
            $is_spam = true;
        }
        
        // Check for multiple exclamation marks
        if (preg_match('/!{3,}/', $message)) {
            $is_spam = true;
        }
        
        // Check for URLs in message
        if (preg_match('/https?:\/\/[^\s]+/', $message) || preg_match('/www\.[^\s]+/', $message)) {
            $is_spam = true;
        }
        
        // Check for email addresses in message
        if (preg_match('/[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}/', $message)) {
            $is_spam = true;
        }
        
        // Check message length
        if (strlen($message) < 10 || strlen($message) > 2000) {
            $is_spam = true;
        }
        
        // Check for numbers in name
        if (preg_match('/\d/', $name)) {
            $is_spam = true;
        }
        
        // Check for disposable email domains
        $disposable_domains = [
            '10minutemail.com', 'tempmail.org', 'guerrillamail.com',
            'mailinator.com', 'yopmail.com', 'temp-mail.org'
        ];
        
        $email_domain = substr(strrchr($email, "@"), 1);
        if (in_array(strtolower($email_domain), $disposable_domains)) {
            $is_spam = true;
        }
    }
    
    // If spam detected, don't tell the user - just redirect
    if ($is_spam) {
        // Log spam attempt
        $spam_log = "SPAM DETECTED: " . date('Y-m-d H:i:s') . "\n";
        $spam_log .= "Name: $name\n";
        $spam_log .= "Email: $email\n";
        $spam_log .= "Message: " . substr($message, 0, 100) . "\n";
        $spam_log .= "IP: " . ($_SERVER['REMOTE_ADDR'] ?? 'Unknown') . "\n\n";
        
        @file_put_contents('spam_attempts.log', $spam_log, FILE_APPEND);
        
        // Redirect without showing error to spammer
        echo "<script>
            alert('आपका संदेश भेज दिया गया है। हम जल्दी ही आपसे संपर्क करेंगे।');
            window.location.href = 'contact-brar-eye-hospital-bathinda.php';
        </script>";
        exit;
    }
    
    // Sanitize data for email
    $name = htmlspecialchars($name);
    $email = htmlspecialchars($email);
    $phone = htmlspecialchars($phone);
    $subject = htmlspecialchars($subject);
    $message = htmlspecialchars($message);
    
    // Email to hospital
    $to = "brareyehospitals@gmail.com";
    $email_subject = "Website Contact: $subject";
    
    $email_body = "नया संपर्क फॉर्म संदेश:\n\n";
    $email_body .= "नाम: $name\n";
    $email_body .= "ईमेल: $email\n";
    $email_body .= "फोन: $phone\n";
    $email_body .= "विषय: $subject\n\n";
    $email_body .= "संदेश:\n$message\n\n";
    $email_body .= "समय: " . date('d/m/Y H:i:s') . "\n";
    $email_body .= "IP Address: " . ($_SERVER['REMOTE_ADDR'] ?? 'Unknown') . "\n";
    
    // Email headers
    $headers = "From: Brar Eye Hospital <noreply@" . $_SERVER['HTTP_HOST'] . ">\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";
    $headers .= "X-Mailer: PHP/" . phpversion() . "\r\n";
    
    // Try to send email
    $mail_sent = false;
    try {
        $mail_sent = mail($to, $email_subject, $email_body, $headers);
    } catch (Exception $e) {
        error_log("Mail failed: " . $e->getMessage());
    }
    
    // Alternative email method if first fails
    if (!$mail_sent) {
        $simple_headers = "From: noreply@" . $_SERVER['HTTP_HOST'] . "\r\n";
        $simple_headers .= "Reply-To: $email\r\n";
        try {
            $mail_sent = mail($to, $email_subject, $email_body, $simple_headers);
        } catch (Exception $e) {
            error_log("Second mail attempt failed: " . $e->getMessage());
        }
    }
    
    // Save to backup file regardless of email success
    $backup_file = 'contact_forms_' . date('Y-m') . '.txt';
    $backup_content = "==========================================\n";
    $backup_content .= "Date: " . date('d/m/Y H:i:s') . "\n";
    $backup_content .= "Name: $name\n";
    $backup_content .= "Email: $email\n";
    $backup_content .= "Phone: $phone\n";
    $backup_content .= "Subject: $subject\n";
    $backup_content .= "Message: $message\n";
    $backup_content .= "Email Sent: " . ($mail_sent ? 'Yes' : 'No') . "\n";
    $backup_content .= "IP: " . ($_SERVER['REMOTE_ADDR'] ?? 'Unknown') . "\n";
    $backup_content .= "==========================================\n\n";
    
    @file_put_contents($backup_file, $backup_content, FILE_APPEND);
    
    // Google Sheets submission (optional)
    $google_script_url = getenv('GOOGLE_SCRIPT_URL') ?: '';
    
    $sheets_data = json_encode([
        'username' => $name,
        'email' => $email,
        'phone' => $phone,
        'subject' => $subject,
        'message' => $message,
        'timestamp' => date('Y-m-d H:i:s'),
        'ip' => $_SERVER['REMOTE_ADDR'] ?? 'Unknown'
    ]);
    
    // Try to send to Google Sheets
    $context = stream_context_create([
        'http' => [
            'method' => 'POST',
            'header' => 'Content-Type: application/json',
            'content' => $sheets_data,
            'timeout' => 10
        ]
    ]);
    
    @file_get_contents($google_script_url, false, $context);
    
    // Success message
    echo "<script>
        alert('धन्यवाद! आपका संदेश सफलतापूर्वक भेज दिया गया है। हम जल्दी ही आपसे संपर्क करेंगे।');
        window.location.href = 'contact-brar-eye-hospital-bathinda.php?success=1';
    </script>";
    
} else {
    // If accessed directly, redirect to contact page
    header('Location: contact-brar-eye-hospital-bathinda.php');
    exit;
}
?>