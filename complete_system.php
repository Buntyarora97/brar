
<?php
session_start();

// Configuration
define('ADMIN_PASSWORD', getenv('ADMIN_PASSWORD') ?: 'brarhospital2024');
define('HOSPITAL_NAME', 'Brar Eye Hospital');
define('HOSPITAL_EMAIL', 'brareyehospitals@gmail.com');
define('GOOGLE_SCRIPT_URL', getenv('GOOGLE_SCRIPT_URL') ?: '');

// Spam keywords for detection
$SPAM_KEYWORDS = [
    'loan', 'free money', 'winner', 'prize', 'offer', 'click here', 
    'buy now', 'urgent', 'limited time', 'guarantee', 'risk free',
    'make money', 'earn money', 'work from home', 'no experience',
    'viagra', 'casino', 'gambling', 'bitcoin', 'cryptocurrency',
    'seo services', 'website ranking', 'backlinks', 'followers',
    'dating', 'singles', 'hookup', 'webcam', 'adult',
    'paise kamao', 'jaldi paisa', 'free paisa', 'loot', 'offer',
    'guaranteed income', 'easy money', 'instant money'
];

$DISPOSABLE_DOMAINS = [
    '10minutemail.com', 'tempmail.org', 'guerrillamail.com',
    'mailinator.com', 'yopmail.com', 'temp-mail.org'
];

// Functions
function isSpam($name, $email, $subject, $message) {
    global $SPAM_KEYWORDS, $DISPOSABLE_DOMAINS;
    
    $content = strtolower($name . ' ' . $subject . ' ' . $message);
    
    // Check for spam keywords
    foreach ($SPAM_KEYWORDS as $keyword) {
        if (strpos($content, $keyword) !== false) {
            return true;
        }
    }
    
    // Check for excessive caps
    if (preg_match('/[A-Z]{10,}/', $message)) {
        return true;
    }
    
    // Check for multiple exclamation marks
    if (preg_match('/!{3,}/', $message)) {
        return true;
    }
    
    // Check for URLs
    if (preg_match('/https?:\/\/[^\s]+/', $message) || preg_match('/www\.[^\s]+/', $message)) {
        return true;
    }
    
    // Check for email addresses in message
    if (preg_match('/[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}/', $message)) {
        return true;
    }
    
    // Check message length
    if (strlen($message) < 10 || strlen($message) > 2000) {
        return true;
    }
    
    // Check for numbers in name
    if (preg_match('/\d/', $name)) {
        return true;
    }
    
    // Check for disposable email domains
    $emailDomain = substr(strrchr($email, "@"), 1);
    if (in_array(strtolower($emailDomain), $DISPOSABLE_DOMAINS)) {
        return true;
    }
    
    return false;
}

function sendToGoogleSheets($data) {
    $sheetsData = [
        'username' => $data['name'],
        'email' => $data['email'],
        'phone' => $data['phone'],
        'subject' => $data['subject'],
        'message' => $data['message'],
        'ip' => $data['ip']
    ];
    
    $options = [
        'http' => [
            'header' => "Content-type: application/json\r\n",
            'method' => 'POST',
            'content' => json_encode($sheetsData),
            'timeout' => 30
        ]
    ];
    
    $context = stream_context_create($options);
    $result = file_get_contents(GOOGLE_SCRIPT_URL, false, $context);
    
    if ($result !== false) {
        $response = json_decode($result, true);
        return isset($response['result']) && $response['result'] === 'success';
    }
    
    return false;
}

function logSubmissionLocally($data) {
    if (!file_exists('logs')) {
        mkdir('logs', 0755, true);
    }
    
    $filename = 'logs/submissions_' . date('Y-m') . '.json';
    $submissions = [];
    
    if (file_exists($filename)) {
        $content = file_get_contents($filename);
        $submissions = json_decode($content, true) ?: [];
    }
    
    $submissions[] = array_merge($data, ['timestamp' => date('Y-m-d H:i:s')]);
    
    return file_put_contents($filename, json_encode($submissions, JSON_PRETTY_PRINT));
}

function getSubmissions() {
    $submissions = [];
    $logDir = 'logs';
    
    if (is_dir($logDir)) {
        $files = glob($logDir . '/submissions_*.json');
        foreach ($files as $file) {
            $content = file_get_contents($file);
            $fileSubmissions = json_decode($content, true) ?: [];
            $submissions = array_merge($submissions, $fileSubmissions);
        }
    }
    
    usort($submissions, function($a, $b) {
        return strtotime($b['timestamp']) - strtotime($a['timestamp']);
    });
    
    return $submissions;
}

// Handle different actions
$action = $_GET['action'] ?? '';
$message = '';
$error = '';

// Login check
if ($action !== 'login' && $action !== 'contact' && !isset($_SESSION['admin_logged_in'])) {
    $action = 'login';
}

// Process form submissions
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if ($action === 'login') {
        $password = $_POST['password'] ?? '';
        if ($password === ADMIN_PASSWORD) {
            $_SESSION['admin_logged_in'] = true;
            $action = 'dashboard';
            $message = 'Login successful!';
        } else {
            $error = 'Invalid password!';
        }
    } elseif ($action === 'contact') {
        $name = trim($_POST['name'] ?? '');
        $email = trim($_POST['email'] ?? '');
        $phone = trim($_POST['phone'] ?? '');
        $subject = trim($_POST['subject'] ?? '');
        $messageText = trim($_POST['message'] ?? '');
        $ip = $_SERVER['REMOTE_ADDR'] ?? 'unknown';
        
        if (empty($name) || empty($email) || empty($subject) || empty($messageText)) {
            $error = 'All fields are required.';
        } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $error = 'Invalid email format.';
        } elseif (isSpam($name, $email, $subject, $messageText)) {
            $error = 'Message detected as spam. Please try again with a different message.';
        } else {
            $data = [
                'name' => $name,
                'email' => $email,
                'phone' => $phone,
                'subject' => $subject,
                'message' => $messageText,
                'ip' => $ip
            ];
            
            $googleSent = sendToGoogleSheets($data);
            $localSaved = logSubmissionLocally($data);
            
            if ($googleSent || $localSaved) {
                $message = 'Thank you! Your message has been sent successfully.';
            } else {
                $error = 'Failed to send message. Please try again.';
            }
        }
    }
}

// Handle logout
if ($action === 'logout') {
    session_destroy();
    $action = 'login';
    $message = 'Logged out successfully!';
}

// Handle download
if ($action === 'download' && isset($_SESSION['admin_logged_in'])) {
    $submissions = getSubmissions();
    
    header('Content-Type: application/vnd.ms-excel');
    header('Content-Disposition: attachment; filename="submissions_' . date('Y-m-d') . '.csv"');
    
    $output = fopen('php://output', 'w');
    fputcsv($output, ['Name', 'Email', 'Phone', 'Subject', 'Message', 'IP', 'Timestamp']);
    
    foreach ($submissions as $submission) {
        fputcsv($output, [
            $submission['name'],
            $submission['email'],
            $submission['phone'],
            $submission['subject'],
            $submission['message'],
            $submission['ip'],
            $submission['timestamp']
        ]);
    }
    
    fclose($output);
    exit;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo HOSPITAL_NAME; ?> - Management System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <style>
        body { background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); min-height: 100vh; }
        .card { border-radius: 15px; box-shadow: 0 10px 30px rgba(0,0,0,0.2); }
        .navbar { box-shadow: 0 2px 10px rgba(0,0,0,0.1); }
        .contact-form { background: white; border-radius: 15px; padding: 30px; }
        .form-control:focus { border-color: #667eea; box-shadow: 0 0 0 0.2rem rgba(102, 126, 234, 0.25); }
        .btn-primary { background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); border: none; }
        .btn-primary:hover { transform: translateY(-2px); box-shadow: 0 5px 15px rgba(0,0,0,0.2); }
    </style>
</head>
<body>

<?php if ($action === 'login'): ?>
    <!-- Login Page -->
    <div class="container d-flex align-items-center justify-content-center min-vh-100">
        <div class="col-md-6 col-lg-4">
            <div class="card">
                <div class="card-body p-5">
                    <div class="text-center mb-4">
                        <i class="fas fa-hospital fa-3x text-primary mb-3"></i>
                        <h2><?php echo HOSPITAL_NAME; ?></h2>
                        <p class="text-muted">Admin Login</p>
                    </div>
                    
                    <?php if ($error): ?>
                        <div class="alert alert-danger"><?php echo htmlspecialchars($error); ?></div>
                    <?php endif; ?>
                    
                    <?php if ($message): ?>
                        <div class="alert alert-success"><?php echo htmlspecialchars($message); ?></div>
                    <?php endif; ?>
                    
                    <form method="POST">
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" id="password" name="password" required>
                        </div>
                        <button type="submit" class="btn btn-primary w-100">
                            <i class="fas fa-sign-in-alt me-2"></i>Login
                        </button>
                    </form>
                    
                    <div class="text-center mt-3">
                        <a href="?action=contact" class="text-decoration-none">Contact Form</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php elseif ($action === 'contact'): ?>
    <!-- Contact Form -->
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6">
                <div class="contact-form">
                    <div class="text-center mb-4">
                        <i class="fas fa-hospital fa-3x text-primary mb-3"></i>
                        <h2><?php echo HOSPITAL_NAME; ?></h2>
                        <p class="text-muted">Contact Us</p>
                    </div>
                    
                    <?php if ($error): ?>
                        <div class="alert alert-danger"><?php echo htmlspecialchars($error); ?></div>
                    <?php endif; ?>
                    
                    <?php if ($message): ?>
                        <div class="alert alert-success"><?php echo htmlspecialchars($message); ?></div>
                    <?php endif; ?>
                    
                    <form method="POST">
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="name" class="form-label">Name *</label>
                                <input type="text" class="form-control" id="name" name="name" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="email" class="form-label">Email *</label>
                                <input type="email" class="form-control" id="email" name="email" required>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="phone" class="form-label">Phone</label>
                                <input type="tel" class="form-control" id="phone" name="phone">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="subject" class="form-label">Subject *</label>
                                <input type="text" class="form-control" id="subject" name="subject" required>
                            </div>
                        </div>
                        
                        <div class="mb-3">
                            <label for="message" class="form-label">Message *</label>
                            <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
                        </div>
                        
                        <button type="submit" class="btn btn-primary w-100">
                            <i class="fas fa-paper-plane me-2"></i>Send Message
                        </button>
                    </form>
                    
                    <div class="text-center mt-3">
                        <a href="?action=login" class="text-decoration-none">Admin Login</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php else: ?>
    <!-- Admin Dashboard -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container-fluid">
            <a class="navbar-brand" href="?action=dashboard">
                <i class="fas fa-hospital me-2"></i><?php echo HOSPITAL_NAME; ?>
            </a>
            <div class="navbar-nav ms-auto">
                <a class="nav-link" href="?action=logout">
                    <i class="fas fa-sign-out-alt me-1"></i>Logout
                </a>
            </div>
        </div>
    </nav>
    
    <div class="container-fluid mt-4">
        <div class="row">
            <div class="col-12">
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <h1 class="h3">Admin Dashboard</h1>
                    <a href="?action=download" class="btn btn-success">
                        <i class="fas fa-download me-2"></i>Download Data
                    </a>
                </div>
            </div>
        </div>
        
        <?php if ($message): ?>
            <div class="alert alert-success"><?php echo htmlspecialchars($message); ?></div>
        <?php endif; ?>
        
        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0">
                    <i class="fas fa-envelope me-2"></i>Contact Form Submissions
                </h5>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Subject</th>
                                <th>Message</th>
                                <th>IP</th>
                                <th>Date</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                            $submissions = getSubmissions();
                            foreach (array_slice($submissions, 0, 50) as $submission): 
                            ?>
                            <tr>
                                <td><?php echo htmlspecialchars($submission['name']); ?></td>
                                <td><?php echo htmlspecialchars($submission['email']); ?></td>
                                <td><?php echo htmlspecialchars($submission['phone'] ?? ''); ?></td>
                                <td><?php echo htmlspecialchars($submission['subject']); ?></td>
                                <td>
                                    <div style="max-width: 200px; overflow: hidden; text-overflow: ellipsis;">
                                        <?php echo htmlspecialchars(substr($submission['message'], 0, 100)); ?>
                                        <?php if (strlen($submission['message']) > 100): ?>...<?php endif; ?>
                                    </div>
                                </td>
                                <td><?php echo htmlspecialchars($submission['ip']); ?></td>
                                <td><?php echo date('M j, Y H:i', strtotime($submission['timestamp'])); ?></td>
                            </tr>
                            <?php endforeach; ?>
                            
                            <?php if (empty($submissions)): ?>
                            <tr>
                                <td colspan="7" class="text-center text-muted">No submissions yet</td>
                            </tr>
                            <?php endif; ?>
                        </tbody>
                    </table>
                </div>
                
                <?php if (count($submissions) > 50): ?>
                <div class="text-center mt-3">
                    <small class="text-muted">Showing latest 50 submissions. Download full data for complete records.</small>
                </div>
                <?php endif; ?>
            </div>
        </div>
        
        <!-- Statistics -->
        <div class="row mt-4">
            <div class="col-md-3">
                <div class="card bg-primary text-white">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <div>
                                <h5>Total Submissions</h5>
                                <h3><?php echo count($submissions); ?></h3>
                            </div>
                            <i class="fas fa-envelope fa-2x opacity-50"></i>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-md-3">
                <div class="card bg-success text-white">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <div>
                                <h5>Today</h5>
                                <h3>
                                    <?php 
                                    $today = date('Y-m-d');
                                    $todayCount = 0;
                                    foreach ($submissions as $sub) {
                                        if (strpos($sub['timestamp'], $today) === 0) {
                                            $todayCount++;
                                        }
                                    }
                                    echo $todayCount;
                                    ?>
                                </h3>
                            </div>
                            <i class="fas fa-calendar-day fa-2x opacity-50"></i>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-md-3">
                <div class="card bg-info text-white">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <div>
                                <h5>This Month</h5>
                                <h3>
                                    <?php 
                                    $thisMonth = date('Y-m');
                                    $monthCount = 0;
                                    foreach ($submissions as $sub) {
                                        if (strpos($sub['timestamp'], $thisMonth) === 0) {
                                            $monthCount++;
                                        }
                                    }
                                    echo $monthCount;
                                    ?>
                                </h3>
                            </div>
                            <i class="fas fa-calendar-month fa-2x opacity-50"></i>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-md-3">
                <div class="card bg-warning text-white">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <div>
                                <h5>System Status</h5>
                                <h6>Online</h6>
                            </div>
                            <i class="fas fa-server fa-2x opacity-50"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php endif; ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
