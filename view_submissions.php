<?php
// Save as view_submissions.php
// Password protect this page - only you should see it
$username = "sahil";
$password = "sahil";  // Change this to a secure password

session_start();

// Check if user is already logged in
if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
    // Check if login form was submitted
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['username']) && isset($_POST['password'])) {
        if ($_POST['username'] === $username && $_POST['password'] === $password) {
            $_SESSION['logged_in'] = true;
        } else {
            $error = "Invalid credentials";
        }
    }
    
    // Show login form if not logged in
    if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
        ?>
        <!DOCTYPE html>
        <html>
        <head>
            <title>Admin Login</title>
            <style>
                body { font-family: Arial, sans-serif; margin: 0; padding: 20px; background: #f5f5f5; }
                .login-form { max-width: 400px; margin: 100px auto; background: white; padding: 20px; border-radius: 5px; box-shadow: 0 2px 10px rgba(0,0,0,0.1); }
                h2 { margin-top: 0; color: #333; }
                input[type="text"], input[type="password"] { width: 100%; padding: 10px; margin: 8px 0; box-sizing: border-box; border: 1px solid #ddd; border-radius: 4px; }
                input[type="submit"] { background-color: #03c0b4; color: white; padding: 12px 20px; border: none; border-radius: 4px; cursor: pointer; width: 100%; }
                input[type="submit"]:hover { background-color: #01a99f; }
                .error { color: red; margin-bottom: 15px; }
            </style>
        </head>
        <body>
            <div class="login-form">
                <h2>Admin Login</h2>
                <?php if(isset($error)): ?>
                    <div class="error"><?php echo $error; ?></div>
                <?php endif; ?>
                <form method="post" action="">
                    <input type="text" name="username" placeholder="Username" required>
                    <input type="password" name="password" placeholder="Password" required>
                    <input type="submit" value="Login">
                </form>
            </div>
        </body>
        </html>
        <?php
        exit;
    }
}

// Now display submissions for logged in users
?>
<!DOCTYPE html>
<html>
<head>
    <title>Form Submissions</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 0; padding: 20px; background: #f5f5f5; }
        h1 { color: #333; }
        .submission { background: white; padding: 15px; margin-bottom: 15px; border-radius: 5px; box-shadow: 0 2px 5px rgba(0,0,0,0.1); }
        .submission pre { white-space: pre-wrap; font-family: monospace; background: #f9f9f9; padding: 10px; border-radius: 3px; }
        .submission-date { color: #03c0b4; font-weight: bold; }
        .logout { float: right; background-color: #f44336; color: white; padding: 8px 15px; text-decoration: none; border-radius: 4px; }
        .logout:hover { background-color: #d32f2f; }
        .no-submissions { background: #fff3cd; padding: 15px; border-radius: 5px; color: #856404; }
    </style>
</head>
<body>
    <a href="?logout=1" class="logout">Logout</a>
    <h1>Form Submissions</h1>

    <?php
    // Handle logout
    if (isset($_GET['logout']) && $_GET['logout'] === '1') {
        session_destroy();
        header('Location: view_submissions.php');
        exit;
    }

    // Get all submission files
    $submissions_dir = 'form_submissions';
    $files = glob($submissions_dir . '/*.txt');
    
    if (empty($files)) {
        echo '<div class="no-submissions">No submissions found.</div>';
    } else {
        rsort($files); // Sort files by newest first
        
        foreach ($files as $file) {
            $content = file_get_contents($file);
            $filename = basename($file);
            
            echo '<div class="submission">';
            echo '<div class="submission-date">File: ' . $filename . '</div>';
            echo '<pre>' . htmlspecialchars($content) . '</pre>';
            echo '</div>';
        }
    }
    ?>
</body>
</html>