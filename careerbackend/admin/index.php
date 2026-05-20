<?php
require_once '../includes/config.php';
require_once '../includes/auth.php';
require_once '../includes/functions.php';

// Redirect to setup if not configured
if (!file_exists(ADMIN_FILE)) {
    header('Location: setup.php');
    exit();
}

$admin = readJSON(ADMIN_FILE);
if (!isset($admin['setup_complete']) || $admin['setup_complete'] !== true) {
    header('Location: setup.php');
    exit();
}

// Redirect if already logged in
if (isLoggedIn()) {
    header('Location: dashboard.php');
    exit();
}

$error = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = sanitize($_POST['username'] ?? '');
    $password = $_POST['password'] ?? '';
    
    if (verifyLogin($username, $password)) {
        loginUser($username);
        header('Location: dashboard.php');
        exit();
    } else {
        $error = 'Invalid username or password';
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login - Career Management</title>
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
        .login-container {
            max-width: 450px;
            width: 100%;
        }
        .login-card {
            background: white;
            border-radius: 15px;
            box-shadow: 0 20px 60px rgba(0,0,0,0.2);
            padding: 40px;
        }
        .login-header {
            text-align: center;
            margin-bottom: 30px;
        }
        .login-header h2 {
            color: #03c0b4;
            font-weight: 700;
            margin-bottom: 10px;
        }
        .login-header p {
            color: #666;
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
        .btn-login {
            background-color: #f28d52;
            border: none;
            padding: 12px;
            font-weight: 600;
            color: white;
            border-radius: 8px;
            width: 100%;
        }
        .btn-login:hover {
            background-color: #e07d42;
            color: white;
        }
        .alert {
            border-radius: 8px;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <div class="login-card">
            <div class="login-header">
                <i class="fas fa-user-shield fa-3x mb-3" style="color: #03c0b4;"></i>
                <h2>Career Admin Panel</h2>
                <p>Brar Eye Hospital</p>
            </div>
            
            <?php if ($error): ?>
                <div class="alert alert-danger">
                    <i class="fas fa-exclamation-circle me-2"></i><?= $error ?>
                </div>
            <?php endif; ?>
            
            <form method="POST" action="">
                <div class="mb-3">
                    <label class="form-label">Username</label>
                    <div class="input-group">
                        <span class="input-group-text"><i class="fas fa-user"></i></span>
                        <input type="text" name="username" class="form-control" required autofocus>
                    </div>
                </div>
                
                <div class="mb-4">
                    <label class="form-label">Password</label>
                    <div class="input-group">
                        <span class="input-group-text"><i class="fas fa-lock"></i></span>
                        <input type="password" name="password" class="form-control" required>
                    </div>
                </div>
                
                <button type="submit" class="btn btn-login">
                    <i class="fas fa-sign-in-alt me-2"></i>Login
                </button>
            </form>
            
        </div>
    </div>
</body>
</html>
