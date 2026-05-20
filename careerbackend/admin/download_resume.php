<?php
require_once '../includes/config.php';
require_once '../includes/auth.php';

requireLogin();

$filename = $_GET['file'] ?? '';

if (empty($filename)) {
    die('Invalid file');
}

// Sanitize filename to prevent directory traversal
$filename = basename($filename);
$filepath = UPLOADS_DIR . '/' . $filename;

if (!file_exists($filepath)) {
    die('File not found');
}

// Get file extension
$ext = strtolower(pathinfo($filename, PATHINFO_EXTENSION));

// Set appropriate content type
$contentTypes = [
    'pdf' => 'application/pdf',
    'doc' => 'application/msword',
    'docx' => 'application/vnd.openxmlformats-officedocument.wordprocessingml.document'
];

$contentType = $contentTypes[$ext] ?? 'application/octet-stream';

// Send file
header('Content-Type: ' . $contentType);
header('Content-Disposition: attachment; filename="' . $filename . '"');
header('Content-Length: ' . filesize($filepath));
header('Cache-Control: no-cache');

readfile($filepath);
exit();
?>
