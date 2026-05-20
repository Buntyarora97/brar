<?php
require_once 'auth_check.php';
require_login();

$DATA_FILE = __DIR__ . '/enquiries.json';

if (!isset($_SESSION['csrf_token'])) {
    $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
}
$csrf_token = $_SESSION['csrf_token'];

if (isset($_POST['action']) && isset($_POST['id'])) {
    if (!isset($_POST['csrf_token']) || $_POST['csrf_token'] !== $_SESSION['csrf_token']) {
        die('Invalid request');
    }
    
    $id = $_POST['id'];
    $current_data = file_exists($DATA_FILE) ? json_decode(file_get_contents($DATA_FILE), true) : [];
    
    if ($_POST['action'] == 'mark_read') {
        foreach ($current_data as &$item) {
            if ($item['id'] == $id) {
                $item['status'] = 'read';
                break;
            }
        }
    } elseif ($_POST['action'] == 'delete') {
        $current_data = array_filter($current_data, function($item) use ($id) {
            return $item['id'] != $id;
        });
    }
    
    file_put_contents($DATA_FILE, json_encode(array_values($current_data), JSON_PRETTY_PRINT));
    header("Location: index.php");
    exit;
}

$enquiries = file_exists($DATA_FILE) ? json_decode(file_get_contents($DATA_FILE), true) : [];
$new_count = 0;
foreach ($enquiries as $enq) {
    if ($enq['status'] == 'new') $new_count++;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - Brar Eye Hospital</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        body { background-color: #f8f9fa; }
        .sidebar { 
            width: 250px; 
            background: linear-gradient(180deg, #222 0%, #333 100%);
            color: #fff; 
            min-height: 100vh; 
            position: fixed;
            box-shadow: 2px 0 10px rgba(0,0,0,0.1);
        }
        .sidebar-header {
            padding: 25px 20px;
            border-bottom: 1px solid rgba(255,255,255,0.1);
        }
        .sidebar-header h4 {
            color: #03c0b4;
            margin: 0;
            font-weight: 700;
        }
        .main-content { 
            margin-left: 250px; 
            padding: 30px; 
        }
        .nav-link { 
            color: rgba(255,255,255,0.7); 
            padding: 14px 20px; 
            display: flex;
            align-items: center;
            transition: all 0.3s ease;
        }
        .nav-link i {
            width: 25px;
        }
        .nav-link:hover, .nav-link.active { 
            color: #fff; 
            background: rgba(3, 192, 180, 0.2);
            border-left: 3px solid #03c0b4;
        }
        .nav-link.text-danger:hover {
            background: rgba(220, 53, 69, 0.2);
            border-left: 3px solid #dc3545;
        }
        .status-new { 
            background: #d1e7dd; 
            color: #0f5132; 
            padding: 4px 10px; 
            border-radius: 20px; 
            font-size: 12px; 
            font-weight: 600; 
        }
        .status-read { 
            background: #e2e3e5; 
            color: #41464b; 
            padding: 4px 10px; 
            border-radius: 20px; 
            font-size: 12px; 
        }
        .card {
            border: none;
            border-radius: 12px;
        }
        .table th {
            font-weight: 600;
            color: #555;
            border-top: none;
        }
        .table-hover tbody tr:hover {
            background-color: rgba(3, 192, 180, 0.05);
        }
        .badge-new {
            background: #03c0b4;
        }
        .stat-card {
            background: linear-gradient(135deg, #03c0b4 0%, #029d92 100%);
            color: white;
            border-radius: 12px;
            padding: 20px;
            margin-bottom: 20px;
        }
        .stat-card h3 {
            font-size: 2.5rem;
            font-weight: 700;
            margin: 0;
        }
        .btn-action {
            padding: 5px 10px;
            border-radius: 6px;
            border: none;
            cursor: pointer;
        }
        .action-form {
            display: inline;
        }
        
        @media (max-width: 991px) {
            .sidebar {
                width: 100%;
                position: relative;
                min-height: auto;
            }
            .main-content {
                margin-left: 0;
            }
        }
    </style>
</head>
<body>

<div class="sidebar">
    <div class="sidebar-header">
        <h4><i class="fas fa-eye me-2"></i>Admin Panel</h4>
        <small class="text-muted">Brar Eye Hospital</small>
    </div>
    <nav class="mt-3">
        <a href="index.php" class="nav-link active">
            <i class="fas fa-inbox me-2"></i> Enquiries
            <?php if($new_count > 0): ?>
            <span class="badge badge-new ms-auto"><?php echo $new_count; ?></span>
            <?php endif; ?>
        </a>
        <a href="../contact-brar-eye-hospital-bathinda.php" class="nav-link" target="_blank">
            <i class="fas fa-globe me-2"></i> View Website
        </a>
        <a href="logout.php" class="nav-link text-danger">
            <i class="fas fa-sign-out-alt me-2"></i> Logout
        </a>
    </nav>
</div>

<div class="main-content">
    <div class="row mb-4">
        <div class="col-md-4">
            <div class="stat-card">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <p class="mb-1 opacity-75">Total Enquiries</p>
                        <h3><?php echo count($enquiries); ?></h3>
                    </div>
                    <i class="fas fa-envelope fa-3x opacity-50"></i>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="stat-card" style="background: linear-gradient(135deg, #28a745 0%, #20c997 100%);">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <p class="mb-1 opacity-75">New Enquiries</p>
                        <h3><?php echo $new_count; ?></h3>
                    </div>
                    <i class="fas fa-bell fa-3x opacity-50"></i>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="stat-card" style="background: linear-gradient(135deg, #6c757d 0%, #adb5bd 100%);">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <p class="mb-1 opacity-75">Read Enquiries</p>
                        <h3><?php echo count($enquiries) - $new_count; ?></h3>
                    </div>
                    <i class="fas fa-check-circle fa-3x opacity-50"></i>
                </div>
            </div>
        </div>
    </div>

    <div class="card shadow-sm">
        <div class="card-header bg-white py-3">
            <h5 class="mb-0"><i class="fas fa-list me-2 text-primary"></i>Contact Enquiries</h5>
        </div>
        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table table-hover mb-0 align-middle">
                    <thead class="bg-light">
                        <tr>
                            <th class="ps-4 py-3">Status</th>
                            <th>Date</th>
                            <th>Name</th>
                            <th>Contact</th>
                            <th>Subject</th>
                            <th>Message</th>
                            <th class="pe-4 text-end">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (empty($enquiries)): ?>
                            <tr>
                                <td colspan="7" class="text-center py-5">
                                    <i class="fas fa-inbox fa-3x text-muted mb-3 d-block"></i>
                                    <p class="text-muted mb-0">No enquiries found.</p>
                                </td>
                            </tr>
                        <?php else: ?>
                            <?php foreach ($enquiries as $enquiry): ?>
                            <tr class="<?php echo $enquiry['status'] == 'new' ? 'table-warning' : ''; ?>">
                                <td class="ps-4">
                                    <span class="status-<?php echo $enquiry['status']; ?>">
                                        <?php echo ucfirst($enquiry['status']); ?>
                                    </span>
                                </td>
                                <td class="small text-muted">
                                    <?php echo date('M d, Y', strtotime($enquiry['date'])); ?><br>
                                    <small><?php echo date('h:i A', strtotime($enquiry['date'])); ?></small>
                                </td>
                                <td class="fw-bold"><?php echo htmlspecialchars($enquiry['name']); ?></td>
                                <td>
                                    <div><a href="mailto:<?php echo htmlspecialchars($enquiry['email']); ?>"><?php echo htmlspecialchars($enquiry['email']); ?></a></div>
                                    <div class="small text-muted">
                                        <a href="tel:<?php echo htmlspecialchars($enquiry['phone']); ?>"><?php echo htmlspecialchars($enquiry['phone']); ?></a>
                                    </div>
                                </td>
                                <td><?php echo htmlspecialchars($enquiry['subject']); ?></td>
                                <td>
                                    <button type="button" class="btn btn-sm btn-link p-0 text-decoration-none text-start" 
                                            data-bs-toggle="modal" data-bs-target="#messageModal<?php echo $enquiry['id']; ?>">
                                        <?php echo htmlspecialchars(substr($enquiry['message'], 0, 40)); ?>
                                        <?php if(strlen($enquiry['message']) > 40): ?>...<?php endif; ?>
                                    </button>
                                    
                                    <div class="modal fade" id="messageModal<?php echo $enquiry['id']; ?>" tabindex="-1">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">Message from <?php echo htmlspecialchars($enquiry['name']); ?></h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <p><strong>Subject:</strong> <?php echo htmlspecialchars($enquiry['subject']); ?></p>
                                                    <hr>
                                                    <p><?php echo nl2br(htmlspecialchars($enquiry['message'])); ?></p>
                                                </div>
                                                <div class="modal-footer">
                                                    <a href="mailto:<?php echo htmlspecialchars($enquiry['email']); ?>" class="btn btn-primary">
                                                        <i class="fas fa-reply me-1"></i>Reply via Email
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td class="pe-4 text-end">
                                    <?php if($enquiry['status'] == 'new'): ?>
                                    <form method="post" class="action-form">
                                        <input type="hidden" name="csrf_token" value="<?php echo $csrf_token; ?>">
                                        <input type="hidden" name="action" value="mark_read">
                                        <input type="hidden" name="id" value="<?php echo $enquiry['id']; ?>">
                                        <button type="submit" class="btn btn-sm btn-success btn-action me-1" title="Mark as Read">
                                            <i class="fas fa-check"></i>
                                        </button>
                                    </form>
                                    <?php endif; ?>
                                    <form method="post" class="action-form" onsubmit="return confirm('Are you sure you want to delete this enquiry?')">
                                        <input type="hidden" name="csrf_token" value="<?php echo $csrf_token; ?>">
                                        <input type="hidden" name="action" value="delete">
                                        <input type="hidden" name="id" value="<?php echo $enquiry['id']; ?>">
                                        <button type="submit" class="btn btn-sm btn-outline-danger btn-action" title="Delete">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
