<?php
// Configuration file for Career Backend

// Email configuration
define('ADMIN_EMAIL', 'brareyehospitalkkp@gmail.com');
define('FROM_EMAIL', 'noreply@brareyehospital.com');
define('FROM_NAME', 'Brar Eye Hospital Careers');

// File paths
define('BASE_DIR', dirname(__DIR__));
define('DATA_DIR', BASE_DIR . '/data');
define('UPLOADS_DIR', BASE_DIR . '/uploads/resumes');

// Data files
define('POSITIONS_FILE', DATA_DIR . '/positions.json');
define('APPLICATIONS_FILE', DATA_DIR . '/applications.json');
define('ADMIN_FILE', DATA_DIR . '/admin.json');

// Allowed file types for resume upload
define('ALLOWED_EXTENSIONS', ['pdf', 'doc', 'docx']);
define('MAX_FILE_SIZE', 5242880); // 5MB in bytes

// Session configuration
ini_set('session.cookie_httponly', 1);
ini_set('session.use_only_cookies', 1);
ini_set('session.cookie_secure', 0); // Set to 1 if using HTTPS

// Error reporting
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>
