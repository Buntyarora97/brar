<?php
require_once '../includes/config.php';
require_once '../includes/auth.php';
require_once '../includes/functions.php';

requireLogin();

$message = '';
$messageType = '';

// Handle form submissions
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $action = $_POST['action'] ?? '';
    
    if ($action === 'add' || $action === 'edit') {
        $position = [
            'title' => sanitize($_POST['title']),
            'location' => sanitize($_POST['location']),
            'type' => sanitize($_POST['type']),
            'department' => sanitize($_POST['department']),
            'description' => sanitize($_POST['description']),
            'requirements' => sanitize($_POST['requirements']),
            'responsibilities' => sanitize($_POST['responsibilities']),
            'status' => sanitize($_POST['status'])
        ];
        
        if ($action === 'edit') {
            $position['id'] = $_POST['id'];
        }
        
        if (savePosition($position)) {
            $message = $action === 'add' ? 'Position added successfully!' : 'Position updated successfully!';
            $messageType = 'success';
        } else {
            $message = 'Error saving position';
            $messageType = 'danger';
        }
    } elseif ($action === 'delete') {
        if (deletePosition($_POST['id'])) {
            $message = 'Position deleted successfully!';
            $messageType = 'success';
        } else {
            $message = 'Error deleting position';
            $messageType = 'danger';
        }
    } elseif ($action === 'toggle') {
        if (togglePositionStatus($_POST['id'])) {
            $message = 'Position status updated!';
            $messageType = 'success';
        }
    }
}

$positions = getAllPositions();
$editPosition = null;

if (isset($_GET['edit'])) {
    $editPosition = getPositionById($_GET['edit']);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Positions - Career Admin</title>
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
        }
        .btn-primary {
            background-color: #03c0b4;
            border: none;
        }
        .btn-primary:hover {
            background-color: #028d82;
        }
        .btn-warning {
            background-color: #f28d52;
            border: none;
        }
        .btn-warning:hover {
            background-color: #e07d42;
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
            <a class="nav-link active" href="positions.php">
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
            <h2>Manage Job Positions</h2>
            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addPositionModal">
                <i class="fas fa-plus me-2"></i>Add New Position
            </button>
        </div>
        
        <?php if ($message): ?>
            <div class="alert alert-<?= $messageType ?> alert-dismissible fade show">
                <?= $message ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
        <?php endif; ?>
        
        <div class="card">
            <div class="card-body">
                <?php if (empty($positions)): ?>
                    <p class="text-center text-muted py-5">No positions added yet. Click "Add New Position" to create one.</p>
                <?php else: ?>
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>Job Title</th>
                                    <th>Location</th>
                                    <th>Type</th>
                                    <th>Department</th>
                                    <th>Status</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($positions as $pos): ?>
                                    <tr>
                                        <td><strong><?= htmlspecialchars($pos['title']) ?></strong></td>
                                        <td><?= htmlspecialchars($pos['location']) ?></td>
                                        <td><?= htmlspecialchars($pos['type']) ?></td>
                                        <td><?= htmlspecialchars($pos['department']) ?></td>
                                        <td>
                                            <span class="badge <?= $pos['status'] === 'active' ? 'bg-success' : 'bg-secondary' ?>">
                                                <?= ucfirst($pos['status']) ?>
                                            </span>
                                        </td>
                                        <td>
                                            <form method="POST" style="display: inline;">
                                                <input type="hidden" name="action" value="toggle">
                                                <input type="hidden" name="id" value="<?= $pos['id'] ?>">
                                                <button type="submit" class="btn btn-sm <?= $pos['status'] === 'active' ? 'btn-secondary' : 'btn-success' ?>" title="<?= $pos['status'] === 'active' ? 'Pause' : 'Activate' ?>">
                                                    <i class="fas fa-<?= $pos['status'] === 'active' ? 'pause' : 'play' ?>"></i>
                                                </button>
                                            </form>
                                            <a href="?edit=<?= $pos['id'] ?>" class="btn btn-sm btn-warning" data-bs-toggle="modal" data-bs-target="#editPositionModal<?= $pos['id'] ?>">
                                                <i class="fas fa-edit"></i>
                                            </a>
                                            <button type="button" class="btn btn-sm btn-danger" onclick="deletePosition('<?= $pos['id'] ?>')">
                                                <i class="fas fa-trash"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    
                                    <!-- Edit Modal for each position -->
                                    <div class="modal fade" id="editPositionModal<?= $pos['id'] ?>" tabindex="-1">
                                        <div class="modal-dialog modal-lg">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">Edit Position</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                                </div>
                                                <form method="POST">
                                                    <div class="modal-body">
                                                        <input type="hidden" name="action" value="edit">
                                                        <input type="hidden" name="id" value="<?= $pos['id'] ?>">
                                                        
                                                        <div class="row">
                                                            <div class="col-md-6 mb-3">
                                                                <label class="form-label">Job Title *</label>
                                                                <input type="text" name="title" class="form-control" value="<?= htmlspecialchars($pos['title']) ?>" required>
                                                            </div>
                                                            <div class="col-md-6 mb-3">
                                                                <label class="form-label">Location *</label>
                                                                <input type="text" name="location" class="form-control" value="<?= htmlspecialchars($pos['location']) ?>" required>
                                                            </div>
                                                            <div class="col-md-6 mb-3">
                                                                <label class="form-label">Employment Type *</label>
                                                                <select name="type" class="form-select" required>
                                                                    <option value="Full Time" <?= $pos['type'] === 'Full Time' ? 'selected' : '' ?>>Full Time</option>
                                                                    <option value="Part Time" <?= $pos['type'] === 'Part Time' ? 'selected' : '' ?>>Part Time</option>
                                                                    <option value="Contract" <?= $pos['type'] === 'Contract' ? 'selected' : '' ?>>Contract</option>
                                                                </select>
                                                            </div>
                                                            <div class="col-md-6 mb-3">
                                                                <label class="form-label">Department *</label>
                                                                <input type="text" name="department" class="form-control" value="<?= htmlspecialchars($pos['department']) ?>" required>
                                                            </div>
                                                            <div class="col-md-12 mb-3">
                                                                <label class="form-label">Job Description *</label>
                                                                <textarea name="description" class="form-control" rows="3" required><?= htmlspecialchars($pos['description']) ?></textarea>
                                                            </div>
                                                            <div class="col-md-12 mb-3">
                                                                <label class="form-label">Requirements (one per line)</label>
                                                                <textarea name="requirements" class="form-control" rows="4"><?= htmlspecialchars($pos['requirements']) ?></textarea>
                                                            </div>
                                                            <div class="col-md-12 mb-3">
                                                                <label class="form-label">Responsibilities (one per line)</label>
                                                                <textarea name="responsibilities" class="form-control" rows="4"><?= htmlspecialchars($pos['responsibilities']) ?></textarea>
                                                            </div>
                                                            <div class="col-md-12 mb-3">
                                                                <label class="form-label">Status *</label>
                                                                <select name="status" class="form-select" required>
                                                                    <option value="active" <?= $pos['status'] === 'active' ? 'selected' : '' ?>>Active</option>
                                                                    <option value="paused" <?= $pos['status'] === 'paused' ? 'selected' : '' ?>>Paused</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                                        <button type="submit" class="btn btn-primary">Save Changes</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
    
    <!-- Add Position Modal -->
    <div class="modal fade" id="addPositionModal" tabindex="-1">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add New Position</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <form method="POST">
                    <div class="modal-body">
                        <input type="hidden" name="action" value="add">
                        
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Job Title *</label>
                                <input type="text" name="title" class="form-control" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Location *</label>
                                <input type="text" name="location" class="form-control" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Employment Type *</label>
                                <select name="type" class="form-select" required>
                                    <option value="">Select Type</option>
                                    <option value="Full Time">Full Time</option>
                                    <option value="Part Time">Part Time</option>
                                    <option value="Contract">Contract</option>
                                </select>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Department *</label>
                                <input type="text" name="department" class="form-control" required>
                            </div>
                            <div class="col-md-12 mb-3">
                                <label class="form-label">Job Description *</label>
                                <textarea name="description" class="form-control" rows="3" required></textarea>
                            </div>
                            <div class="col-md-12 mb-3">
                                <label class="form-label">Requirements (one per line)</label>
                                <textarea name="requirements" class="form-control" rows="4" placeholder="e.g., 2+ years experience&#10;Bachelor's degree required&#10;Strong communication skills"></textarea>
                            </div>
                            <div class="col-md-12 mb-3">
                                <label class="form-label">Responsibilities (one per line)</label>
                                <textarea name="responsibilities" class="form-control" rows="4" placeholder="e.g., Provide patient care&#10;Maintain medical records&#10;Collaborate with healthcare team"></textarea>
                            </div>
                            <div class="col-md-12 mb-3">
                                <label class="form-label">Status *</label>
                                <select name="status" class="form-select" required>
                                    <option value="active">Active</option>
                                    <option value="paused">Paused</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-primary">Add Position</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        function deletePosition(id) {
            if (confirm('Are you sure you want to delete this position?')) {
                const form = document.createElement('form');
                form.method = 'POST';
                form.innerHTML = `
                    <input type="hidden" name="action" value="delete">
                    <input type="hidden" name="id" value="${id}">
                `;
                document.body.appendChild(form);
                form.submit();
            }
        }
    </script>
</body>
</html>
