<?php
/**
 * Contact Form Handler for Brar Eye Hospital
 * Sends email to brareyehospitals@gmail.com and saves to admin panel
 */

session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $clientIP = $_SERVER['REMOTE_ADDR'] ?? 'unknown';
    
    if (!empty($_POST['website_url'])) {
        header('Location: contact-brar-eye-hospital-bathinda.php?success=1');
        exit;
    }
    
    $rate_file = __DIR__ . '/rate_limit.json';
    $rate_data = file_exists($rate_file) ? json_decode(file_get_contents($rate_file), true) : [];
    $current_time = time();
    
    foreach ($rate_data as $ip => $timestamps) {
        $rate_data[$ip] = array_filter($timestamps, function($t) use ($current_time) {
            return ($current_time - $t) < 300;
        });
        if (empty($rate_data[$ip])) unset($rate_data[$ip]);
    }
    
    if (isset($rate_data[$clientIP]) && count($rate_data[$clientIP]) >= 5) {
        header('Location: contact-brar-eye-hospital-bathinda.php?error=1&msg=' . urlencode('Too many submissions. Please wait a few minutes.'));
        exit;
    }
    
    $name = isset($_POST['username']) ? trim(htmlspecialchars($_POST['username'])) : '';
    $email = isset($_POST['email']) ? trim(htmlspecialchars($_POST['email'])) : '';
    $phone = isset($_POST['phone']) ? trim(htmlspecialchars($_POST['phone'])) : '';
    $subject = isset($_POST['subject']) ? trim(htmlspecialchars($_POST['subject'])) : '';
    $message = isset($_POST['message']) ? trim(htmlspecialchars($_POST['message'])) : '';
    
    if (empty($name) || empty($email) || empty($phone) || empty($subject) || empty($message)) {
        header('Location: contact-brar-eye-hospital-bathinda.php?error=1&msg=' . urlencode('Please fill in all required fields.'));
        exit;
    }
    
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header('Location: contact-brar-eye-hospital-bathinda.php?error=1&msg=' . urlencode('Please enter a valid email address.'));
        exit;
    }
    
    if (!preg_match('/^[0-9]{10,15}$/', $phone)) {
        header('Location: contact-brar-eye-hospital-bathinda.php?error=1&msg=' . urlencode('Please enter a valid phone number (10-15 digits).'));
        exit;
    }
    
    if (strlen($subject) < 3 || strlen($subject) > 100) {
        header('Location: contact-brar-eye-hospital-bathinda.php?error=1&msg=' . urlencode('Subject must be between 3 and 100 characters.'));
        exit;
    }
    
    if (!isset($rate_data[$clientIP])) {
        $rate_data[$clientIP] = [];
    }
    $rate_data[$clientIP][] = $current_time;
    @file_put_contents($rate_file, json_encode($rate_data), LOCK_EX);
    
    $to = "brareyehospitals@gmail.com";
    
    $email_subject = "Website Contact: $subject";
    $email_body = "New Contact Form Submission\n";
    $email_body .= "=================================\n\n";
    $email_body .= "Name: $name\n";
    $email_body .= "Email: $email\n";
    $email_body .= "Phone: $phone\n";
    $email_body .= "Subject: $subject\n\n";
    $email_body .= "Message:\n$message\n\n";
    $email_body .= "=================================\n";
    $email_body .= "Submission Details:\n";
    $email_body .= "Time: " . date('Y-m-d H:i:s') . "\n";
    $email_body .= "IP Address: $clientIP\n";
    
    $headers = array();
    $headers[] = "MIME-Version: 1.0";
    $headers[] = "Content-type: text/plain; charset=UTF-8";
    $headers[] = "From: Brar Eye Hospital <noreply@brareyehospital.com>";
    $headers[] = "Reply-To: $email";
    $headers[] = "X-Mailer: PHP/" . phpversion();
    
    $mail_sent = false;
    try {
        $mail_sent = @mail($to, $email_subject, $email_body, implode("\r\n", $headers));
    } catch (Exception $e) {
        error_log("Mail sending failed: " . $e->getMessage());
    }
    
    $enquiry = array(
        'id' => uniqid(),
        'name' => $name,
        'email' => $email,
        'phone' => $phone,
        'subject' => $subject,
        'message' => $message,
        'date' => date('Y-m-d H:i:s'),
        'status' => 'new',
        'ip' => $clientIP
    );
    
    $DATA_FILE = __DIR__ . '/contactadmin/enquiries.json';
    
    $enquiries = [];
    if (file_exists($DATA_FILE)) {
        $json_content = file_get_contents($DATA_FILE);
        if ($json_content) {
            $enquiries = json_decode($json_content, true) ?: [];
        }
    }
    
    array_unshift($enquiries, $enquiry);
    
    $dir = dirname($DATA_FILE);
    if (!is_dir($dir)) {
        mkdir($dir, 0755, true);
    }
    
    file_put_contents($DATA_FILE, json_encode($enquiries, JSON_PRETTY_PRINT), LOCK_EX);
    
    $backup_file = __DIR__ . '/contact_submissions_' . date('Y-m') . '.txt';
    $backup_content = "===========================================\n";
    $backup_content .= "SUBMISSION TIME: " . date('Y-m-d H:i:s') . "\n";
    $backup_content .= "IP ADDRESS: $clientIP\n";
    $backup_content .= "EMAIL SENT: " . ($mail_sent ? "SUCCESS" : "ATTEMPTED") . "\n";
    $backup_content .= "-------------------------------------------\n";
    $backup_content .= "NAME: $name\n";
    $backup_content .= "EMAIL: $email\n";
    $backup_content .= "PHONE: $phone\n";
    $backup_content .= "SUBJECT: $subject\n";
    $backup_content .= "MESSAGE:\n$message\n";
    $backup_content .= "===========================================\n\n";
    
    @file_put_contents($backup_file, $backup_content, FILE_APPEND | LOCK_EX);
    
    header('Location: contact-brar-eye-hospital-bathinda.php?success=1');
    exit;
    
} else {
    header('Location: contact-brar-eye-hospital-bathinda.php');
    exit;
}
?>
