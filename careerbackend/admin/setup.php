<?php
require_once '../includes/config.php';
require_once '../includes/functions.php';

// Check if admin already configured
if (file_exists(ADMIN_FILE)) {
    $admin = readJSON(ADMIN_FILE);
    if (isset($admin['setup_complete']) && $admin['setup_complete'] === true) {
        header('Location: index.php');
        exit();
    }
}

$error = '';
$success = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = sanitize($_POST['username'] ?? '');
    $password = $_POST['password'] ?? '';
    $confirm_password = $_POST['confirm_password'] ?? '';
    
    if (empty($username) || empty($password)) {
        $error = 'Username and password are required';
    } elseif (strlen($password) < 8) {
        $error = 'Password must be at least 8 characters long';
    } elseif ($password !== $confirm_password) {
        $error = 'Passwords do not match';
    } else {
        $admin = [
            'username' => $username,
            'password' => password_hash($password, PASSWORD_DEFAULT),
            'setup_complete' => true,
            'created_at' => date('Y-m-d H:i:s')
        ];
        
        if (writeJSON(ADMIN_FILE, $admin)) {
            $success = 'Admin account created successfully! Redirecting to login...';
            header('refresh:2;url=index.php');
        } else {
            $error = 'Error creating admin account. Please check file permissions.';
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>First-Time Setup - Career Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        body {
            background: linear-gradient(135deg, #03c0b4 0%, #f28d52 100%);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            font-family: 'Poppins', sans-serif;
        }
        .setup-container {
            max-width: 500px;
            width: 100%;
        }
        .setup-card {
            background: white;
            border-radius: 15px;
            box-shadow: 0 20px 60px rgba(0,0,0,0.2);
            padding: 40px;
        }
        .setup-header {
            text-align: center;
            margin-bottom: 30px;
        }
        .setup-header h2 {
            color: #03c0b4;
            font-weight: 700;
            margin-bottom: 10px;
        }
        .form-control {
            padding: 12px 20px;
            border-radius: 8px;
            border: 1px solid #ddd;
        }
        .form-control:focus {
            border-color: #03c0b4;
            box-shadow: 0 0 0 0.2rem rgba(3, 192, 180, 0.25);
        }
        .btn-setup {
            background-color: #f28d52;
            border: none;
            padding: 12px;
            font-weight: 600;
            color: white;
            border-radius: 8px;
            width: 100%;
        }
        .btn-setup:hover {
            background-color: #e07d42;
            color: white;
        }
        .security-notice {
            background-color: #fff3cd;
            border: 1px solid #ffc107;
            border-radius: 8px;
            padding: 15px;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <div class="setup-container">
        <div class="setup-card">
            <div class="setup-header">
                <i class="fas fa-shield-alt fa-3x mb-3" style="color: #03c0b4;"></i>
                <h2>First-Time Setup</h2>
                <p>Create your admin account</p>
            </div>
            
            <div class="security-notice">
                <i class="fas fa-exclamation-triangle me-2"></i>
                <strong>Security Notice:</strong> Choose a strong password with at least 8 characters. This account will have full access to manage job positions and applications.
            </div>
            
            <?php if ($error): ?>
                <div class="alert alert-danger">
                    <i class="fas fa-exclamation-circle me-2"></i><?= $error ?>
                </div>
            <?php endif; ?>
            
            <?php if ($success): ?>
                <div class="alert alert-success">
                    <i class="fas fa-check-circle me-2"></i><?= $success ?>
                </div>
            <?php endif; ?>
            
            <form method="POST" action="">
                <div class="mb-3">
                    <label class="form-label">Admin Username *</label>
                    <input type="text" name="username" class="form-control" required autofocus 
                           pattern="[a-zA-Z0-9_]{3,}" 
                           title="Username must be at least 3 characters (letters, numbers, underscore only)">
                </div>
                
                <div class="mb-3">
                    <label class="form-label">Password *</label>
                    <input type="password" name="password" class="form-control" required
                           minlength="8"
                           title="Password must be at least 8 characters">
                    <small class="text-muted">Minimum 8 characters</small>
                </div>
                
                <div class="mb-4">
                    <label class="form-label">Confirm Password *</label>
                    <input type="password" name="confirm_password" class="form-control" required
                           minlength="8">
                </div>
                
                <button type="submit" class="btn btn-setup">
                    <i class="fas fa-check me-2"></i>Complete Setup
                </button>
            </form>
        </div>
    </div>
</body>
</html>
