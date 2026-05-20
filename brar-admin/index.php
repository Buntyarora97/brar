<?php
session_start();
if (!isset($_SESSION['admin_logged_in'])) {
    header('Location: login.php');
    exit;
}

// Read from JSON File
$file = '../data/submissions.json';
$enquiries = [];
if (file_exists($file)) {
    $enquiries = json_decode(file_get_contents($file), true);
}
if (!is_array($enquiries)) $enquiries = [];
$enquiries = array_reverse($enquiries); // Show latest first
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard | Brar Eye Hospital</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/all.min.css">
    <style>
        :root {
            --primary-orange: #f17732;
            --primary-teal: #1dd2c3;
            --dark-gray: #2d3436;
        }
        body { background-color: #f0f2f5; font-family: 'Segoe UI', sans-serif; }
        .sidebar { 
            min-height: 100vh; 
            background: var(--dark-gray); 
            color: white; 
            padding: 0;
            box-shadow: 4px 0 10px rgba(0,0,0,0.1);
        }
        .sidebar-header {
            padding: 30px 20px;
            background: #1e272e;
            text-align: center;
            border-bottom: 1px solid #3d4e5d;
        }
        .sidebar-header h4 { color: var(--primary-teal); font-weight: 700; margin: 0; font-size: 1.2rem; }
        .nav-links { padding: 20px 0; }
        .sidebar a { 
            color: #d1d8e0; 
            text-decoration: none; 
            padding: 15px 25px; 
            display: flex;
            align-items: center;
            transition: all 0.3s;
            border-left: 4px solid transparent;
        }
        .sidebar a i { margin-right: 15px; font-size: 1.1rem; }
        .sidebar a:hover, .sidebar a.active { 
            background: #3d4e5d; 
            color: white; 
            border-left-color: var(--primary-teal);
        }
        .content { padding: 40px; }
        .header-card {
            background: white;
            padding: 25px;
            border-radius: 15px;
            box-shadow: 0 4px 20px rgba(0,0,0,0.05);
            margin-bottom: 30px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-top: 5px solid var(--primary-orange);
        }
        .header-card h2 { margin: 0; font-weight: 700; color: var(--dark-gray); }
        .stats-badge {
            background: var(--primary-teal);
            color: white;
            padding: 8px 20px;
            border-radius: 50px;
            font-weight: 600;
        }
        .table-card {
            background: white;
            border-radius: 15px;
            box-shadow: 0 4px 20px rgba(0,0,0,0.05);
            overflow: hidden;
            border: none;
        }
        .table thead {
            background: #f8f9fa;
        }
        .table th {
            border: none;
            padding: 15px 20px;
            text-transform: uppercase;
            font-size: 0.8rem;
            letter-spacing: 1px;
            color: #7f8c8d;
        }
        .table td {
            padding: 15px 20px;
            vertical-align: middle;
            border-bottom: 1px solid #f1f1f1;
            font-size: 0.9rem;
        }
        .badge-branch {
            background: #e1f5fe;
            color: #0288d1;
            padding: 5px 12px;
            border-radius: 4px;
            font-size: 0.75rem;
            font-weight: 600;
        }
        .badge-doctor {
            background: #fff3e0;
            color: #ef6c00;
            padding: 5px 12px;
            border-radius: 4px;
            font-size: 0.75rem;
            font-weight: 600;
        }
        .btn-logout {
            background: #eb4d4b;
            color: white !important;
            margin-top: auto;
        }
    </style>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2 sidebar d-flex flex-column">
                <div class="sidebar-header">
                    <h4>BRAR EYE<br><small style="font-size: 0.7rem; color: #fff; opacity: 0.7;">ADMIN PORTAL</small></h4>
                </div>
                <div class="nav-links flex-grow-1">
                    <a href="index.php" class="active"><i class="fas fa-chart-line"></i> Dashboard</a>
                    <a href="#"><i class="fas fa-users"></i> Patients</a>
                    <a href="#"><i class="fas fa-calendar-alt"></i> Schedule</a>
                </div>
                <div class="nav-links pb-4">
                    <a href="logout.php" class="btn-logout"><i class="fas fa-sign-out-alt"></i> Sign Out</a>
                </div>
            </div>
            <div class="col-md-10 content">
                <div class="header-card">
                    <div>
                        <h2>Patient Enquiries</h2>
                        <p class="text-muted mb-0">Manage incoming appointment requests</p>
                    </div>
                    <div class="stats-badge">
                        Total: <?php echo count($enquiries); ?>
                    </div>
                </div>

                <div class="table-card">
                    <div class="table-responsive">
                        <table class="table mb-0">
                            <thead>
                                <tr>
                                    <th>Date & Time</th>
                                    <th>Patient Details</th>
                                    <th>Preferences</th>
                                    <th>Medical Concern</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($enquiries as $row): ?>
                                <tr>
                                    <td style="width: 150px;">
                                        <div class="fw-bold text-dark"><?php echo date('d M, Y', strtotime($row['created_at'])); ?></div>
                                        <small class="text-muted"><?php echo date('h:i A', strtotime($row['created_at'])); ?></small>
                                    </td>
                                    <td>
                                        <div class="fw-bold" style="color: var(--primary-orange);"><?php echo htmlspecialchars($row['name']); ?></div>
                                        <div class="small text-muted">
                                            <i class="fas fa-phone-alt me-1"></i> <?php echo htmlspecialchars($row['mobile']); ?><br>
                                            <i class="fas fa-envelope me-1"></i> <?php echo htmlspecialchars($row['email']); ?><br>
                                            <span class="badge bg-light text-dark border mt-1">Age: <?php echo htmlspecialchars($row['age']); ?></span>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="mb-1">
                                            <span class="badge-doctor"><i class="fas fa-user-md me-1"></i> <?php echo htmlspecialchars($row['doctor']); ?></span>
                                        </div>
                                        <div>
                                            <span class="badge-branch"><i class="fas fa-hospital me-1"></i> <?php echo htmlspecialchars($row['branch']); ?></span>
                                        </div>
                                    </td>
                                    <td style="max-width: 300px;">
                                        <div class="text-muted small" style="line-height: 1.4;">
                                            <?php echo nl2br(htmlspecialchars($row['description'])); ?>
                                        </div>
                                    </td>
                                </tr>
                                <?php endforeach; ?>
                                <?php if(empty($enquiries)): ?>
                                    <tr>
                                        <td colspan="4" class="text-center py-5 text-muted">No enquiries found yet.</td>
                                    </tr>
                                <?php endif; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>