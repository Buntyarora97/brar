<?php
require_once 'includes/config.php';
require_once 'includes/functions.php';

header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    echo json_encode(['success' => false, 'message' => 'Invalid request method']);
    exit();
}

$errors = [];

// Validate required fields
$name = sanitize($_POST['name'] ?? '');
$email = sanitize($_POST['email'] ?? '');
$phone = sanitize($_POST['phone'] ?? '');
$position = sanitize($_POST['position'] ?? '');
$message = sanitize($_POST['message'] ?? '');

if (empty($name)) {
    $errors[] = 'Name is required';
}

if (empty($email) || !validateEmail($email)) {
    $errors[] = 'Valid email is required';
}

if (empty($phone)) {
    $errors[] = 'Phone number is required';
}

if (empty($position)) {
    $errors[] = 'Position is required';
}

// Handle resume upload
$resumeFilename = '';
if (isset($_FILES['resume']) && $_FILES['resume']['error'] !== UPLOAD_ERR_NO_FILE) {
    $uploadResult = handleResumeUpload($_FILES['resume']);
    if (!$uploadResult['success']) {
        $errors[] = $uploadResult['message'];
    } else {
        $resumeFilename = $uploadResult['filename'];
    }
}

if (!empty($errors)) {
    echo json_encode(['success' => false, 'message' => implode(', ', $errors)]);
    exit();
}

// Save application
$application = [
    'name' => $name,
    'email' => $email,
    'phone' => $phone,
    'position' => $position,
    'message' => $message,
    'resume' => $resumeFilename
];

if (saveApplication($application)) {
    // Send email notification
    $emailSubject = 'New Job Application: ' . $position;
    $emailBody = "
    <html>
    <head>
        <style>
            body { font-family: Arial, sans-serif; }
            .container { padding: 20px; }
            .header { background-color: #03c0b4; color: white; padding: 20px; text-align: center; }
            .content { padding: 20px; background-color: #f9f9f9; }
            .field { margin-bottom: 15px; }
            .label { font-weight: bold; color: #333; }
            .value { color: #666; }
        </style>
    </head>
    <body>
        <div class='container'>
            <div class='header'>
                <h2>New Job Application Received</h2>
            </div>
            <div class='content'>
                <div class='field'>
                    <span class='label'>Position Applied For:</span>
                    <span class='value'>{$position}</span>
                </div>
                <div class='field'>
                    <span class='label'>Applicant Name:</span>
                    <span class='value'>{$name}</span>
                </div>
                <div class='field'>
                    <span class='label'>Email:</span>
                    <span class='value'>{$email}</span>
                </div>
                <div class='field'>
                    <span class='label'>Phone:</span>
                    <span class='value'>{$phone}</span>
                </div>
                <div class='field'>
                    <span class='label'>Message:</span>
                    <div class='value'>" . nl2br($message) . "</div>
                </div>
                <div class='field'>
                    <span class='label'>Resume:</span>
                    <span class='value'>" . ($resumeFilename ? 'Attached - ' . $resumeFilename : 'Not provided') . "</span>
                </div>
                <div class='field'>
                    <span class='label'>Submitted:</span>
                    <span class='value'>" . date('F d, Y g:i A') . "</span>
                </div>
            </div>
        </div>
    </body>
    </html>
    ";
    
    sendEmailNotification(ADMIN_EMAIL, $emailSubject, $emailBody);
    
    echo json_encode([
        'success' => true, 
        'message' => 'Application submitted successfully! We will contact you soon.'
    ]);
} else {
    echo json_encode([
        'success' => false, 
        'message' => 'Error saving application. Please try again.'
    ]);
}
?>
