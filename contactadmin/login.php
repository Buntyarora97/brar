<?php
session_start();

$ADMIN_USER = "BrareyeHospital";
$ADMIN_PASS = "Brareye@@1996";

$error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';

    if ($username === $ADMIN_USER && $password === $ADMIN_PASS) {
        session_regenerate_id(true);
        $_SESSION['admin_logged_in'] = true;
        $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
        header("Location: index.php");
        exit;
    } else {
        $error = "Invalid username or password";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login - Brar Eye Hospital</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { 
            background: linear-gradient(135deg, #03c0b4 0%, #029d92 100%);
            display: flex; 
            align-items: center; 
            justify-content: center; 
            min-height: 100vh;
            margin: 0;
        }
        .login-card { 
            width: 100%; 
            max-width: 400px; 
            background: #fff; 
            padding: 40px; 
            border-radius: 15px; 
            box-shadow: 0 15px 50px rgba(0,0,0,0.2); 
        }
        .login-card h3 {
            color: #03c0b4;
            font-weight: 700;
        }
        .btn-primary { 
            background-color: #03c0b4; 
            border-color: #03c0b4; 
        }
        .btn-primary:hover { 
            background-color: #029d92; 
            border-color: #029d92; 
        }
        .form-control:focus {
            border-color: #03c0b4;
            box-shadow: 0 0 0 0.2rem rgba(3, 192, 180, 0.25);
        }
        .back-link {
            color: #03c0b4;
            text-decoration: none;
        }
        .back-link:hover {
            color: #029d92;
        }
    </style>
</head>
<body>
    <div class="login-card">
        <h3 class="text-center mb-4">
            <i class="fas fa-user-shield me-2"></i>Admin Login
        </h3>
        <p class="text-center text-muted mb-4">Brar Eye Hospital</p>
        
        <?php if($error): ?>
            <div class="alert alert-danger"><?php echo htmlspecialchars($error); ?></div>
        <?php endif; ?>
        
        <form method="post">
            <div class="mb-3">
                <label class="form-label">Username</label>
                <input type="text" name="username" class="form-control" required placeholder="Enter username" autocomplete="username">
            </div>
            <div class="mb-3">
                <label class="form-label">Password</label>
                <input type="password" name="password" class="form-control" required placeholder="Enter password" autocomplete="current-password">
            </div>
            <button type="submit" class="btn btn-primary w-100">Login</button>
        </form>
        
        
        <div class="text-center mt-4">
            <a href="../contact-brar-eye-hospital-bathinda.php" class="back-link">
                &larr; Back to Contact Page
            </a>
        </div>
    </div>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</body>
</html>
