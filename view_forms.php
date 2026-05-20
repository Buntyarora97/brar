

<?php
/**
 * Secure Admin Panel to View Form Submissions
 * Brar Eye Hospital - Admin Dashboard
 */

require_once 'config.php';

session_start();

// Handle logout
if (isset($_GET["logout"])) {
    unset($_SESSION["admin_login"]);
    header("Location: viewforms.php");
    exit;
}

// Handle login
if (isset($_POST["password"]) && $_POST["password"] == ADMIN_PASSWORD) {
    $_SESSION["admin_login"] = true;
    header("Location: viewforms.php");
    exit;
}

// Check if user is logged in
if (!isset($_SESSION["admin_login"])) {
    ?>
    <!DOCTYPE html>
    <html lang="hi">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Admin Login - Brar Eye Hospital</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    </head>
    <body class="bg-light">
        <div class="container">
            <div class="row justify-content-center align-items-center min-vh-100">
                <div class="col-md-4">
                    <div class="card shadow">
                        <div class="card-body p-4">
                            <div class="text-center mb-4">
                                <i class="fas fa-shield-alt fa-3x text-primary mb-3"></i>
                                <h4>Admin Login</h4>
                                <p class="text-muted">Brar Eye Hospital</p>
                            </div>
                            <form method="post">
                                <div class="mb-3">
                                    <label for="password" class="form-label">Password</label>
                                    <input type="password" class="form-control" name="password" id="password" required>
                                </div>
                                <button type="submit" class="btn btn-primary w-100">
                                    <i class="fas fa-sign-in-alt me-2"></i>Login
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
    </html>
    <?php
    exit;
}

// User is logged in, show admin panel
?>
<!DOCTYPE html>
<html lang="hi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel - Brar Eye Hospital</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Devanagari:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
        .submission-card {
            border-left: 4px solid #0d6efd;
            margin-bottom: 1rem;
        }
        .spam-card {
            border-left: 4px solid #dc3545;
        }
        .hindi-text {
            font-family: 'Noto Sans Devanagari', sans-serif;
        }
        .log-container {
            max-height: 400px;
            overflow-y: auto;
            background: #f8f9fa;
            border: 1px solid #dee2e6;
            border-radius: 0.375rem;
        }
    </style>
</head>
<body>
    <!-- Header -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
            <a class="navbar-brand" href="#">
                <i class="fas fa-eye me-2"></i>
                Brar Eye Hospital - Admin Panel
            </a>
            <div class="navbar-nav ms-auto">
                <a class="nav-link" href="index.php">
                    <i class="fas fa-home me-1"></i>Website
                </a>
                <a class="nav-link" href="contact-brar-eye-hospital-bathinda.php">
                    <i class="fas fa-envelope me-1"></i>Contact Form
                </a>
                <a class="nav-link" href="viewforms.php?logout=1">
                    <i class="fas fa-sign-out-alt me-1"></i>Logout
                </a>
            </div>
        </div>
    </nav>

    <div class="container py-4">
        <h1 class="mb-4 hindi-text">
            <i class="fas fa-tachometer-alt me-2"></i>
            फॉर्म सबमिशन डैशबोर्ड
        </h1>

        <!-- Statistics Cards -->
        <div class="row mb-4">
            <?php
            // Get statistics
            $totalSubmissions = 0;
            $todaySubmissions = 0;
            $spamAttempts = 0;
            
            // Count submissions
            $submissionFiles = glob(SUBMISSIONS_DIR . 'submissions_*.json');
            foreach ($submissionFiles as $file) {
                $content = file_get_contents($file);
                $submissions = json_decode($content, true) ?: [];
                $totalSubmissions += count($submissions);
                
                foreach ($submissions as $submission) {
                    if (date('Y-m-d', strtotime($submission['timestamp'])) == date('Y-m-d')) {
                        $todaySubmissions++;
                    }
                }
            }
            
            // Count spam attempts
            $spamLogFile = LOGS_DIR . 'spam_log.txt';
            if (file_exists($spamLogFile)) {
                $spamContent = file_get_contents($spamLogFile);
                $spamAttempts = substr_count($spamContent, '=== SPAM DETECTED ===');
            }
            ?>
            
            <div class="col-md-4 mb-3">
                <div class="card bg-primary text-white">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <div>
                                <h4 class="card-title"><?php echo $totalSubmissions; ?></h4>
                                <p class="card-text">Total Submissions</p>
                            </div>
                            <div class="align-self-center">
                                <i class="fas fa-envelope fa-2x"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-md-4 mb-3">
                <div class="card bg-success text-white">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <div>
                                <h4 class="card-title"><?php echo $todaySubmissions; ?></h4>
                                <p class="card-text">Today's Submissions</p>
                            </div>
                            <div class="align-self-center">
                                <i class="fas fa-calendar-day fa-2x"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-md-4 mb-3">
                <div class="card bg-danger text-white">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <div>
                                <h4 class="card-title"><?php echo $spamAttempts; ?></h4>
                                <p class="card-text">Spam Attempts</p>
                            </div>
                            <div class="align-self-center">
                                <i class="fas fa-shield-alt fa-2x"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Form Submissions -->
        <div class="card mb-4">
            <div class="card-header">
                <h3 class="mb-0 hindi-text">
                    <i class="fas fa-inbox me-2"></i>
                    फॉर्म सबमिशन्स / Form Submissions
                </h3>
            </div>
            <div class="card-body">
                <?php
                $allSubmissions = [];
                
                // Read all submission files
                $submissionFiles = glob(SUBMISSIONS_DIR . 'submissions_*.json');
                rsort($submissionFiles); // Latest files first
                
                foreach ($submissionFiles as $file) {
                    $content = file_get_contents($file);
                    $submissions = json_decode($content, true) ?: [];
                    $allSubmissions = array_merge($allSubmissions, $submissions);
                }
                
                // Sort by timestamp (latest first)
                usort($allSubmissions, function($a, $b) {
                    return strtotime($b['timestamp']) - strtotime($a['timestamp']);
                });
                
                if (count($allSubmissions) > 0): ?>
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Time</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Subject</th>
                                    <th>Message</th>
                                    <th>IP</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach (array_slice($allSubmissions, 0, 50) as $submission): ?>
                                <tr>
                                    <td><?php echo date('d/m/Y H:i', strtotime($submission['timestamp'])); ?></td>
                                    <td><?php echo htmlspecialchars($submission['name']); ?></td>
                                    <td>
                                        <a href="mailto:<?php echo htmlspecialchars($submission['email']); ?>">
                                            <?php echo htmlspecialchars($submission['email']); ?>
                                        </a>
                                    </td>
                                    <td><?php echo htmlspecialchars($submission['subject']); ?></td>
                                    <td>
                                        <span title="<?php echo htmlspecialchars($submission['message']); ?>">
                                            <?php echo htmlspecialchars(substr($submission['message'], 0, 50)); ?>
                                            <?php if (strlen($submission['message']) > 50) echo '...'; ?>
                                        </span>
                                    </td>
                                    <td><?php echo htmlspecialchars($submission['ip']); ?></td>
                                </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                    
                    <?php if (count($allSubmissions) > 50): ?>
                    <p class="text-muted">Showing latest 50 submissions out of <?php echo count($allSubmissions); ?> total.</p>
                    <?php endif; ?>
                    
                <?php else: ?>
                    <div class="alert alert-info">
                        <i class="fas fa-info-circle me-2"></i>
                        No form submissions found yet.
                    </div>
                <?php endif; ?>
            </div>
        </div>

        <!-- Spam Log -->
        <?php if (file_exists(LOGS_DIR . 'spam_log.txt')): ?>
        <div class="card mb-4">
            <div class="card-header bg-danger text-white">
                <h3 class="mb-0">
                    <i class="fas fa-exclamation-triangle me-2"></i>
                    Spam Attempts
                </h3>
            </div>
            <div class="card-body">
                <div class="log-container p-3">
                    <pre class="mb-0"><?php echo htmlspecialchars(file_get_contents(LOGS_DIR . 'spam_log.txt')); ?></pre>
                </div>
            </div>
        </div>
        <?php endif; ?>

        <!-- System Logs -->
        <?php if (file_exists(LOGS_DIR . 'submissions.log')): ?>
        <div class="card mb-4">
            <div class="card-header">
                <h3 class="mb-0">
                    <i class="fas fa-list-alt me-2"></i>
                    System Logs
                </h3>
            </div>
            <div class="card-body">
                <div class="log-container p-3">
                    <pre class="mb-0"><?php echo htmlspecialchars(file_get_contents(LOGS_DIR . 'submissions.log')); ?></pre>
                </div>
            </div>
        </div>
        <?php endif; ?>

        <!-- Download Section -->
        <div class="card">
            <div class="card-header">
                <h3 class="mb-0">
                    <i class="fas fa-download me-2"></i>
                    Export Data
                </h3>
            </div>
            <div class="card-body">
                <p>Download form submissions and logs for backup or analysis:</p>
                <div class="d-flex gap-2 flex-wrap">
                    <?php foreach ($submissionFiles as $file): ?>
                    <a href="<?php echo $file; ?>" class="btn btn-outline-primary btn-sm" download>
                        <i class="fas fa-download me-1"></i>
                        <?php echo basename($file); ?>
                    </a>
                    <?php endforeach; ?>
                    
                    <?php if (file_exists(LOGS_DIR . 'spam_log.txt')): ?>
                    <a href="<?php echo LOGS_DIR . 'spam_log.txt'; ?>" class="btn btn-outline-danger btn-sm" download>
                        <i class="fas fa-download me-1"></i>
                        spam_log.txt
                    </a>
                    <?php endif; ?>
                    
                    <?php if (file_exists(LOGS_DIR . 'submissions.log')): ?>
                    <a href="<?php echo LOGS_DIR . 'submissions.log'; ?>" class="btn btn-outline-info btn-sm" download>
                        <i class="fas fa-download me-1"></i>
                        submissions.log
                    </a>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
