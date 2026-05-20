<?php
require_once '../includes/config.php';
require_once '../includes/auth.php';
require_once '../includes/functions.php';

requireLogin();

$positions = getAllPositions();
$applications = getAllApplications();

$totalPositions = count($positions);
$activePositions = count(array_filter($positions, function($p) { return $p['status'] === 'active'; }));
$totalApplications = count($applications);
$newApplications = count(array_filter($applications, function($a) { return $a['status'] === 'new'; }));
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - Career Management</title>
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
            border-radius: 0;
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
        .stat-card {
            background: white;
            border-radius: 10px;
            padding: 25px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.08);
            margin-bottom: 25px;
            transition: transform 0.3s;
        }
        .stat-card:hover {
            transform: translateY(-5px);
        }
        .stat-card .icon {
            font-size: 2.5rem;
            margin-bottom: 15px;
        }
        .stat-card h3 {
            font-size: 2rem;
            font-weight: 700;
            margin-bottom: 5px;
        }
        .stat-card p {
            color: #666;
            margin: 0;
        }
        .icon-blue { color: #03c0b4; }
        .icon-orange { color: #f28d52; }
        .icon-green { color: #28a745; }
        .icon-purple { color: #6f42c1; }
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
            <a class="nav-link active" href="dashboard.php">
                <i class="fas fa-tachometer-alt"></i> Dashboard
            </a>
            <a class="nav-link" href="positions.php">
                <i class="fas fa-briefcase"></i> Job Positions
            </a>
            <a class="nav-link" href="applications.php">
                <i class="fas fa-file-alt"></i> Applications
            </a>
            <a class="nav-link" href="logout.php">
                <i class="fas fa-sign-out-alt"></i> Logout
            </a>
        </nav>
    </div>
    
    <div class="content">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h2>Dashboard Overview</h2>
            <div>
                <i class="fas fa-user-circle me-2"></i>
                <span>Welcome, <?= htmlspecialchars($_SESSION['admin_username']) ?></span>
            </div>
        </div>
        
        <div class="row">
            <div class="col-md-3">
                <div class="stat-card">
                    <div class="icon icon-blue">
                        <i class="fas fa-briefcase"></i>
                    </div>
                    <h3><?= $totalPositions ?></h3>
                    <p>Total Positions</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="stat-card">
                    <div class="icon icon-green">
                        <i class="fas fa-check-circle"></i>
                    </div>
                    <h3><?= $activePositions ?></h3>
                    <p>Active Positions</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="stat-card">
                    <div class="icon icon-orange">
                        <i class="fas fa-file-alt"></i>
                    </div>
                    <h3><?= $totalApplications ?></h3>
                    <p>Total Applications</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="stat-card">
                    <div class="icon icon-purple">
                        <i class="fas fa-bell"></i>
                    </div>
                    <h3><?= $newApplications ?></h3>
                    <p>New Applications</p>
                </div>
            </div>
        </div>
        
        <div class="row mt-4">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header bg-white">
                        <h5 class="mb-0"><i class="fas fa-briefcase me-2" style="color: #03c0b4;"></i>Recent Positions</h5>
                    </div>
                    <div class="card-body">
                        <?php if (empty($positions)): ?>
                            <p class="text-muted">No positions added yet.</p>
                        <?php else: ?>
                            <div class="list-group list-group-flush">
                                <?php foreach (array_slice($positions, -5) as $pos): ?>
                                    <div class="list-group-item">
                                        <div class="d-flex justify-content-between">
                                            <strong><?= htmlspecialchars($pos['title']) ?></strong>
                                            <span class="badge <?= $pos['status'] === 'active' ? 'bg-success' : 'bg-secondary' ?>">
                                                <?= ucfirst($pos['status']) ?>
                                            </span>
                                        </div>
                                        <small class="text-muted"><?= htmlspecialchars($pos['location']) ?></small>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header bg-white">
                        <h5 class="mb-0"><i class="fas fa-file-alt me-2" style="color: #f28d52;"></i>Recent Applications</h5>
                    </div>
                    <div class="card-body">
                        <?php if (empty($applications)): ?>
                            <p class="text-muted">No applications received yet.</p>
                        <?php else: ?>
                            <div class="list-group list-group-flush">
                                <?php foreach (array_slice(array_reverse($applications), 0, 5) as $app): ?>
                                    <div class="list-group-item">
                                        <div class="d-flex justify-content-between">
                                            <strong><?= htmlspecialchars($app['name']) ?></strong>
                                            <span class="badge bg-info"><?= ucfirst($app['status']) ?></span>
                                        </div>
                                        <small class="text-muted">
                                            <?= htmlspecialchars($app['position']) ?> - 
                                            <?= formatDate($app['submitted_at']) ?>
                                        </small>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
