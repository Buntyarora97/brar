<?php
session_start();
$error = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Hardcoded credentials as requested by user
    $admin_user = "Nagpal-Hospital";
    $admin_pass = "Nagpal-Hospital97296";

    if ($username === $admin_user && $password === $admin_pass) {
        $_SESSION['admin_logged_in'] = true;
        header('Location: index.php');
        exit;
    } else {
        $error = 'Invalid credentials';
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <style>
        body { display: flex; align-items: center; justify-content: center; height: 100vh; background: #f0f2f5; }
        .login-card { width: 100%; max-width: 400px; padding: 20px; box-shadow: 0 4px 6px rgba(0,0,0,0.1); background: white; border-radius: 8px; }
    </style>
</head>
<body>
    <div class="login-card">
        <h3 class="text-center mb-4">Admin Login</h3>
        <?php if($error): ?>
            <div class="alert alert-danger"><?php echo $error; ?></div>
        <?php endif; ?>
        <form method="POST">
            <div class="mb-3">
                <label>Username</label>
                <input type="text" name="username" class="form-control" required>
            </div>
            <div class="mb-3">
                <label>Password</label>
                <input type="password" name="password" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary w-100">Login</button>
        </form>
    </div>
</body>
</html>