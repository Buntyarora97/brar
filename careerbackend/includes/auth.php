<?php
// Authentication functions

require_once 'config.php';
require_once 'functions.php';

// Start session if not already started
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Verify login credentials
function verifyLogin($username, $password) {
    if (!file_exists(ADMIN_FILE)) {
        return false;
    }
    
    $admin = readJSON(ADMIN_FILE);
    
    if ($admin['username'] === $username && password_verify($password, $admin['password'])) {
        return true;
    }
    return false;
}

// Check if user is logged in
function isLoggedIn() {
    return isset($_SESSION['admin_logged_in']) && $_SESSION['admin_logged_in'] === true;
}

// Require login (redirect if not logged in)
function requireLogin() {
    if (!isLoggedIn()) {
        header('Location: index.php');
        exit();
    }
}

// Login user
function loginUser($username) {
    $_SESSION['admin_logged_in'] = true;
    $_SESSION['admin_username'] = $username;
    $_SESSION['login_time'] = time();
}

// Logout user
function logoutUser() {
    session_unset();
    session_destroy();
}

// Update admin password
function updateAdminPassword($newPassword) {
    $admin = readJSON(ADMIN_FILE);
    $admin['password'] = password_hash($newPassword, PASSWORD_DEFAULT);
    return writeJSON(ADMIN_FILE, $admin);
}
?>
