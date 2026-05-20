<?php
// Helper functions for Career Backend

require_once 'config.php';

// Read JSON file
function readJSON($file) {
    if (!file_exists($file)) {
        return [];
    }
    $content = file_get_contents($file);
    return json_decode($content, true) ?: [];
}

// Write JSON file
function writeJSON($file, $data) {
    $dir = dirname($file);
    if (!is_dir($dir)) {
        mkdir($dir, 0755, true);
    }
    return file_put_contents($file, json_encode($data, JSON_PRETTY_PRINT));
}

// Get all positions
function getAllPositions() {
    return readJSON(POSITIONS_FILE);
}

// Get active positions only
function getActivePositions() {
    $positions = getAllPositions();
    return array_filter($positions, function($pos) {
        return $pos['status'] === 'active';
    });
}

// Get position by ID
function getPositionById($id) {
    $positions = getAllPositions();
    foreach ($positions as $pos) {
        if ($pos['id'] == $id) {
            return $pos;
        }
    }
    return null;
}

// Save position
function savePosition($position) {
    $positions = getAllPositions();
    
    if (isset($position['id'])) {
        // Update existing
        foreach ($positions as $key => $pos) {
            if ($pos['id'] == $position['id']) {
                $positions[$key] = $position;
                return writeJSON(POSITIONS_FILE, $positions);
            }
        }
    } else {
        // Add new
        $position['id'] = generateId();
        $position['created_at'] = date('Y-m-d H:i:s');
        $positions[] = $position;
        return writeJSON(POSITIONS_FILE, $positions);
    }
    
    return false;
}

// Delete position
function deletePosition($id) {
    $positions = getAllPositions();
    $filtered = array_filter($positions, function($pos) use ($id) {
        return $pos['id'] != $id;
    });
    return writeJSON(POSITIONS_FILE, array_values($filtered));
}

// Toggle position status
function togglePositionStatus($id) {
    $positions = getAllPositions();
    foreach ($positions as $key => $pos) {
        if ($pos['id'] == $id) {
            $positions[$key]['status'] = ($pos['status'] === 'active') ? 'paused' : 'active';
            return writeJSON(POSITIONS_FILE, $positions);
        }
    }
    return false;
}

// Get all applications
function getAllApplications() {
    return readJSON(APPLICATIONS_FILE);
}

// Save application
function saveApplication($application) {
    $applications = getAllApplications();
    $application['id'] = generateId();
    $application['submitted_at'] = date('Y-m-d H:i:s');
    $application['status'] = 'new';
    $applications[] = $application;
    return writeJSON(APPLICATIONS_FILE, $applications);
}

// Generate unique ID
function generateId() {
    return uniqid('', true);
}

// Sanitize input
function sanitize($input) {
    return htmlspecialchars(strip_tags(trim($input)), ENT_QUOTES, 'UTF-8');
}

// Validate email
function validateEmail($email) {
    return filter_var($email, FILTER_VALIDATE_EMAIL);
}

// Handle file upload
function handleResumeUpload($file) {
    if (!isset($file['error']) || is_array($file['error'])) {
        return ['success' => false, 'message' => 'Invalid file upload'];
    }
    
    // Check for upload errors
    if ($file['error'] !== UPLOAD_ERR_OK) {
        return ['success' => false, 'message' => 'File upload error'];
    }
    
    // Check file size
    if ($file['size'] > MAX_FILE_SIZE) {
        return ['success' => false, 'message' => 'File size exceeds 5MB limit'];
    }
    
    // Check file extension
    $extension = strtolower(pathinfo($file['name'], PATHINFO_EXTENSION));
    if (!in_array($extension, ALLOWED_EXTENSIONS)) {
        return ['success' => false, 'message' => 'Only PDF, DOC, and DOCX files are allowed'];
    }
    
    // Create uploads directory if not exists
    if (!is_dir(UPLOADS_DIR)) {
        mkdir(UPLOADS_DIR, 0755, true);
    }
    
    // Generate unique filename
    $filename = uniqid('resume_') . '_' . time() . '.' . $extension;
    $filepath = UPLOADS_DIR . '/' . $filename;
    
    // Move uploaded file
    if (move_uploaded_file($file['tmp_name'], $filepath)) {
        return ['success' => true, 'filename' => $filename];
    }
    
    return ['success' => false, 'message' => 'Failed to save uploaded file'];
}

// Send email notification
function sendEmailNotification($to, $subject, $message, $headers = '') {
    if (empty($headers)) {
        $headers = "From: " . FROM_NAME . " <" . FROM_EMAIL . ">\r\n";
        $headers .= "Reply-To: " . FROM_EMAIL . "\r\n";
        $headers .= "Content-Type: text/html; charset=UTF-8\r\n";
    }
    
    return mail($to, $subject, $message, $headers);
}

// Format date for display
function formatDate($dateString) {
    $date = new DateTime($dateString);
    return $date->format('M d, Y g:i A');
}
?>
