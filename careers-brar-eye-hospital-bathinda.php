<?php
$pageTitle = "Careers at Brar Eye Hospital Bathinda | Job Openings in Eye Care Punjab";
$pageDescription = "Join the team at Brar Eye Hospital Bathinda. Explore job openings for ophthalmologists, nurses, technicians and staff at one of Punjab's leading eye hospitals.";
$pageKeywords = "eye hospital jobs Bathinda, ophthalmology careers Punjab, healthcare jobs Bathinda, eye care job openings, Brar Eye Hospital recruitment";
include('header.php');

// Load active positions from backend
$positions = [];
$positionsFile = 'careerbackend/data/positions.json';
if (file_exists($positionsFile)) {
    $positionsData = json_decode(file_get_contents($positionsFile), true);
    if ($positionsData) {
        $positions = array_filter($positionsData, function($pos) {
            return isset($pos['status']) && $pos['status'] === 'active';
        });
    }
}
?>

<style>
    /* Main Layout Fixes */
    body {
        font-family: 'Poppins', sans-serif;
        overflow-x: hidden;
    }
    
    .py-80 {
        padding: 80px 0;
    }
    
    /* Hero Section Improvements */
    .career-hero {
        background: linear-gradient(135deg, #03c0b4 0%, #f28d52 100%);
        color: white;
        padding: 120px 0;
        position: relative;
        overflow: hidden;
    }
    
    .career-hero:after {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: url('https://images.unsplash.com/photo-1579684385127-1ef15d508118?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80') no-repeat center center/cover;
        opacity: 0.15;
        z-index: 0;
    }
    
    .career-hero-content {
        position: relative;
        z-index: 1;
    }
    
    .career-hero h1 {
        font-weight: 700;
        font-size: 3rem;
        text-shadow: 0 2px 4px rgba(0,0,0,0.1);
    }
    
    /* Job Cards Enhancements */
    .job-card {
        border: none;
        border-radius: 12px;
        box-shadow: 0 5px 20px rgba(0,0,0,0.08);
        transition: all 0.4s ease;
        margin-bottom: 30px;
        overflow: hidden;
        height: 100%;
    }
    
    .job-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 15px 30px rgba(0,0,0,0.15);
    }
    
    .job-card-header {
        background-color: #03c0b4;
        color: white;
        padding: 25px;
    }
    
    .job-card-header h3 {
        font-weight: 600;
        margin-bottom: 5px;
    }
    
    .job-card-body {
        padding: 30px;
        background: white;
    }
    
    .job-card-body ul {
        padding-left: 20px;
        margin-bottom: 25px;
    }
    
    .job-card-body ul li {
        margin-bottom: 8px;
        position: relative;
    }
    
    .job-card-body ul li:before {
        content: '•';
        color: #f28d52;
        font-weight: bold;
        display: inline-block;
        width: 1em;
        margin-left: -1em;
    }
    
    /* Buttons */
    .apply-btn {
        background-color: #f28d52;
        border: none;
        padding: 12px 30px;
        color: white;
        border-radius: 50px;
        font-weight: 600;
        transition: all 0.3s ease;
        display: inline-block;
        text-decoration: none;
        cursor: pointer;
    }
    
    .apply-btn:hover {
        background-color: #e07d42;
        color: white;
        transform: translateY(-3px);
        box-shadow: 0 5px 15px rgba(242, 141, 82, 0.3);
    }
    
    /* Section Titles */
    .section-title {
        position: relative;
        margin-bottom: 60px;
        color: #03c0b4;
        font-weight: 700;
        text-align: center;
    }
    
    .section-title:after {
        content: '';
        position: absolute;
        bottom: -20px;
        left: 50%;
        transform: translateX(-50%);
        width: 100px;
        height: 4px;
        background-color: #f28d52;
        border-radius: 2px;
    }
    
    .text-left.section-title:after {
        left: 0;
        transform: none;
    }
    
    /* Culture Section */
    .culture-img {
        border-radius: 12px;
        box-shadow: 0 15px 30px rgba(0,0,0,0.1);
        transition: all 0.4s ease;
    }
    
    .culture-img:hover {
        transform: scale(1.02);
    }
    
    /* Application Form Styles */
    .application-form-section {
        background-color: #f8fafc;
        padding: 80px 0;
    }
    
    .form-card {
        background: white;
        border-radius: 15px;
        box-shadow: 0 10px 30px rgba(0,0,0,0.1);
        padding: 40px;
    }
    
    .form-control, .form-select {
        border: 1px solid #e0e0e0;
        border-radius: 8px;
        padding: 12px 16px;
    }
    
    .form-control:focus, .form-select:focus {
        border-color: #03c0b4;
        box-shadow: 0 0 0 0.2rem rgba(3, 192, 180, 0.25);
    }
    
    /* Responsive Adjustments */
    @media (max-width: 768px) {
        .career-hero {
            padding: 80px 0;
        }
        
        .career-hero h1 {
            font-size: 2.2rem;
        }
        
        .py-80 {
            padding: 60px 0;
        }
        
        .section-title {
            margin-bottom: 40px;
        }
    }
</style>

<!-- Hero Section -->
<section class="career-hero">
    <div class="container">
        <div class="row align-items-center career-hero-content">
            <div class="col-lg-8 mx-auto text-center">
                <h1 class="display-4 mb-4"  style="color: white;">Careers at Brar Eye Hospital</h1>
                <p class="lead mb-5" style="color: white;">
                    Join our team of healthcare professionals dedicated to providing luxury care with a personal touch.
                </p>
                <a href="#open-positions" class="btn btn-light btn-lg px-5 py-3 rounded-pill">View Open Positions</a>
            </div>
        </div>
    </div>
</section>

<!-- Why Join Us Section -->
<section class="py-80">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 text-center">
                <h2 class="section-title">Why Join Brar Eye Hospital?</h2>
                <p class="lead" style="font-size: 1.2rem;">At Brar Eye  Hospital, we believe our team is our greatest asset. We offer a work environment that fosters growth, innovation, and excellence in patient care with state-of-the-art facilities and a supportive community.</p>
            </div>
        </div>
    </div>
</section>

<!-- Open Positions Section -->
<section id="open-positions" class="py-80 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center mb-5">
                <h2 class="section-title">Current Openings</h2>
                <p class="lead">Explore our available positions and find where you fit in our healthcare family.</p>
            </div>
        </div>
        <div class="row">
            <?php if (empty($positions)): ?>
                <div class="col-12">
                    <div class="alert alert-info text-center">
                        <i class="fas fa-info-circle me-2"></i>
                        No positions are currently available. Please check back later or submit a general application below.
                    </div>
                </div>
            <?php else: ?>
                <?php foreach ($positions as $pos): ?>
                    <div class="col-lg-6 mb-4">
                        <div class="job-card">
                            <div class="job-card-header">
                                <h3><?= htmlspecialchars($pos['title']) ?></h3>
                                <p class="mb-0">
                                    <i class="fas fa-clock me-2"></i><?= htmlspecialchars($pos['type']) ?> | 
                                    <i class="fas fa-map-marker-alt me-2"></i><?= htmlspecialchars($pos['location']) ?>
                                </p>
                            </div>
                            <div class="job-card-body">
                                <p><?= htmlspecialchars($pos['description']) ?></p>
                                
                                <?php if (!empty($pos['requirements'])): ?>
                                    <strong>Requirements:</strong>
                                    <ul>
                                        <?php
                                        $reqs = explode("\n", $pos['requirements']);
                                        foreach ($reqs as $req) {
                                            $req = trim($req);
                                            if (!empty($req)) {
                                                echo '<li>' . htmlspecialchars($req) . '</li>';
                                            }
                                        }
                                        ?>
                                    </ul>
                                <?php endif; ?>
                                
                                <div class="text-center mt-4">
                                    <button class="apply-btn" onclick="openApplicationModal('<?= htmlspecialchars($pos['title'], ENT_QUOTES) ?>')">
                                        Apply Now <i class="fas fa-arrow-right ms-2"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
    </div>
</section>

<!-- Culture Section -->
<section class="py-80"> 
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 mb-5 mb-lg-0">
                <h2 class="section-title text-left">Our Culture of Excellence</h2>
                <p class="mb-4">At Brar Eye Hospital, we cultivate an environment where professionals can thrive. Our culture is built on collaboration, innovation, and compassionate care.</p>
                <ul class="list-unstyled">
                    <li class="mb-3 d-flex align-items-start">
                        <i class="fas fa-check-circle text-success mt-1 me-3" style="font-size: 1.2rem;"></i>
                        <div>
                            <strong class="d-block">Collaborative Environment</strong>
                            <span>Team-based approach to patient care with interdisciplinary collaboration</span>
                        </div>
                    </li>
                    <li class="mb-3 d-flex align-items-start">
                        <i class="fas fa-check-circle text-success mt-1 me-3" style="font-size: 1.2rem;"></i>
                        <div>
                            <strong class="d-block">Cutting-Edge Innovation</strong>
                            <span>Access to the latest medical technologies and treatment methodologies</span>
                        </div>
                    </li>
                    <li class="mb-3 d-flex align-items-start">
                        <i class="fas fa-check-circle text-success mt-1 me-3" style="font-size: 1.2rem;"></i>
                        <div>
                            <strong class="d-block">Professional Growth</strong>
                            <span>Clear pathways for career advancement with mentorship programs</span>
                        </div>
                    </li>
                    <li class="mb-3 d-flex align-items-start">
                        <i class="fas fa-check-circle text-success mt-1 me-3" style="font-size: 1.2rem;"></i>
                        <div>
                            <strong class="d-block">Work-Life Balance</strong>
                            <span>Support for your professional and personal life with flexible scheduling</span>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="col-lg-6">
                <img src="https://images.unsplash.com/photo-1576091160550-2173dba999ef?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Hospital Team Culture" class="img-fluid rounded shadow culture-img">
            </div>
        </div>
    </div>
</section>

<!-- Application Modal -->
<div class="modal fade" id="applicationModal" tabindex="-1">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header" style="background: linear-gradient(135deg, #03c0b4 0%, #f28d52 100%); color: white;">
                <h5 class="modal-title">Apply for Position</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <div id="application-message"></div>
                <form id="applicationForm" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Full Name *</label>
                            <input type="text" name="name" class="form-control" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Email Address *</label>
                            <input type="email" name="email" class="form-control" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Phone Number *</label>
                            <input type="tel" name="phone" class="form-control" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Position *</label>
                            <input type="text" name="position" id="positionField" class="form-control" required readonly>
                        </div>
                        <div class="col-md-12 mb-3">
                            <label class="form-label">Upload Resume (PDF, DOC, DOCX - Max 5MB) *</label>
                            <input type="file" name="resume" class="form-control" accept=".pdf,.doc,.docx" required>
                        </div>
                        <div class="col-md-12 mb-3">
                            <label class="form-label">Cover Letter / Message</label>
                            <textarea name="message" class="form-control" rows="4" placeholder="Tell us why you're interested in this position..."></textarea>
                        </div>
                    </div>
                    <div class="text-end">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn apply-btn">
                            <i class="fas fa-paper-plane me-2"></i>Submit Application
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

<script>
    function openApplicationModal(position) {
        document.getElementById('positionField').value = position;
        document.getElementById('application-message').innerHTML = '';
        document.getElementById('applicationForm').reset();
        document.getElementById('positionField').value = position;
        var modal = new bootstrap.Modal(document.getElementById('applicationModal'));
        modal.show();
    }
    
    document.getElementById('applicationForm').addEventListener('submit', function(e) {
        e.preventDefault();
        
        const formData = new FormData(this);
        const submitBtn = this.querySelector('button[type="submit"]');
        const messageDiv = document.getElementById('application-message');
        
        submitBtn.disabled = true;
        submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin me-2"></i>Submitting...';
        
        fetch('careerbackend/process_application.php', {
            method: 'POST',
            body: formData
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                messageDiv.innerHTML = `
                    <div class="alert alert-success">
                        <i class="fas fa-check-circle me-2"></i>${data.message}
                    </div>
                `;
                this.reset();
                setTimeout(() => {
                    bootstrap.Modal.getInstance(document.getElementById('applicationModal')).hide();
                }, 3000);
            } else {
                messageDiv.innerHTML = `
                    <div class="alert alert-danger">
                        <i class="fas fa-exclamation-circle me-2"></i>${data.message}
                    </div>
                `;
            }
        })
        .catch(error => {
            messageDiv.innerHTML = `
                <div class="alert alert-danger">
                    <i class="fas fa-exclamation-circle me-2"></i>Error submitting application. Please try again.
                </div>
            `;
        })
        .finally(() => {
            submitBtn.disabled = false;
            submitBtn.innerHTML = '<i class="fas fa-paper-plane me-2"></i>Submit Application';
        });
    });
</script>

<?php include('footer.php'); ?>
