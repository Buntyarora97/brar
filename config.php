<?php
/**
 * Configuration file for Brar Eye Hospital Contact System
 */

// Hospital Email Configuration
define('HOSPITAL_EMAIL', 'brareyehospitals@gmail.com');
define('HOSPITAL_NAME', 'Brar Eye Hospital');

// Google Apps Script Configuration
define('GOOGLE_SCRIPT_URL', 'https://script.google.com/macros/s/AKfycbx4snXOIzKQPWA717f7q8S9X39Bzmft4qR_pTr7jsrod_VilfAn_gK3HoxD4ojr5uUnGg/exec ');

// Spam Protection Settings
define('RATE_LIMIT_WINDOW', 300); // 5 minutes
define('RATE_LIMIT_ATTEMPTS', 3);
define('SPAM_SCORE_THRESHOLD', 5);

// Admin Panel Configuration
define('ADMIN_PASSWORD', 'brarhospital2024'); // Change this password!

// File Paths
define('SUBMISSIONS_DIR', 'submissions/');
define('LOGS_DIR', 'logs/');

// Create directories if they don't exist
if (!file_exists(SUBMISSIONS_DIR)) {
    mkdir(SUBMISSIONS_DIR, 0755, true);
}

if (!file_exists(LOGS_DIR)) {
    mkdir(LOGS_DIR, 0755, true);
}

// Timezone
date_default_timezone_set('Asia/Kolkata');

// Error reporting (disable in production)
error_reporting(E_ALL);
ini_set('display_errors', 0);
ini_set('log_errors', 1);
ini_set('error_log', LOGS_DIR . 'php_errors.log');
?>
