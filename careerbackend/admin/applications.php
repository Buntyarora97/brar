<?php
require_once '../includes/config.php';
require_once '../includes/auth.php';
require_once '../includes/functions.php';

requireLogin();

$applications = array_reverse(getAllApplications());
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Applications - Career Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f8f9fa;
        }
        .sidebar {
            background: linear-gradient(135deg, #03c0b4 0%, #f28d52 100%);
            min-height: 100vh;
            color: white;
            position: fixed;
            width: 250px;
            padding: 20px 0;
        }
        .sidebar .brand {
            padding: 20px;
            text-align: center;
            border-bottom: 1px solid rgba(255,255,255,0.2);
            margin-bottom: 20px;
        }
        .sidebar .brand h4 {
            margin: 0;
            font-weight: 700;
        }
        .sidebar .nav-link {
            color: white;
            padding: 15px 25px;
            margin: 5px 0;
            transition: all 0.3s;
        }
        .sidebar .nav-link:hover, .sidebar .nav-link.active {
            background-color: rgba(255,255,255,0.2);
            color: white;
        }
        .sidebar .nav-link i {
            margin-right: 10px;
            width: 20px;
        }
        .content {
            margin-left: 250px;
            padding: 30px;
        }
        .card {
            border: none;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.08);
            margin-bottom: 20px;
        }
        .application-card {
            transition: transform 0.3s;
        }
        .application-card:hover {
            transform: translateY(-3px);
        }
    </style>
</head>
<body>
    <div class="sidebar">
        <div class="brand">
            <i class="fas fa-briefcase fa-2x mb-2"></i>
            <h4>Career Admin</h4>
            <small>Brar Eye Hospital</small>
        </div>
        <nav class="nav flex-column">
            <a class="nav-link" href="dashboard.php">
                <i class="fas fa-tachometer-alt"></i> Dashboard
            </a>
            <a class="nav-link" href="positions.php">
                <i class="fas fa-briefcase"></i> Job Positions
            </a>
            <a class="nav-link active" href="applications.php">
                <i class="fas fa-file-alt"></i> Applications
            </a>
            <a class="nav-link" href="logout.php">
                <i class="fas fa-sign-out-alt"></i> Logout
            </a>
        </nav>
    </div>
    
    <div class="content">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h2>Job Applications</h2>
            <span class="badge bg-primary" style="font-size: 1rem;">
                Total: <?= count($applications) ?>
            </span>
        </div>
        
        <?php if (empty($applications)): ?>
            <div class="card">
                <div class="card-body text-center py-5">
                    <i class="fas fa-inbox fa-4x text-muted mb-3"></i>
                    <p class="text-muted">No applications received yet.</p>
                </div>
            </div>
        <?php else: ?>
            <?php foreach ($applications as $app): ?>
                <div class="card application-card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-8">
                                <h5 class="mb-2">
                                    <i class="fas fa-user-circle me-2" style="color: #03c0b4;"></i>
                                    <?= htmlspecialchars($app['name']) ?>
                                </h5>
                                <p class="mb-1">
                                    <i class="fas fa-briefcase me-2" style="color: #f28d52;"></i>
                                    <strong>Position:</strong> <?= htmlspecialchars($app['position']) ?>
                                </p>
                                <p class="mb-1">
                                    <i class="fas fa-envelope me-2"></i>
                                    <strong>Email:</strong> <?= htmlspecialchars($app['email']) ?>
                                </p>
                                <p class="mb-1">
                                    <i class="fas fa-phone me-2"></i>
                                    <strong>Phone:</strong> <?= htmlspecialchars($app['phone']) ?>
                                </p>
                                <?php if (!empty($app['message'])): ?>
                                    <p class="mb-1">
                                        <i class="fas fa-comment me-2"></i>
                                        <strong>Message:</strong><br>
                                        <span class="ms-4"><?= nl2br(htmlspecialchars($app['message'])) ?></span>
                                    </p>
                                <?php endif; ?>
                            </div>
                            <div class="col-md-4 text-end">
                                <div class="mb-2">
                                    <span class="badge bg-info"><?= ucfirst($app['status']) ?></span>
                                </div>
                                <small class="text-muted d-block mb-3">
                                    <i class="fas fa-clock me-1"></i>
                                    <?= formatDate($app['submitted_at']) ?>
                                </small>
                                <?php if (!empty($app['resume'])): ?>
                                    <a href="download_resume.php?file=<?= urlencode($app['resume']) ?>" 
                                       class="btn btn-sm btn-primary">
                                        <i class="fas fa-download me-1"></i> Download Resume
                                    </a>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        <?php endif; ?>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
