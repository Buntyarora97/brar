<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require __DIR__ . '/PHPMailer/src/Exception.php';
require __DIR__ . '/PHPMailer/src/PHPMailer.php';
require __DIR__ . '/PHPMailer/src/SMTP.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // =========================
    // GOOGLE reCAPTCHA VERIFY
    // =========================

    $recaptcha_secret = getenv('RECAPTCHA_SECRET') ?: '6Lcr63AsAAAAAI-q0fjoMjeU9NhYrRZT6Rxd8CV-';

    if (empty($_POST['g-recaptcha-response'])) {
        exit("<script>alert('Please verify captcha.'); window.location.href='/';</script>");
    }

    $verify = file_get_contents(
        "https://www.google.com/recaptcha/api/siteverify?secret="
        . $recaptcha_secret .
        "&response=" . $_POST['g-recaptcha-response']
    );

    $captcha_success = json_decode($verify);

    if (!$captcha_success || !$captcha_success->success) {
        exit("<script>alert('Captcha verification failed.'); window.location.href='/';</script>");
    }

    // =========================
    // HONEYPOT SPAM CHECK
    // =========================

    if (!empty($_POST['website_url'])) {
        exit("<script>alert('Spam detected!'); window.location.href='/';</script>");
    }

    // =========================
    // GET & VALIDATE DATA
    // =========================

    $name = trim($_POST['name'] ?? '');
    $mobile = trim($_POST['mobile'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $age = trim($_POST['age'] ?? '');
    $doctor = trim($_POST['doctor'] ?? '');
    $branch = trim($_POST['branch'] ?? '');
    $description = trim($_POST['description'] ?? '');

    if (empty($name) || empty($mobile) || empty($email) || empty($description) || empty($doctor) || empty($branch)) {
        exit("<script>alert('Required fields missing.'); window.location.href='/';</script>");
    }

    if (!preg_match("/^[a-zA-Z\s]{2,50}$/", $name)) {
        exit("<script>alert('Invalid name format.'); window.location.href='/';</script>");
    }

    if (!preg_match("/^[6-9]\d{9}$/", $mobile)) {
        exit("<script>alert('Invalid mobile number.'); window.location.href='/';</script>");
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        exit("<script>alert('Invalid email format.'); window.location.href='/';</script>");
    }

    if (preg_match('/https?:\/\/|www\./i', $description)) {
        exit("<script>alert('Links are not allowed.'); window.location.href='/';</script>");
    }

    if (strlen($description) < 10) {
        exit("<script>alert('Please enter proper details.'); window.location.href='/';</script>");
    }

    $created_at = date('Y-m-d H:i:s');

    // =========================
    // SAVE TO JSON
    // =========================

    $new_submission = [
        'id' => uniqid(),
        'name' => htmlspecialchars($name),
        'mobile' => htmlspecialchars($mobile),
        'email' => htmlspecialchars($email),
        'age' => htmlspecialchars($age),
        'doctor' => htmlspecialchars($doctor),
        'branch' => htmlspecialchars($branch),
        'description' => htmlspecialchars($description),
        'created_at' => $created_at
    ];

    $data_dir = __DIR__ . '/../data';
    if (!file_exists($data_dir)) {
        mkdir($data_dir, 0755, true);
    }

    $file_path = $data_dir . '/submissions.json';

    $current_data = file_exists($file_path)
        ? json_decode(file_get_contents($file_path), true)
        : [];

    if (!is_array($current_data)) $current_data = [];

    $current_data[] = $new_submission;

    file_put_contents($file_path, json_encode($current_data, JSON_PRETTY_PRINT));

    // =========================
    // SEND EMAIL (GMAIL SMTP)
    // =========================

    $mail = new PHPMailer(true);

    try {

        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'brareyehospitals@gmail.com';
        $mail->Password   = getenv('SMTP_PASSWORD') ?: '';
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port       = 587;

        // SSL Fix (Shared hosting issues fix)
        $mail->SMTPOptions = [
            'ssl' => [
                'verify_peer' => false,
                'verify_peer_name' => false,
                'allow_self_signed' => true
            ]
        ];

        $mail->setFrom('brareyehospitals@gmail.com', 'Brar Eye Hospital');
        $mail->addAddress('brareyehospitals@gmail.com
');

        $mail->isHTML(true);
        $mail->Subject = "New Patient Enquiry - Brar Eye Hospital";

        $mail->Body = "
        <h3>New Patient Enquiry</h3>
        <p><b>Name:</b> {$name}</p>
        <p><b>Mobile:</b> {$mobile}</p>
        <p><b>Email:</b> {$email}</p>
        <p><b>Age:</b> {$age}</p>
        <p><b>Doctor:</b> {$doctor}</p>
        <p><b>Branch:</b> {$branch}</p>
        <p><b>Problem:</b><br>{$description}</p>
        <p><b>Submitted At:</b> {$created_at}</p>
        ";

        $mail->send();

        exit("<script>alert('Thank you! We will contact you shortly.'); window.location.href='/';</script>");

    } catch (Exception $e) {

        exit("Mailer Error: " . $mail->ErrorInfo);
    }
}
?>